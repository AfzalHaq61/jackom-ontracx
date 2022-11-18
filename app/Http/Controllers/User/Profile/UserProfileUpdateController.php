<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegesterCreateRequest;
use App\Http\Requests\User\Profile\UserProfileCreateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(User $user, UserProfileCreateRequest $request)
    {
        $user->uuid = $request->uuid;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->region_id = $request->region_id;
        $user->city_id = $request->city_id;
        $user->email = $request->email;
        $user->contact_number = $request->contact_number;
        $user->password = $request->password;
        $user->checkbox = $request->checkbox;

        $user->save();

        return Redirect()
            ->back()
            ->with('success', "User successfully updated.");
    }
}
