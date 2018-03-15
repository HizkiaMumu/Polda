<?php

// PAGES -----------------------------------------------------------------------
Route::get('/', 'PagesController@resume');
Route::get('/jenis-kejahatan', 'PagesController@jenisKejahatan');
// -----------------------------------------------------------------------------

// CRUD JENIS KEJAHATAN --------------------------------------------------------
Route::get('/get/jenis-kejahatan', 'JenisKejahatanController@getJenisKejahatan');
Route::get('/get/sub-jenis-kejahatan/{jenis}', 'JenisKejahatanController@getSubJenisKejahatan');
// -----------------------------------------------------------------------------
