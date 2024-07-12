<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MainController extends Controller
{

    private function imageCollection(string $path)
    {

        $images = File::files(public_path("/assets/img/{{$path}}/"));

        $imagesArray = collect($images)->map(function ($image) {
            return asset(str_replace(public_path(), '', $image->getPathname()));
        })->shuffle()->toArray();

        return $imagesArray;
    }




    public function index(){


        $images = $this->imageCollection('img-carousel');

        

        return view("pages.home.index",compact("images"));
    }
}
