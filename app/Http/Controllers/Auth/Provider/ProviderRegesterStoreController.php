<?php

namespace App\Http\Controllers\Auth\Provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Provider\ProviderRegesterCreateRequest;
use App\Models\Provider;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProviderRegesterStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ProviderRegesterCreateRequest $request)
    {
        $data = $request->validated();

        try {
            $user = User::create([
                'uuid' => $data['uuid'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'region_id' => $data['region_id'],
                'city_id' => $data['city_id'],
                'contact_number' => $data['mobile_number'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'checkbox' => $data['checkbox'],
            ]);

            $provider = Provider::create([
                'uuid' => $data['uuid'],
                'name' => $data['first_name'].' '.$data['last_name'],
                'address' => $data['address'], 
                'mobile_number' => $data['mobile_number'],
                'registration_number' => $data['registration_number'],
                'nationality' => $data['nationality'],
                'country' => $data['country'],
                'region' => $data['region_id'],
                'city' => $data['city_id'],
                'iban' => $data['iban'], 
                'account_number' => $data['account_number'], 
                'comercial_activity' => $data['comercial_activity'], 
                'legal_capacity' => $data['legal_capacity'],  
                'license_photo_1' => uniqid() . '-' . $data['license_photo_1'],
                'license_photo_2' => uniqid() . '-' . $data['license_photo_2'],
                'upload_photo' => uniqid() . '-' . $data['upload_photo'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        Auth::login($user);

        return Redirect(RouteServiceProvider::PROVIDERHOME)
            ->with('success', "Provider Successfully created.");
    }
}
