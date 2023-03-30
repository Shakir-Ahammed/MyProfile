<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\Info;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Storage;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::user()) {
            $users = DB::table('users')->where('email', Auth::user()->email)->get();
            return view('home', ['users' => $users]);
        } else {
        }


        // return view('home');
    }
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        // Update the user's information
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);

        // Update the user's profile image
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($user->dp) {
                Storage::delete('public/' . $user->dp);
            }

            // Store the new image
            $path = $request->file('image')->store('public/profile_images');
            $user->dp = str_replace('public/', '', $path);
            $user->save();
        }

        // Return a success response
        return redirect()->route('home')->with('success', 'Profile updated successfully.');
    }
}
