<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/add', function () {
    return view('addnews');
});

$router->resource('/add','HomeController');

Route::group(['middleware' => ['auth']], function() {
});

//Route::get('news','HomeController@NewsViews');

Route::get('news', 'HomeController@getTenNews');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('rss', function () {

    /* create new feed */
    $feed = App::make("feed");
 
    $feed->setCache(60, 'laravelFeedKey');
    /* creating rss feed with our most recent 20 posts */
    $posts = \DB::table('news')->orderBy('pubDate', 'desc')->take(20)->get();
 
    if (!$feed->isCached())
    {
    /* set your feed's title, description, link, pubdate and language */
    $feed->title = 'News janar XML';
    $feed->description = 'XML file for news from Janar Tomband';
    $feed->logo = 'img/xml_pic.png';
    $feed->link = url('feed');
    $feed->setDateFormat('datetime');
    $feed->pubdate = $posts[0]->pubDate;
    $feed->lang = 'en';
    $feed->setShortening(true);
    $feed->setTextLimit(100);
 
 
    foreach ($posts as $post)
    {
        $feed->add($post->id, $post->author_user, $post->title, $post->pubDate, $post->description,$post->link);
    }
}
 
    return $feed->render('atom');
 });
