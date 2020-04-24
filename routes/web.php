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

Route::get('review', 'ReviewsController@form');

Route::get('/', function() {
    return view('landingpage');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
	
	Route::get('display-review', 'ReviewsController@index');
	Route::get('review/add', 'ReviewsController@create');
	Route::post('review/add', 'ReviewsController@store')->name('review.input');
	Route::get('review/{review}/edit', 'ReviewsController@edit')->name('edit.review');
	Route::patch('review/{review}/edit', 'ReviewsController@update');
	Route::delete('review/{review}/delete', 'ReviewsController@destroy');

	Route::get('logging', 'ReviewsController@logging');

	// MEMBER
	Route::get('member', 'MembersController@index');
	Route::get('member/add', 'MembersController@create')->name('add.member');
	Route::post('member/add', 'MembersController@store');
	Route::get('member/{member}/edit', 'MembersController@edit')->name('edit.member');
	Route::patch('member/{member}/edit', 'MembersController@update');
	Route::delete('member/{member}/delete', 'MembersController@destroy');

	// EMPLOYEE
	Route::get('employee', 'EmployeesController@index');
	Route::get('employee/add', 'EmployeesController@create')->name('add.employee');
	Route::post('employee/add', 'EmployeesController@store');
	Route::get('employee/{employee}/edit', 'EmployeesController@edit')->name('edit.employee');
	Route::patch('employee/{employee}/edit', 'EmployeesController@update');
	Route::delete('employee/{employee}/delete', 'EmployeesController@destroy');

	// SUPPLIER
	Route::get('supplier', 'SuppliersController@index');
	Route::get('supplier/add', 'SuppliersController@create')->name('add.supplier');
	Route::post('supplier/add', 'SuppliersController@store');
	Route::get('supplier/{supplier}/edit', 'SuppliersController@edit')->name('edit/supplier');
	Route::patch('supplier/{supplier}/edit', 'SuppliersController@update');
	Route::delete('supplier/{supplier}/delete', 'SuppliersController@destroy');

	// Category
	Route::get('category', 'CategoriesController@index');
	Route::get('category/add', 'CategoriesController@create')->name('add.category');
	Route::post('category/add', 'CategoriesController@store');
	Route::get('category/{category}/edit', 'CategoriesController@edit')->name('edit.category');
	Route::patch('category/{category}/edit', 'CategoriesController@update');
	Route::delete('category/{category}/delete', 'CategoriesController@destroy');

	// brand
	Route::get('brand', 'BrandsController@index');
	Route::get('brand/add', 'BrandsController@create')->name('add.brand');
	Route::post('brand/add', 'BrandsController@store');
	Route::get('brand/{brand}/edit', 'BrandsController@edit')->name('edit.brand');
	Route::patch('brand/{brand}/edit', 'BrandsController@update');
	Route::delete('brand/{brand}/delete', 'BrandsController@destroy');

	// product
	Route::get('product', 'ProductsController@index');
	Route::get('product/add', 'ProductsController@create')->name('add.product');
	Route::post('product/add', 'ProductsController@store');
	Route::get('product/{product}/edit', 'ProductsController@edit')->name('edit.product');
	Route::patch('product/{product}/edit', 'ProductsController@update');
	Route::delete('product/{product}/delete', 'ProductsController@destroy');

	// feedback
	Route::get('feedback', 'FeedbacksController@index');
	Route::get('feedback/add', 'FeedbacksController@create');
	Route::post('feedback/add', 'FeedbacksController@store')->name('feedback.input');
	Route::get('feedback/{feedback}/edit', 'FeedbacksController@edit')->name('edit.feedback');
	Route::patch('feedback/{feedback}/edit', 'FeedbacksController@update');
	Route::delete('feedback/{feedback}/delete', 'FeedbacksController@destroy');

	Route::get('home', 'PagesController@home');
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

	// Selling
	Route::get('selling', 'SellingController@index');
	Route::post('selling', 'SellingController@input')->name('selling.input');

	// Buying
	Route::get('buying', 'BuyingController@index');
	Route::post('buying', 'BuyingController@input')->name('buying.input');

	// report Selling
	Route::get('report-selling', 'SellingController@reportSelling');
	Route::get('report-selling/export-excel', 'SellingController@exportreportSelling')->name('selling.excel');

	// report excel
	Route::get('report-buying', 'BuyingController@reportbuying');
	Route::get('report-buying/export-excel', 'BuyingController@exportexcel')->name('buying.excel');


});