<?php

namespace App\Http\Controllers;

use App\Models\Messege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chat');
    }

    public function fetchMessages()
    {
        return Messege::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        return $user = Auth::user();
    }

    public function test(Request $request)
    {
        return request('id');
    }

    public function testCreate(Request $request)
    {
        return Inertia::render('Axios', [
        ])->with('success_message', "Yay it worked");
    }

    public function stripe() {
        return Inertia::render('stripe');
    }

    public function success() {
        return "Payment Successfull";
    }

    public function cancel() {
        return "Payment Cancel";
    }
}
