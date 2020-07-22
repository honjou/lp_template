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


/**
 * ランディングページ テンプレート
 */
Route::get('lp-template/', 'LpTemplateController@input');        // 入力画面
Route::patch('lp-template/', 'LpTemplateController@confirm');    // 確認画面
Route::post('lp-template/', 'LpTemplateController@finish');      // 完了画面
