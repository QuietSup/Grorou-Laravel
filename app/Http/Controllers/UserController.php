<?php

namespace App\Http\Controllers;

use App\Models\Flashcard;
use App\Models\Set;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function edit()
    {
//        Auth::logout();
        $user = User::find(Auth::id());
        $created = count($user->sets);
        $studying = count($user->savedSet);

        return view('user.show', compact('user', 'studying', 'created'));
    }

    public function update(Request $request) {
        $user = User::find(Auth::id());

        $input = $request->all();

        if($request->hasFile('avatar')) {
            if(str_starts_with($request->avatar->getMimeType(), 'image')){
                if ($user->avatar !== null) Storage::delete($user->avatar);
                $filename = $request->avatar->hashName();
                $request->avatar->storeAs('avatars', $filename, 'public');
                $user->avatar = $filename;
            }
        }
//        dd($request);

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'string', 'email', 'max:255',
                Rule::unique('users')->ignoreModel($user),
            ],
            ]
            + ($input['password'] !== null ? ['password' => ['required', 'string', 'min:8']] : [])
        );
        if(!$input['password']) unset($input['password']);
        else $input['password'] = Hash::make($input['password']);

        $user->fill($input)->save();
//        dd($user);
//        $user->update($input);

        return back();
    }
}
