<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;

class CreditsController extends Controller
{
    public function index()
    {
        return view('credits');
    }
}
