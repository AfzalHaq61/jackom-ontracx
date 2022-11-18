<?php

namespace App\Http\Controllers;

use App\Models\Messege;
use Illuminate\Http\Request;

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
