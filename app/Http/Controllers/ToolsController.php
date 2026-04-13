<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function qrTools()
    {
        return view('tools.qrTools');
    }

    public function calculator()
    {
        return view('tools.calculator');
    }

    public function password()
    {
        return view('tools.password');    
    }

    public function converter()
    {
        return view('tools.converter');    
    }
}
