<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChatCollection;
use App\Models\chat;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserChatController extends Controller
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
            ->where('sender_id', Auth::user()->id)
            ->paginate('50');

        return Inertia::render('UserChat', [
            'chats' => new ChatCollection($query),
            'name' => Auth::user()->first_name,
        ])->with('success_message', "Yay it worked");
    }
}
