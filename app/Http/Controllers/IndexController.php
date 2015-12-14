<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
use App\Tag;
use App\Image;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::OrderBy('id', 'DESC')->paginate(7);
        $categories = Category::orderBy('name', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();
        $images = Image::orderBy('article_id', 'DESC')->get();
        
        return view('admin.index')
            ->with('articles', $articles)
            ->with('tags', $tags)
            ->with('images', $images)
            ->with('categories' , $categories);
        
    }
}
