<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function default()
    {
        return view('web.top');
    }

    public function work()
    {
        return view('web.work');
    }
}
