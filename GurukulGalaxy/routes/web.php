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

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('create',    'DashboardController@create')->name('create');
    Route::post('store',    'DashboardController@store')->name('store');
    Route::get("edit/{id}",  'DashboardController@edit')->name("edit");
    Route::post("update/{id}",'DashboardController@update')->name("update");
    Route::get("destroy/{id}",'DashboardController@destroy')->name("destroy");
// This is logo Route 
    Route::get("add","UniversityController@create")->name("add");
    Route::post("save","UniversityController@store")->name("save");
    Route::get('master', 'UniversityController@index')->name('index');
    Route::get("editing/{id}",  'UniversityController@edit')->name("editing");
    Route::post('change/{id}', 'UniversityController@update')->name('change');
// This is Notice Route 
    Route::get('add_notice', 'CKEditorController@index')->name('add_notice');
    Route::get('create_notice',    'CKEditorController@create')->name('create_notice');
    Route::post('store_notice',    'CKEditorController@store')->name('store_notice');
    Route::get('edit_notice/{id}',  'CKEditorController@edit')->name("edit_notice");
    Route::post("update_notice/{id}",'CKEditorController@update')->name("update_notice");
    Route::get("destroy_notice/{id}",'CKEditorController@destroy')->name("destroy_notice");
// This is Department Route
    Route::get('add_department', 'DepartmentController@index')->name('add_department');
    Route::get('create_department',    'DepartmentController@create')->name('create_department');
    Route::post('store_department',  'DepartmentController@store')->name('store_department');
    Route::get('edit_department/{id}',  'DepartmentController@edit')->name("edit_department");
    Route::post("update_department/{id}",'DepartmentController@update')->name("update_department");
    Route::get("destroy_department/{id}",'DepartmentController@destroy')->name("destroy_department");  
// This is Syllabus Route
    Route::get('add_syllabus', 'SyllabusController@index')->name('add_syllabus');
    Route::get('create_syllabus',    'SyllabusController@create')->name('create_syllabus');
    Route::post('store_syllabus',  'SyllabusController@store')->name('store_syllabus');
    Route::get('edit_department/{id}',  'DepartmentController@edit')->name("edit_department");
    Route::post("update_department/{id}",'DepartmentController@update')->name("update_department");
    Route::get("destroy_department/{id}",'DepartmentController@destroy')->name("destroy_department");
// This is Class Route
    Route::get('add_class', 'ClassController@index')->name('add_class');
    Route::get('create_class',    'ClassController@create')->name('create_class');
    Route::post('store_class',  'ClassController@store')->name('store_class');
    Route::get('edit_department/{id}',  'DepartmentController@edit')->name("edit_department");
    Route::post("update_department/{id}",'DepartmentController@update')->name("update_department");
    Route::get("destroy_department/{id}",'DepartmentController@destroy')->name("destroy_department");
// This is Subject Route
    Route::get('add_subject', 'SubjectController@index')->name('add_subject');
    Route::get('create_subject',    'SubjectController@create')->name('create_subject');
    Route::post('store_subject',  'SubjectController@store')->name('store_subject');
    Route::get('edit_department/{id}',  'DepartmentController@edit')->name("edit_department");
    Route::post("update_department/{id}",'DepartmentController@update')->name("update_department");
    Route::get("destroy_department/{id}",'DepartmentController@destroy')->name("destroy_department");
});

Route::group(['as'=>'manager.','prefix' => 'manager','namespace'=>'Manager','middleware'=>['auth','manager']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

});

Route::group(['as'=>'teacher.','prefix' => 'teacher','namespace'=>'Teacher','middleware'=>['auth','teacher']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');


});

Route::group(['as'=>'student.','prefix' => 'student','namespace'=>'Student','middleware'=>['auth','student']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});