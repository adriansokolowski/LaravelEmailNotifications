<?php

namespace App\Http\Controllers;

use App\Mail\DeleteAccountMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function deleteAccount()
    {
        $user = User::find(auth()->user()->id);
        Mail::to($user->email)->send(new DeleteAccountMail());

        Auth::logout();
        $user->delete();

        return redirect()->route('home');
    }
}
