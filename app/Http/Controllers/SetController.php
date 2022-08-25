<?php

namespace App\Http\Controllers;

use App\Models\Flashcard;
use App\Models\Saved;
use App\Models\Set;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function my_space()
    {
        $user = User::whereId(Auth::user()->id)->firstOrFail();
        $saved = Saved::whereUserId($user->id)->get();
        $created = Set::whereUserId($user->id)->get();

        return view('set.my_space', compact('user', 'saved', 'created'));
    }

    public function find(Request $request)
    {
        $search = $request->input('search');
        $sets = Set::latest()->where('name', 'like', '%' .$search. '%')->get();
        $user = User::whereId(Auth::id())->firstOrFail();

        return view('set.find', compact('sets', 'user'));
    }

    public function show(Request $request)
    {
        $set = Set::find($request->route('set'));

        return view('set.show', compact('set'));
    }

    public function create()
    {
        return view('set.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $set = Set::create(['name' => $data['name'], 'user_id' => Auth::id()]);

        unset($data['name']);

        $cards = array();
        foreach ($data as $key => $value){
            if (str_contains($key, 'term')){
                $flashcard = new Flashcard;
                $flashcard->set_id = $set->id;
                $flashcard->term = $value;
            }
            elseif (str_contains($key, 'definition')){
                $flashcard->definition = $value;
                array_push($cards, $flashcard);

            }
        }
//        dd($cards);
        $set->flashcards()->saveMany($cards);

        return redirect()->route('sets.show', $set->id);
    }

    public function edit(Request $request)
    {
        $set = Set::find($request->route('set'));

        return view('set.edit', compact('set'));
    }

    public function update(Request $request)
    {
        $set = Set::find($request->route('set'));
        $data = $request->all();
        $set->name = $data['name'];


        $cards = array();
        unset($data['name']);

        foreach ($data as $key => $value){
            if (str_contains($key, 'term')){
                $flashcard = new Flashcard;
                $flashcard->set_id = $set->id;
                $flashcard->term = $value;
            }
            elseif (str_contains($key, 'definition')){
                $flashcard->definition = $value;
                array_push($cards, $flashcard);

            }
        }

        if (count($set->flashcards) <= count($cards)) {

            for ($i = 0; $i < count($set->flashcards); $i++) {
                $set->flashcards[$i]->term = $cards[$i]->term;
                $set->flashcards[$i]->definition = $cards[$i]->definition;
            }
            $newCards = array();
            for ($i = count($set->flashcards); $i < count($cards); $i++) {
                $flashcard = new Flashcard;
                $flashcard->term = $cards[$i]->term;
                $flashcard->definition = $cards[$i]->definition;
                array_push($newCards, $flashcard);
            }
            $set->save();
            $set->flashcards()->saveMany($set->flashcards);
            $set->flashcards()->saveMany($newCards);
        }
        else{
            for ($i = 0; $i < count($cards); $i++) {
                $set->flashcards[$i]->term = $cards[$i]->term;
                $set->flashcards[$i]->definition = $cards[$i]->definition;
            }
            $delId = array();
            for ($i = count($cards); $i < count($set->flashcards); $i++) {
                array_push($delId, $set->flashcards[$i]->id);
            }
            $set->save();
            $set->flashcards()->saveMany($set->flashcards);
            Flashcard::whereId($delId)->delete();
        }

        return redirect()->route('sets.show', $set->id);
//        dd($set->flashcards, count($set->flashcards), $cards, count($cards));
    }

    public function destroy(Request $request)
    {
        Set::whereId($request->route('set'))->delete();
    }

}
