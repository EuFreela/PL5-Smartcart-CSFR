<?php

$namespace = "Lameck\Smartcart\Http\Controllers";


Route::group(['namespace'=>$namespace,'prefix'=>'smc','middleware' => 'web'], function(){

    /**
    * SHOPPING
    */
    Route::get('/', function(){
        return view('Lameck\Smartcart::home');
    })->name('home');

    /**
    * SHOPPING
    */
    //PRODUCT LIST
    Route::get('shop','ShopController@index')->name('shop.index');
    //CART
    Route::get('add-to-cart/{id}','ShopController@getAddToCart')->name('shop.addToCart')->middleware('smcAuth');
    Route::get('cart','ShopController@getCart')->name('shop.Cart')->middleware('smcAuth');
    Route::get('cart-reduce/{id}','ShopController@getReduceByOne')->name('shop.getReduceByOne')->middleware('smcAuth');
    Route::get('cart-remove/{id}','ShopController@getRemoveAll')->name('shop.getRemoveAll')->middleware('smcAuth');    
    Route::get('cart-doingerase','ShopController@getDoingEraseCart')->name('shop.getDoingEraseCart')->middleware('smcAuth');
    Route::get('cart-erase-all','ShopController@getEraseCart')->name('shop.getEraseCart')->middleware('smcAuth');
    Route::get('checkout','ShopController@getCheckout')->name('shop.getcheckout')->middleware('smcAuth');
    Route::post('checkout','ShopController@postCheckout')->name('shop.postcheckout')->middleware('smcAuth');






    /**
     * ACCOUNT
     */
    Route::group(['prefix'=>'account'], function(){
        Route::group(['middleware' => 'guest'], function(){
            //Sign Up
            Route::get('signup','AccountController@getSignup')->name('user.getsignup');
            Route::post('signup','AccountController@postSignup')->name('user.postsignup');
            //Sign In
            Route::get('signin','AccountController@getSignin')->name('user.getsignin');
            Route::post('signin','AccountController@postSignin')->name('user.postsignin');
        });
        Route::group(['middleware' => 'smcAuth'], function(){
            //Profile
            Route::get('profile','AccountController@getprofile')->name('user.profile');
            //Logout
            Route::get('logout','AccountController@getLogout')->name('user.logout');
        });
    });


   

});