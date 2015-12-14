<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;
use Carbon\Carbon;

class ImagesController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::OrderBy('article_id', 'DESC' )->paginate(7);
        return view('admin.images.index')->with('images', $images);
    }

}
