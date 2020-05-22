<?php

Route::get('/admin','Admin\AuthController@login')->name('admin.login');
Route::post('/admin','Admin\AuthController@loginSubmit')->name('admin.login.submit');
// Route::group(['prefix'=>'/admin','middleware'=>''],function(){
// });

?>
