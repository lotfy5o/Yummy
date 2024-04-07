<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactReq;

class ContactController extends Controller
{
    public function store(StoreContactReq $request)
    {

        $data = $request->validated();
        Contact::create($data);
        return back()->with('contactStatus', 'You have successfully Contacted Us!');
    }
}
