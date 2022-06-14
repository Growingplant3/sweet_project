<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UploadImage;

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

    function store(Request $request)
    {
        $img = $request->image;
        $path = $img->store('img', 'public');
        UploadImage::create([
            'file_name' => $img->getFilename(),
            'file_path' => $path,
        ]);

        return redirect()->route('default');
    }
}
