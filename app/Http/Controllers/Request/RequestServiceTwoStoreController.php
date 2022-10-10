<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestServiceTwoStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RequestServiceOneStoreController $request)
    {
        $data = $request->validated();
        try {
            $user = User::create([
                'uuid' => $data['uuid'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'country' => $data['country'],
                'city' => $data['city'],
                'contact_number' => $data['contact_number'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'checkbox' => $data['checkbox'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        Auth::login($user);

        return Redirect(RouteServiceProvider::HOME)
            ->with('success', "User Successfully created.");
    }
}
