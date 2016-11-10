<?php
use  App\post;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//upadate db
//Route::get('/update', function (){
// Post::where('id', 2)->where('is_admin', 0)->update(['title'=>"yezs", 'content'=>'yes no']);
//});


// add more the one peace of data at a time check to post model to add more
//Route::get('/create', function (){
// Post::create(['title'=>'new title', 'content'=>'this is still new']);
//});


//insert into DB
//Route::get('/insert', function (){
//    $posts = new post();
//   $posts->title = "new title insert";
//    $posts->save();
//});


//Route::get('/findmore', function (){
//    $posts = Post::where('content', '<', 50)->firstOrFail();
//    return $posts;
//});


// FIND IN DATABBASE
//Route::get('/findwere', function (){
//    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//});

//////////////////////////////////////////////////

//
//Route::get('/insert', function (){
//
//    DB::insert('insert into posts(title, content) values(?, ?)', ['jamie', 'jamie is the best']);
//
//});


// Route::get('/find', function (){
//     $posts = Post::all();
//
//     foreach ($posts as $post){
//         return $post->title;
//     }
// });


//data base raw enquires

//Route::get('/insert',  function (){
//   $results = DB::select('select * from posts where id=?', [1]);
//
//    foreach ($results as $result) {
//        return $result->content;
//    }
//});

//Route::get('/update', function (){
//
//    $updated = DB::update('update posts set title = "update title" where id =?', [1]);
//
//    return $updated;
//});

//Route::get('/delete', function (){
//    $deleted = DB::delete('delete from posts where id = ?', [1]);
//
//    return $deleted;
//});

//Route::get('/', function () {
//
//    return view('welcome');
//});

//Route::get('/contact', 'PostsController@contact');


//Route::get('/post/{id}', 'PostsController@index');
//
//Route::resource('post', 'PostsController');

//Route::get('post/{id}', 'PostsController@showposts');

    