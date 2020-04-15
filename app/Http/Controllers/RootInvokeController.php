<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RootInvokeController extends Controller
{
    public function __invoke()
    {
        return redirect()->route('dashboard');
    }
}
