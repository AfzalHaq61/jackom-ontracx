<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegesterCreateRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Redirect;

class RegesterStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegesterCreateRequest $request)
    {
        $data = $request->validated();

        try {
            User::create([
                'uuid' => $data['uuid'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'country' => $data['country'],
                'city' => $data['city'],
                'contact_number' => $data['contact_number'],
                'email' => $data['email'],
                'password' => $data['password'],
                'confirm_password' => $data['confirm_password'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('main.page')
            ->with('success', "User Successfully created.");
    }
}
