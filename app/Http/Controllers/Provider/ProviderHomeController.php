<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProviderHomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $query = Request::query()
            ->paginate('3');
        return Inertia::render('ProviderHome', [
            'requests' => $query,
            'name' => Auth::user()->first_name,
        ])->with('success_message', "Yay it worked");
    }
}
