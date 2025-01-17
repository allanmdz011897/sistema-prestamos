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
    return redirect('/home');
});
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/cron', 'closeController@close_automatic');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('client', 'userController');
Route::resource('payment', 'paymentController');
Route::resource('summary', 'summaryController');
Route::resource('simulator', 'simulatorController');
Route::resource('route', 'routeController');
Route::resource('history', 'historyController');
Route::resource('transaction', 'transactionController');
Route::resource('bill', 'billController');
Route::resource('catalogue', 'CatalogueController');

 /*-----Usuario supervisor----*/
Route::prefix('supervisor')->group(function () {
    Route::resource('agent', 'agentController');
    Route::resource('close', 'closeController');
    Route::resource('client', 'clientController');
    Route::resource('tracker', 'trackerController');
    Route::resource('review', 'reviewController');
    Route::resource('statistics', 'statisticsController');
    Route::resource('cash', 'cashController');
    Route::resource('bill', 'billsupervisorController');
    Route::resource('credit', 'creditController');
    Route::resource('summary', 'supervisorSummaryController');
    Route::resource('catalogue', 'CatalogueController');

    /*-----Sub Menu-----*/
    Route::prefix('menu')->group(function () {
        Route::resource('history', 'subHistoryController');
        Route::resource('transitions', 'subTransitionsController');
        Route::resource('route', 'subRouteController');
        Route::resource('bill', 'subBillController');
        Route::resource('close', 'subCloseController');
        Route::resource('edit', 'subEditController');
        Route::resource('report', 'subReportController');
        Route::resource('done', 'subDoneController');
        Route::resource('catalogue', 'CatalogueController');
    });
});

/*-----Usuario Administrador----*/
Route::prefix('admin')->group(function () {
    Route::resource('user', 'adminUserController');
    Route::resource('route', 'adminRouteController');
});
