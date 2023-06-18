<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardMainController extends Controller
{
    public function index()
    {
        return view( 'main');
    }
    public function test_content()
    {
        return view( 'test');
    }
}
//cc
