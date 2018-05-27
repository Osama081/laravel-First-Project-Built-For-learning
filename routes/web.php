<?php


Route::get('/','MyFirstController@gettingProducts')->name('shome');
Route::get('/single/{id}','MyFirstController@singleCate');
Route::get('/categories',function(){
	return view('Customers.HomePage.HomePageCategories.showAllCategories');
})->name('allCat');
Auth::routes();


/**Authorized Tasks Begins from Here*/

Route::group(["prefix"=>"backend",['middleware'=>['auth']]],function (){
    Route::get('/addProduct','MyFirstController@addProduct')->name('addProduct');
    Route::get('/',function (){
       return view('AdminPanel.AddingNewProduct.homeLogin');
    })->name('homesweet');
    Route::get('deleting',function (){
        return view('AdminPanel.AddingNewProduct.RemovingAllProducts');
    })->name('delete');
    Route::resource('product','ProductController');
});