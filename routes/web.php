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

//FRONTEND


Route::get('/admin/dashboard', 'Admin\AdminController@index');

Route::prefix('admin')->group(function(){    
    
    Route::get('/login', 'Auth\AuthorController@showLoginForm')->name('admin.login');
    
    Route::post('/login', 'Auth\AuthorController@login')->name('admin.login.submit');        
    
    Route::get('/cities',  'Admin\Cities\CitiesController@index');  //get cities list
    
    Route::post('/cities/add-city',  'Admin\Cities\CitiesController@addCity');  //add new  city
    
    Route::post('/cities/update-city',  'Admin\Cities\CitiesController@updateCity');  //update city
    
    Route::get('/cities/destroy/{slug}', 'Admin\Cities\CitiesController@destroy');//delete cotu
    
    Route::get('/companies',  'Admin\Companies\CompaniesController@index');  //get companies list
    
    Route::post('/companies/add-company',  'Admin\Companies\CompaniesController@addCompany');  //add new  company
    
    Route::post('/companies/update-company',  'Admin\Companies\CompaniesController@updateCompany');  //update company
    
    Route::get('/companies/destroy/{slug}', 'Admin\Companies\CompaniesController@destroy');//delete comapny
        
    Route::get('/inclusions',  'Admin\Inclusions\InclusionsController@index');  //get Inclusions list
    
    Route::post('/inclusions/add-inclusions',  'Admin\Inclusions\InclusionsController@addInclusions');  //add new  Inclusions
    
    Route::post('/inclusions/update-inclusions',  'Admin\Inclusions\InclusionsController@updateInclusions');  //update Inclusions
    
    Route::get('/inclusions/destroy/{slug}', 'Admin\Inclusions\InclusionsController@destroy');//delete Inclusions
    
    
    
    
    Route::get('/equipments',  'Admin\Equipments\EquipmentsController@index');  //get Equipments list
    
    Route::get('/additional-services',  'Admin\Additionalservices\AdditionalServicesController@index');  //get Additionalservices list
    
    Route::get('/vehicle-types',  'Admin\VehicleTypes\VehicleTypesController@index');  //get VehicleTypes list
    
    Route::get('/categories',  'Admin\Categories\CategoriesController@index');  //get Categories list
    
    Route::post('/categories/add-categories',  'Admin\Categories\CategoriesController@addCategory');  //add new  categories
    
    Route::post('/categories/update-categories',  'Admin\Categories\CategoriesController@updateCategory');  //update categories
    
    Route::get('/categories/destroy/{slug}', 'Admin\Categories\CategoriesController@destroy');//delete categories
    
    Route::get('/currencies',  'Admin\Currencies\CurrenciesController@index');  //get Currencies list
    
    Route::get('/change-password', 'Admin\AdminController@changePassword');
    
    Route::get('/logout', 'Admin\AdminController@adminLogout');
    
    Route::post('/password-reset', 'Admin\AdminController@resetPassword');
    
    Route::get('/', 'Admin\AdminController@index');  
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
