<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function readArticles() {
    	$data = file_get_contents('https://newsapi.org/v2/everything?q=apple&from=2019-11-11&to=2019-11-11&sortBy=popularity&apiKey=96866f774ece4e27bbeaec10eaa42f3d');
    	$articles = json_decode($data);

    	$articles = $articles->articles;
    	dd($articles);
    	return view('articles.welcome', compact('articles'));

    }
}
