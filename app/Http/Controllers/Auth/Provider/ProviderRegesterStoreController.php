<?php

namespace App\Http\Controllers\Auth\Provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Provider\ProviderRegesterCreateRequest;
use App\Models\Provider;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

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
            $provider = Provider::create([
                'uuid' => $data['uuid'],
                'name' => $data['name'],
                'address' => $data['address'], 
                'mobile_number' => $data['mobile_number'],
                'registration_number' => $data['registration_number'],
                'nationality' => $data['nationality'],
                'country' => $data['country'],
                'region' => $data['region'],
                'city' => $data['city'],
                'iban' => $data['iban'], 
                'account_number' => $data['account_number'], 
                'comercial_activity' => $data['comercial_activity'], 
                'legal_capacity' => $data['legal_capacity'],  
                'license_photo_1' => $data['license_photo_1'],
                'license_photo_2' => $data['license_photo_2'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        // Auth::login($provider);

        return Redirect(RouteServiceProvider::PROVIDERHOME)
            ->with('success', "Provider Successfully created.");
    }
}
