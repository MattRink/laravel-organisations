<?php

Route::get('/organisation', 'OrganisationController@create')->name('organisation.create');
Route::post('/organisation', 'OrganisationController@store')->name('organisation.store');