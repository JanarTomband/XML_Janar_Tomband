<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Routing\Redirect;

class HomeController extends Controller
{
  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    // public function NewsViews()
    // {
    //     $News_View =\DB::select('select * from news');
    //     // ->orderBy('pubDate','asc')
    //     // ->limit(10);
    //     return view('news',["News_View"=>$News_View]);
    // }

    // $categories=Category::select("name", "description")
    // ->where("name","like","C%")->orderBy("name")->get();

// public function CategoryRev()
// {
//     $CategoryRev =\DB::select('SELECT category.category
//     FROM news
//     INNER JOIN category ON news.id_category = category.category_id
//     ORDER BY category.category');
//     return view('news',["CategoryRev"=>$CategoryRev]);

// }

    public function create()
    {
        $new_cat =\DB::select('select * from category');
        return view('addnews',["new_cat"=>$new_cat]);
    }

    public function getTenNews()
    {
    $News_View = \App\Post::orderBy('pubDate', 'desc')->take(10)->get();
    return view('news')->with('News_View', $News_View);
    }
    

public function store(Post $postModel, Request $request)
{
    \DB::insert('insert into news (author_user, title, description, id_category, link) values (?, ?, ?, ?, ?)', [$request->get('author_user'), $request->get('title'), $request->get('description'), $request->get('category_id'), $request->get('link')]);
    return redirect('home');
}
}
