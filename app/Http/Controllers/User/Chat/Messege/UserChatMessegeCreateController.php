<?php

namespace App\Http\Controllers\User\Chat\Messege;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChatCollection;
use App\Models\chat;
use App\Models\Messege;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserChatMessegeCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(chat $chat)
    {
        $query = chat::query()
            ->where('id', $chat['id'])
            ->paginate('50');

        return Inertia::render('User/UserMesseges', [
            'chat' => new ChatCollection($query),
            'messeges' => Messege::where('sender_id', Auth::user()->id)->orWhere('sender_id', $chat['reciever_id'])->get(),
            'user' => Auth::user()->id,
            'reciever' => $chat['reciever_id'],
            'name' => Auth::user()->first_name,
        ])
            ->with('success_message', "Yay it worked");
    }
}
