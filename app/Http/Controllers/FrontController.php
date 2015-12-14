<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Image;
use App\Tag;
use App\Category;
use Carbon\Carbon;


class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        Carbon::setlocale('es');
    }

    public function index()
    {
        $articles = Article::OrderBy('id', 'DESC')->paginate(3);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
            $articles->lists('category_id');


        });

        $categories = Category::OrderBy('name', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();
        
        
        return view('front.index')
            ->with('articles', $articles)
            ->with('tags', $tags)
            ->with('categories' , $categories);
    }


}
