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
    return view('welcome');
});

/*
* One To One
*/
Route::get('one-to-one', 'OneToOneController@oneToOne');

//One To One Inverse
Route::get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');

//One To One Insert
Route::get('one-to-one-insert', 'OneToOneController@oneToOneInsert');

/*
* One To Many
*/
Route::get('one-to-many', 'OneToManyController@oneToMany');

/*
* Many To One
*/
Route::get('many-to-one', 'OneToManyController@manyToOne');

/*
* One To Many Two
*/
Route::get('one-to-many-two', 'OneToManyController@oneToManyTwo');

/*
* One To Many Insert
*/
Route::get('one-to-many-insert', 'OneToManyController@oneToManyInsert');

/*
* One To Many Insert Two
*/
Route::get('one-to-many-insert-two', 'OneToManyController@oneToManyInsertTwo');

/*
* One To Many Insert Through
*/
Route::get('has-many-through', 'OneToManyController@hasManyThrough');

/*
* Many To Many
*/
Route::get('many-to-many', 'ManyToManyController@manyToMany');

/*
* Many To Many Inverse
*/
Route::get('many-to-many-inverse', 'ManyToManyController@manyToManyInverse');

/*
* Many To Many Insert
*/
Route::get('many-to-many-insert', 'ManyToManyController@manyToManyInsert');

/*
* Relation Polymorphic
*/
Route::get('polymorphics', 'PolymorphicController@polymorphic');

/*
* Relation Polymorphic Insert
*/
Route::get('polymorphics-insert', 'PolymorphicController@polymorphicInsert');
