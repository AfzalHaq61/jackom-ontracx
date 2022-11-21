<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Http\Resources\RequestCollection;
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
        $query = ModelsRequest::query()->where('uuid', $request['uuid'])->paginate(1);
        return Inertia::render('Provider/RequestDetails', [
            'user' => new RequestCollection($query),
            'request' => $request
        ])->with('success_message', "Yay it worked");
    }
}
