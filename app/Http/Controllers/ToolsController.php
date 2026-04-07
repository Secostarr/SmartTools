<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function qrTools()
    {
        
        return view('tools.qrTools');

    }
}
