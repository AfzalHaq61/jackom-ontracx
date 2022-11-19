<?php

namespace App\Http\Controllers\User\Chat\Messege;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChatCollection;
use App\Models\chat;
use App\Models\Messege;
use App\Models\User;
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
    public function __invoke()
    {
        $query = chat::query()
            ->where('id', request('chat_id'))
            ->paginate('50');

        return Inertia::render('User/UserMesseges', [
            'user' => Auth::user(),
            'chat' => new ChatCollection($query),
            'sender' => Auth::user(),
            'reciever' => User::where('id', request('reciever_id'))->get(),
            'messeges' => Messege::with(['user'])->get(),
        ])
            ->with('success_message', "Yay it worked");
    }
}
