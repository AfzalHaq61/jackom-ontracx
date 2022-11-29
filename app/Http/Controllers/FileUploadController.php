<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderCollection;
use App\Models\Image;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FileUploadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $query = Order::query()
            ->paginate('50');

        return Inertia::render('FileUpload', [
            'orders' => new OrderCollection($query),
        ])
            ->with('success_message', "Yay it worked");
        // return $data = Order::where('id', 1)->get();

        // $query = Order::query()->paginate('50');



        // if (!$request->hasfile('image')) {
        //     return response()->json(['error' => 'There is no image present'], 400);
        // }

        // $request->validate([
        //     'image' => 'required|file|image'
        // ]);

        // $path = $request->file('image')->store('public/images');

        // if(!$path) {
        //     return response()->json(['error' => 'The file could not be saved'], 500);
        // }

        // $uploadFile = $request->file('image');

        // $image = Image::create([
        //     'name' => $uploadFile->hashName(),
        //     'externsion' => $uploadFile->extension(),
        //     'size' => $uploadFile->getSize(),
        // ]);

        // return $image;

        return Inertia::render('User/UserWallet', [
            'requests' => ModelsRequest::all()->where('user_id', Auth::user()->id),
            'offers' => Offer::all()->where('request_id', request('request')),
        ])->with('success_message', "Yay it worked");
    }
}
