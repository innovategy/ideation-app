<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{

    public function index()
    {
        $organization = \App\Models\Organization::find(1);
        return response()->json($organization);
    }

}
