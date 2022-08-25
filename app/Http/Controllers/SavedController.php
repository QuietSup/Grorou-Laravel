<?php

namespace App\Http\Controllers;

use App\Models\Flashcard;
use App\Models\Saved;
use App\Models\Set;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SavedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(Request $request)
    {
        $set_id = $request->route('saved');
        $saved = Saved::whereSetId($set_id)->whereUserId(Auth::id())->first();
        if ($saved){
            $saved->delete();
        }
        else {
            $saved = new Saved;
            $saved->user_id = Auth::id();
            $saved->set_id = $set_id;
            $saved->save();
        }
    }

    public function destroy(Request $request)
    {
        Saved::whereUserId(Auth::id())->whereSetId($request->route('saved'))->delete();
    }

}
