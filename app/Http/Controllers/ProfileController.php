<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
    public function edit($id)
    {
        $user = User::find(Auth::user()->id);
        return view('edit-profile', compact('user'));
    }
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->image = 'storage/' . $request->file('image')->store('img', 'public');
        $user->password = $request->password;
        $user->save();
        return redirect()->route('profile');
    }
}
