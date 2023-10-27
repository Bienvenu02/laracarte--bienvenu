<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    public function create(){
        return view('contacts.create');
    }

    public function store(MessageRequest $request){
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('welcome'));
        }
    }
}
