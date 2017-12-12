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

Route::get('/', [
	'uses'  => 'HomeController@index',
	'as'    => 'index'
	]);

//get administration home
Route::get('/home',[
	'uses' =>'HomeController@home',
	'as'   => 'home',
	])->middleware('auth');

//sign out
Route::get('/signout',[
	'uses' => 'AuthController@signOut',
	'as'   => 'signout'
	])->middleware('auth');

Route::get('/users',[
	'uses' => 'UserController@getUserHome',
	'as'   => 'admin_user'
	])->middleware('auth');

//create user account
Route::post('/createUser',[
	'uses' => 'UserController@create',
	'as'   => 'create_user_account'
	])->middleware('auth');

//get country home
Route::get('/country-home',[
	'uses' => 'CountryController@countryHome',
	'as'   => 'countryHome'
	])->middleware('auth');
//create country
Route::post('/create-country',[
	'uses' => 'CountryController@createCountry',
	'as'   => 'createCountry'
	])->middleware('auth');

//get city home
Route::get('/city-home',[
	'uses'  => 'CityController@cityHome',
	'as'    => 'cityHome'
	])->middleware('auth');

//create city 
Route::post('/create-city',[
	'uses'  => 'CityController@createCity',
	'as'    => 'createCity'
	])->middleware('auth');

//car home
Route::get('/car-home',[
	'uses'  => 'CarController@carHome',
	'as'    => 'carHome'
	])->middleware('auth');
//create car
Route::post('/create-car',[
	'uses' => 'CarController@createCar',
	'as'   => 'createCar'
	])->middleware('auth');

//get Cars
Route::post('/getCars',[
	'uses' => 'CarController@getCars',
	'as'  => 'getCars'
	])->middleware('auth');


//get category home
Route::get('/category-home',[
	'uses' => 'CategoryController@categoryHome',
	'as'   => 'categoryHome'
	])->middleware('auth');

//create category
Route::post('/create-category',[
	'uses' => 'CategoryController@createCategory',
	'as'   => 'createCategory'
	])->middleware('auth');

// un served books
Route::get('/un-served-books',[
	'uses'  => 'BookController@unservedbooks',
	'as'    => 'unservedbooks'
	])->middleware('auth');

//get customer accounts
Route::get('/customer-accounts',[
	'uses' => 'UserController@customer_accounts',
	'as'   => 'customer_accounts'
	])->middleware('auth');
//get served books
Route::get('served-books',[
	'uses' => 'BookController@servedbooks',
	'as'   => 'servedbooks'
	])->middleware('auth');
//delete book
Route::get('/delete-book/{id}',[
	'uses' => 'BookController@delete_book',
	'as'   => 'delete_book'
	])->middleware('auth');
//form to update country
Route::get('/update-country/{id}',[
	'uses' =>'CountryController@update_country',
	'as'   => 'update_country'
	])->middleware('auth');
//edit country 
Route::post('/edit-country',[
	'uses' => 'CountryController@updateCountry',
	'as'   => 'updateCountry'
	])->middleware('auth');
//delete country
Route::get('/delete-country/{id}',[
	'uses' => 'CountryController@delete_country',
	'as'   => 'delete_country'
	])->middleware('auth');
// delete city
Route::get('/update-city/{id}',[
	'uses' => 'CityController@update_city',
	'as'   => 'update_city'
	]);
//update city 
Route::post('/update-city',[
	'uses' => 'CityController@updateCity',
	'as'   => 'updateCity'
	])->middleware('auth');

//delete city
Route::get('/delete_city/{id}',[
	'uses'  => 'CityController@delete_city',
	'as'    => 'delete_city'
	])->middleware('auth');


//update category
Route::get('/update_category/{id}',[
	'uses'  => 'CategoryController@update_category',
	'as'    => 'update_category'
	])->middleware('auth');
//update category
Route::post('/update-category',[
	'uses'  => 'CategoryController@updateCategory',
	'as'    => 'updateCategory'
	])->middleware('auth');
//delete category
Route::get('/delete-category/{id}',[
	'uses' => 'CategoryController@delete_category',
	'as'   => 'delete_category'
	])->middleware('auth');
//delete car
Route::get('/delete-car/{id}',[
	'uses' => 'CarController@delete_car',
	'as'   => 'delete_car'
	])->middleware('auth');

//update car
Route::get('/update-car/{id}',[
	'uses' => 'CarController@update_car',
	'as'   => 'update_car'
	])->middleware('auth');
