<?php

// PAGES -----------------------------------------------------------------------
Route::get('/', 'PagesController@resume');
Route::get('/jenis-kejahatan', 'PagesController@jenisKejahatan');
// -----------------------------------------------------------------------------

// CRUD JENIS KEJAHATAN --------------------------------------------------------
Route::get('/get/jenis-kejahatan', 'JenisKejahatanController@getJenisKejahatan'); // enpoint API Jenis Kejahatan
Route::get('/get/jenis-kejahatan/{id}/detail/', 'JenisKejahatanController@getDetailJenisKejahatan');
Route::get('/delete/jenis-kejahatan/{id}', 'JenisKejahatanController@deleteJenisKejahatan'); // Delete
Route::post('/post/jenis-kejahatan', 'JenisKejahatanController@postJenisKejahatan'); // Create
// -----------------------------------------------------------------------------
