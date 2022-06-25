<?php

namespace IdeationApp\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{

    public function index()
    {
        $organization = \IdeationApp\Models\Organization::find(1);
        return response()->json($organization);
    }

}
