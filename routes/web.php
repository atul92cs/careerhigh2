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
})->name('welcome');


Auth::routes(['verify' => true]);

//Route::get('user/home', 'HomeController@index')->name('user.home')->middleware('verified');
Route::get('/blog', 'FrontendController@blog')->name('blog');


foreach(App\Blog::where('status',1)->get() as $c ){
Route::get('/blogs/'.$c->url, 'FrontendController@blogsingle')->name('blog.'.$c->url);
}

Route::post('/roadmaplike', 'HomeController@roadmaplike')->name('roadmap.like');
Route::post('/roadmapunlike', 'AdminController@roadmapunlike')->name('roadmap.unlike');
Route::post('/roadmapdelcomment', 'AdminController@roadmapdelcomment')->name('roadmap.delcomment');
Route::post('/commentreplydel', 'AdminController@commentreplydel')->name('roadmap.commentreplydel');
Route::post('/commentreply', 'AdminController@commentreply')->name('roadmap.commentreply');
Route::post('/roadmaplike2', 'FrontendController@roadmaplike2')->name('roadmap.like2');
Route::post('/roadmapbookmark', 'HomeController@roadmapbookmark')->name('roadmap.bookmark');
Route::post('/removebookmark', 'HomeController@removebookmark')->name('remove.bookmark');
Route::post('/roadmapcomment', 'HomeController@roadmapcomment')->name('roadmap.comment');
Route::post('/blogcomment', 'HomeController@blogcomment')->name('blog.comment');
Route::post('/subscribe', 'SubscribeController@store')->name('subscribe.store');
Route::post('/contact', 'ContactusController@store')->name('contact.store');

Route::get('/machine-learning-iris-code', function () {
    return view('static1');
})->name('static1');
Route::get('/machine-learning-titanic-code', function () {
    return view('static2');
})->name('static2');





Route::get('/mm', function () {
//    return Artisan::call('make:controller',['name'=>'ContactusController','--resource'=>'--resource' ,'--model'=>'Contactus']); 
//      return Artisan::call('make:model',['name'=>'Contactus','-m'=>'-m']);
//     return Artisan::call('migrate');
     return Artisan::call('config:cache');
});

//Route::get('/roadmaps', 'FrontendController@roadmaps')->name('roadmaps');
Route::get('/category/all', 'FrontendController@allcategory')->name('allcategory');
Route::get('/user/activity', 'HomeController@useractivity')->name('user.activity')->middleware('verified');
Route::get('/user/bookmarks', 'HomeController@userbookmarks')->name('user.bookmarks')->middleware('verified');

Route::get('/profile/edit', 'HomeController@profileedit')->name('profile.edit')->middleware('verified');
Route::post('/profile/edit', 'HomeController@profileeditp')->name('profile.edit')->middleware('verified');
Route::get('/profile', 'HomeController@profile')->name('profile')->middleware('verified');

foreach(App\Category::where('status',1)->get() as $c ){
    Route::get($c->url, 'FrontendController@category')->name($c->url);
    foreach ($c->roadmap as $cc)
    {
       Route::get($c->url."/".$cc->url, 'FrontendController@roadmaps')->name($c->url.".".$cc->url); 
    }
    
}
 Route::post('/search', 'FrontendController@search')->name('search');

Route::post('/suffle', 'CategoryController@suffle')->name('suffle');

Route::group(['prefix' => 'admin'], function () {
    
    
    Route::resources([
    'roadmap' => 'RoadmapController',
    'blog' => 'BlogController',
    'upcommingroadmap' => 'UpcommingroadmapController',
    'advertisement' => 'AdvertisementController',
    
]);
    Route::resource('category', 'CategoryController');
    
    
    
    
Route::get('/home', 'AdminController@index')->name('admin.home');
//Route::get('/category', 'RoadmapController@show')->name('admin.category');
// Route::get('/category/add', 'RoadmapController@categoryadd')->name('admin.categoryadd');
    
    Route::get('/allusers', 'AdminController@allusers')->name('admin.allusers');
    Route::get('/allsubs', 'AdminController@allsubs')->name('admin.allsubs');
    Route::get('/allcontact', 'AdminController@allcontact')->name('admin.allcontact');
    
    
   
    Route::post('/ckeditorimg', 'AdminController@ckeditorimg')->name('ckeditorimg.upload');
    
    
    Route::get('/', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::get('login/', 'Admin\LoginController@showLoginForm');
    Route::post('/', 'Admin\LoginController@login');
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
//    Route::get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//    Route::post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
//    Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
//    Route::post('password/reset', 'Admin\ResetPasswordController@reset')->name('admin.password.update');
    


//Route::get('basic-setting', ['as'=>'admin.basic-setting','uses'=>'AdminController@basic_setting']);
//Route::post('basic-setting', ['as'=>'admin.basic-setting','uses'=>'AdminController@basic_settingp']);
});

Route::get('/user/home', function () {
   return redirect()->route('welcome');
//    return view('welcome');
})->name('user.home');

Route::get('/home', function () {
   return redirect()->route('welcome');
//    return view('welcome');
})->name('home');