//update car info
Route::post('/update-car/',[
	'uses' => 'CarController@updateCar',
	'as'   => 'updateCar'
	])->middleware('auth');
//get all cars
Route::get('/cars/home',[
	'uses' => 'CarController@all_cars',
	'as'   => 'all_cars'
	])->middleware('auth');

//account_management
Route::get('/account_management',[
	'uses' => 'UserController@account_management',
	'as'  => 'account_management'
	])->middleware('auth');

//de-activate user account
Route::get('/de-activate/{id}',[
	'uses' => 'UserController@de_activate',
	'as'   => 'de_activate'
	]);

//activate user account
Route::get('/activate/{id}',[
	'uses'  => 'UserController@activate',
	'as'    => 'activate'
	])->middleware('auth')->middleware('auth');
//user profile 
Route::get('/user/profile/{id}',[
	'uses' => 'UserController@user_profile',
	'as'   => 'user_profile'
	])->middleware('auth');

//update user profile
Route::post('/update-user-profile',[
	'uses'  => 'UserController@update_user_profile',
	'as'    => 'update_user_profile'
	])->middleware('auth');

//delete user account
Route::get('/delete-user-account/{id}',[
	'uses'  => 'UserController@delete_user',
	'as'    => 'delete_user'
	]);
//get contacts
Route::get('/contacts',[
	'uses' => 'HomeController@contacts',
	'as'   => 'contact_list'
	])->middleware('auth');

//contact delete
Route::get('/delete/contact/{id}',[
	'uses' => 'HomeController@contact_delete',
	'as'   => 'contact_delete'
	])->middleware('auth');

/////////////////////////////////////////////////////////////////////////////////////
							// AJAX Routes		
/////////////////////////////////////////////////////////////////////////////////////
Route::get('/get-cities-of-country',[
	'uses'  => 'AjaxController@getCities',
	'as'    => 'getCountryCities'
	]);

//assign cost
Route::get('/assgin_cost',[
	'uses' => 'AjaxController@assgin_cost',
	'as'   => 'assgin_cost'
	]);


////////////////////////////////Website routes///////////////////////
Route::post('/signup',[
	'uses' => 'WebsiteController@signup',
	'as'   => 'signup'
	]);

//get cars to book
Route::get('/cars',[
	'uses'  => 'WebsiteController@cars',
	'as'    => 'cars'
	]);

//sign in
Route::post('/signin',[
	'uses'  => 'AuthController@signIn',
	'as'    => 'signin'
	]);

//get city cars
Route::post('/cars',[
	'uses'  =>'WebsiteController@getCityCars',
	'as'    => 'getCityCars'
	]);
//book car
Route::get('/book/{id}',[
	'uses'   => 'WebsiteController@book',
	'as'     => 'book_car',
	])->middleware('customer');

//book the car
Route::post('/book',[
	'uses' => 'BookController@book',
	'as'   => 'book'
	]);

//get cars 
Route::get('/avaliable/cars',[
	'uses' => 'WebsiteController@cars_all',
	'as'   => 'cars_all'
	]);

//get sign in form
Route::get('/signIn-to-system',[
	'uses' => 'HomeController@get_signin_form',
	'as'   => 'login'
	]);
//get sign up form
Route::get('/signUp-to-system',[
	'uses' => 'HomeController@get_siginup_form',
	'as'   => 'get_siginup_form'
	]);

//get previous books
Route::get('/your-previous-books',[
	'uses' => 'WebsiteController@previous_books',
	'as'   => 'previous_books'
	]);

//get contact
Route::get('/contact',[
	'uses'  => 'WebsiteController@getContact',
	'as'    => 'contact'
	]);
//get service
Route::get('/services',[
	'uses' => 'WebsiteController@getServices',
	'as'   => 'services'
	]);
//get products
Route::get('/products',[
	'uses' => 'WebsiteController@getProducts',
	'as'   => 'product'
	]);

//get team
Route::get('/team',[
	'uses' => 'WebsiteController@getTeam',
	'as'   => 'team'
	]);

//create contact
Route::post('/create/contact',[
	'uses' => 'WebsiteController@createContact',
	'as'   => 'createContact'
	]);

//cancel book 
Route::get('/cancel/book/{id}',[
	'uses'  => 'WebsiteController@cancel_book',
	'as'    => 'cancel_book'
	]);