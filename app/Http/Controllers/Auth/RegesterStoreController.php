<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegesterCreateRequest;
use Illuminate\Foundation\Auth\User;

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
        dd("hello");
        $data = $request->validated();
        User::create($data);
        return redirect('/kawaif');
    }
}
