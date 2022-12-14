<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\Messege;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserChatCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        try {
            chat::create([
                'reciever_id' => request('reciever_id'),
                'sender_id' => Auth::user()->id,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Inertia::render('User/UserChat', [
            'chats' => chat::where('sender_id', Auth::user()->id)->get(),
            'sender' => Auth::user(),
            'reciever' => User::where('id', request('reciever_id'))->get(),
            'messeges' => Messege::with(['user'])->get(),
        ])
            ->with('success_message', "Yay it worked");
    }
}
