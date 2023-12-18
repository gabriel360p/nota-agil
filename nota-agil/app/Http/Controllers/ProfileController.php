<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.profile');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if ($request->password && $request->password_confirmation) {

            $validator = Validator::make($request->all(), ['password' => ['min:8', 'confirmed', 'required']]);
            if ($validator->fails()) {
                return back()->withErrors($validator);
            }
            Auth::user()->update($request->all());
            return back();
        } else {
            Auth::user()->update(['name' => $request->name, 'email' => $request->email,]);
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, Request $request)
    {
        if (Hash::check($request->password, Auth::user()->password)) {
            $user=Auth::user();
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            $user->delete();
            return redirect(url('/'));
        } else {
            return back()->withErrors(['erro' => "Senha Errada"]);
        }
    }
}
