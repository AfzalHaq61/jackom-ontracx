<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\Messege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserChatStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try {
            chat::create([
                'reciever_id' => request('reciever_id'),
                'sender_id' => Auth::user()->id,
            ]);

            chat::create([
                'reciever_id' => Auth::user()->id,
                'sender_id' => request('reciever_id')
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('user.chat')
            ->with('success', "Chat successfully created");
    }
}
