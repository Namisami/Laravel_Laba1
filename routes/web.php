<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/news/{articleId}', function ($articleId) {
    $news = [
        ['index' => 0, 'title' => 'First title', 'body' => 'text', 'date' => '06.09.2022'],
        ['index' => 1, 'title' => 'Second title', 'body' => 'text', 'date' => '06.09.22'],
    ];
    foreach($news as $article) {
        if ($article['index'] == (int)$articleId) {
            break;
        }
    }
    return view('news', ['article' => $article]);
});

Route::get('/news', function () {
    $news = [
        ['title' => 'First title', 'body' => 'text'],
        ['title' => 'Second title', 'body' => 'text'],
    ];

    return view('news', ['news' => $news]);
});

Route::get('/about-us', function () {
    return view('about-us');
});


