<?php

namespace App\Http\Controllers\User\Chat\Messege;

use App\Http\Controllers\Controller;
use App\Models\chat;
use App\Models\Messege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserChatMessegeStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(chat $chat, Request $request)
    {
        try {
            Messege::create([
                'chat_id' => $chat['id'],
                'sender_id' => $chat['sender_id'],
                'reciever_id' => $chat['reciever_id'],
                'messege' => $request['messege'],
                'to_user_id' => $chat['reciever_id'],
                'from_user_id' => $chat['sender_id'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('user.chat.messege.create', [
            'chat' => $chat['id'],
        ])
            ->with('success', "Chat successfully created");
    }
}
