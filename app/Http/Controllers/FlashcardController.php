<?php

namespace App\Http\Controllers;

use App\Models\Flashcard;
use App\Models\Saved;
use App\Models\Set;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FlashcardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request)
    {
//        dd('a');
        $set = Set::find($request->route('flashcard'));
//        dd($set);

        return view('flashcard.show', compact('set'));
    }

}
