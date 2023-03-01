<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\brandsController;
use App\Http\Controllers\clientsController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\xercController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\documentController;


Route::group(['middleware'=>'notlogin'],function(){

    //----------------------DATATABLE START--------------------------  
    
       
        Route::get('/', [brandsController::class, 'index'])->name('brands');
        Route::post('add-update-brands', [brandsController::class, 'store']);
        Route::post('edit-brands', [brandsController::class, 'edit']);
        Route::post('delete-brands', [brandsController::class, 'destroy']);
       // Route::post('/brandsay{id}','App\Http\Controllers\brandsController@index2' );

        Route::get('/clients', [clientsController::class, 'indexClients'])->name('clients');
        Route::post('add-update-clients', [clientsController::class, 'storeClients']);
        Route::post('edit-clients', [clientsController::class, 'editClients']);
        Route::post('delete-clients', [clientsController::class, 'destroyClients']);

        Route::get('/products', [productsController::class, 'indexProducts'])->name('products');
        Route::post('add-update-products', [productsController::class, 'storeProducts']);
        Route::post('edit-products', [productsController::class, 'editProducts']);
        Route::post('delete-products', [productsController::class, 'destroyProducts']);

        Route::get('/xerc', [xercController::class, 'indexXerc'])->name('xerc');
        Route::post('add-update-xerc', [xercController::class, 'storeXerc']);
        Route::post('edit-xerc', [xercController::class, 'editXerc']);
        Route::post('delete-xerc', [xercController::class, 'destroyXerc']);

        Route::get('/orders', [ordersController::class, 'indexOrders'])->name('orders');
        Route::post('add-update-orders', [ordersController::class, 'storeOrders']);
        Route::post('edit-orders', [ordersController::class, 'editOrders']);
        Route::post('delete-orders', [ordersController::class, 'destroyOrders']);
        Route::post('confirm-orders', [ordersController::class, 'confirm']);
        Route::post('cancel-orders', [ordersController::class, 'cancel']);

        Route::get('/staff', [staffController::class, 'indexStaff'])->name('staff');
        Route::post('add-update-staff', [staffController::class, 'storeStaff']);
        Route::post('edit-staff', [staffController::class, 'editStaff']);
        Route::post('delete-staff', [staffController::class, 'destroyStaff']);
      
        Route::get('/logout','App\Http\Controllers\signinController@logout' )->name('logout');

        Route::get('/profile', function () {
            return view('profile');
        })->name('profile');
        Route::post('/edit/{userId}','App\Http\Controllers\profileController@edit' )->name('edit');
        Route::post('/update','App\Http\Controllers\profileController@update' )->name('update');
       
        //Route::resource('/document/{id}','App\Http\Controllers\documentController' );
        Route::get('/document/{id}','App\Http\Controllers\documentController@document' )->name('document');
        Route::post('/gonder','App\Http\Controllers\documentController@gonder' )->name('gonder');
        Route::get('/sil/{id}','App\Http\Controllers\documentController@sil')->name('sil');
        Route::get('/delete/{id}','App\Http\Controllers\documentController@delete')->name('delete'); 
       
        
    });
    
    Route::group(['middleware'=>'islogin'],function(){
    
    Route::get('/signup', function () {
        return view('signup');
    })->name('signup');
    Route::post('/gonderUser','App\Http\Controllers\signupController@gonderUser' )->name('gonderUser');
    
    Route::get('/signin', function () {
        return view('signin');
    })->name('signin');
    Route::post('/signIn','App\Http\Controllers\signinController@signIn' )->name('signIn');
    });
