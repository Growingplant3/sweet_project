<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    function show()
    {
        return 'showだよ';
    }

    function create()
    {
        return view('web.common.top.upload_image.create');
    }

    function store()
    {
        return 'storeだよ';
    }
}
