<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegesterCreateRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            $user = User::create([
                'uuid' => $data['uuid'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'region_id' => $data['region_id'],
                'city_id' => $data['city_id'],
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
