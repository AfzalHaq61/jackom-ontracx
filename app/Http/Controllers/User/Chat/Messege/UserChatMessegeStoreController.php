<?php

namespace App\Http\Controllers\User\Chat\Messege;

use App\Http\Controllers\Controller;
use App\Models\Messege;
use Illuminate\Http\Request;

class UserChatMessegeStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return request('chat_id');
        try {
            Messege::create([
                'user_id' => request('user'),
                'messege' => $request['messege']
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect()
            ->back()
            ->with('success', "Messege successfully created.");
    }
}
