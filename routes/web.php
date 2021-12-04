<?php
use App\Post;
use App\User;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/post', 'PostsController@show_post');
// Route::get('/contact', 'PostsController@contact');
 
// Route::get('/read', function (){
    
//     $posts = Post::all();



//     foreach($posts as $post){
//         return $post->title;
//     }


// });

// Route::get('/update', function(){
    
//     $updated = DB::update('update posts set title ="Update title" where id = ?', [1]);

//     return $updated;
// });

// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id = ?', [5]);
    
//     return $deleted;
// });

// Route::get('/find', function(){
//     $post = Post::find(2);
//     return $post->content;
// });

// Eloquent method

// Route::get('/read', function(){
//     $posts = Post::all();

//     foreach($posts as $post){
//         return $post->title;
//     }
    
// });

// Route::get('/findwhere', function(){
//     $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//     return  $posts;
// });

// Route::get('/basicinsert', function(){
//     $post = New Post;
//     $post->title = 'new ORM title';
//     $post->content = 'this is orm content';
//     $post->save();
// });

// Route::get('/basicinsert2', function(){
//     $post = Post::find(2);
//     $post->title = 'new ORM title 2';
//     $post->content = 'this is orm content 2';
//     $post->save();
// // });

// Route::get('/create', function(){
//     Post::create(['title'=>'the create method', 'content'=> 'wow im learning the laravel right now']);
// });

// Route::get('/update', function(){
//     Post::where('id', 4)->where('is_admin', 0)->update(['title'=>'New PHP TITLE','content'=>'I love my Instructor AMit']);
// });

// Route::get('/delete', function(){
//     $post = Post::find(6);
//     $post->delete();
// });

// Route::get('/softdelete', function(){
//     $post = Post::find(1);
//     $post->delete();

// });

// Route::get('/readsoftdelete', function(){
//     // $post = Post::find(3);
//     // return $post;

//     $post = Post::withTrashed()->where('is_admin', 0)->get();
//     return $post;
// });

// Route::get('/restore', function(){

//     $post = Post::withTrashed()->where('is_admin', 0)->restore();
// });

// Route::get('/forcedelte', function(){
//     Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });

// Eloquent Relationship start here 

// Route::get('/user/{id}/post', function($id){

//     // return User::find($id)->post->title;

//     // $users = User::find($id)->post->title;
//     // return $users;

//     return User::find($id)->post->content;

// });

// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->post->title;
// });