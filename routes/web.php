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
Route::post('/APINotifications/saveTokenNumber', 'APINotificationsController@saveTokenNumber');
Route::post('/APINotifications/sendNotifications', 'APINotificationsController@sendNotifications');
Route::GET('changelanguage', 'LanguageController@changelanguage');

Route::get('/login', function () {
//    //return Redirect::to('/admin');
return view('public.login');
});
Route::get('/', 'FrontController@index');
Route::get('/search_product', 'FrontController@searchProduct');
Route::get('/product_list/{id}', 'FrontController@listProduct');
Route::get('/search_list/{name}', 'FrontController@searchQuery');
Route::get('/products_of_category/{id}', 'FrontController@ProductsRelatedCategory');
Route::post('/store_review', 'ReviewsController@storeReview');

Route::post('/insert_in_table', 'FrontController@insertOnTheTable');


/*auth routes*/
Auth::routes();
/*authentication routes*/
Route::group(['middleware' => 'PermissionsAuth'], function () {
    /*home page admin route*/
    Route::get('/admin', 'Admin\AdminController@home');
    Route::group(['prefix' => 'admin'], function () {
        /*users routes*/
        Route::resource('users', 'Admin\UsersController',['names'=>['create'=>'users_add','store'=>'users_add','index'=>'users','edit'=>'users_edit','update'=>'users_edit','destroy'=>'users_delete']]);
        Route::post('users/activation', ['uses'=>'Admin\UsersController@activation','as'=>'users_active']);
        /*profiles permission routes*/
        Route::resource('profiles', 'Admin\ProfilesController',['names'=>['create'=>'profiles_add','store'=>'profiles_add','index'=>'profiles','edit'=>'profiles_edit','update'=>'profiles_edit','destroy'=>'profiles_delete']]);
        Route::post('profiles/activation', ['uses'=>'Admin\ProfilesController@activation','as'=>'profiles_active']);

        /*categories routes*/
        Route::resource('categories', 'categoriesController',['names'=>['create'=>'categories_add','store'=>'categories_add','index'=>'categories','edit'=>'categories_edit','update'=>'categories_edit','destroy'=>'categories_delete','show'=>'categories_show']]);
        /* products routes*/
        Route::resource('products', 'productsController',['names'=>['create'=>'products_add','store'=>'products_add','index'=>'products','edit'=>'products_edit','update'=>'products_edit','destroy'=>'products_delete','show'=>'products_show']]);
        /*profile routes*/
        Route::get('profile', ['uses'=>'Admin\AdminController@profile','as'=>'profile']);
        Route::post('profile', ['uses'=>'Admin\AdminController@profilePost','as'=>'profile']);
        /*profile routes*/
        Route::get('system', ['uses'=>'Admin\AdminController@system','as'=>'system']);
        Route::post('system', ['uses'=>'Admin\AdminController@systemPost','as'=>'system']);
    });

});


//Route::resource('categories', 'categoriesController');




//Route::resource('products', 'productsController');
Route::group(['prefix' => 'client'], function () {
  //Route::get('/login', 'ClientAuth\LoginController@showLoginForm')->name('login');
  //Route::post('/login', 'ClientAuth\LoginController@login');
  //Route::post('/logout', 'ClientAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'ClientAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'ClientAuth\RegisterController@register');

  Route::post('/password/email', 'ClientAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'ClientAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'ClientAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'ClientAuth\ResetPasswordController@showResetForm');
});
