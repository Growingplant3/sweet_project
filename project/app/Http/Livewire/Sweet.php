<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UploadImage;

class Sweet extends Component
{
    public $amount = 1;

    public function add_image()
    {
        $this->amount += 1;
    }

    public function render()
    {
        $images = UploadImage::take($this->amount)->get();

        return view('livewire.sweet', compact('images'));
    }
}
