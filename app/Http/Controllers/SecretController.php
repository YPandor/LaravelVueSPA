<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Secret;

class SecretController extends Controller
{
    public function index(Request $request) {
        if (!$request->user()) {
            return "You need to login first";
        }

        return $request->user()->secrets;
    }
}
