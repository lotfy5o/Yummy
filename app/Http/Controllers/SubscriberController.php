<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSubscriber;
use App\Models\Subscriber;

class SubscriberController extends Controller
{

    public function store(StoreSubscriber $request)
    {
        $data = $request->validated();
        Subscriber::create($data);
        return back()->with('subscriberStatus', 'You have successfully subscribed!');
    }
}
