<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Request as ModelsRequest;
use Inertia\Inertia;

class ProviderDetailController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ModelsRequest $request)
    {
        return Inertia::render('Provider/RequestDetails', [
            'request' => $request
        ])->with('success_message', "Yay it worked");
    }
}
