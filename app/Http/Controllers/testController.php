<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class testController extends Controller
{
    public function view($id){
        $article = Article::find($id);
        //$article->each(function($article){
            $article->category;
            $article->user;
            $article->tags;
        //});
        dd($article);
    }
}
