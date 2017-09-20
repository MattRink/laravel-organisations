<?php

Route::get('/organisation', 'MattRink\Organisations\Controllers\OrganisationController@create')->name('organisation.create');
Route::post('/organisation', 'MattRink\Organisations\Controllers\OrganisationController@store')->name('organisation.store');