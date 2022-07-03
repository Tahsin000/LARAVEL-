<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. TheseHHJNlogout
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Student Logout
Route::post('/teacherlogin', 'App\Http\Controllers\AllteacherController@teacher_login_dashboard');
Route::get('/teacher_dashboard', 'App\Http\Controllers\AllteacherController@teacher_dashboard');
// Student Logout
Route::get('/teacher_logout', 'App\Http\Controllers\AllteacherController@teacher_logout');
// Student Setting
Route::get('/teacher_setting', 'App\Http\Controllers\AllteacherController@teacher_setting');
// Student Profile
Route::get('/teacher_profile', 'App\Http\Controllers\AllteacherController@teacher_profile');
// student_own_update
Route::POST('/teacher_own_update', 'App\Http\Controllers\AllteacherController@teacher_own_update');

// _________________________________________________________________________________
// Student Logout
Route::post('/studentlogin', 'App\Http\Controllers\AdminController@student_login_dashboard');
Route::get('/student_dashboard', 'App\Http\Controllers\AdminController@student_dashboard');
// Student Logout
Route::get('/student_logout', 'App\Http\Controllers\AdminController@student_logout');
// Student Setting
Route::get('/student_setting', 'App\Http\Controllers\AdminController@student_setting');
// Student Profile
Route::get('/student_profile', 'App\Http\Controllers\AdminController@student_profile');
// student_own_update
Route::POST('/student_own_update', 'App\Http\Controllers\AllstudentController@student_own_update');
// _________________________________________________________________________________

// Admin Logout
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');

Route::get('/', function () {
    return view('studen_login');
});
Route::get('/teacher_login', function () {
    return view('teacher_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});
// testing admin panel
Route::post('/adminlogin', 'App\Http\Controllers\AdminController@login_dashboard');
Route::get('/admin_dashboard', 'App\Http\Controllers\AdminController@admin_dashboard');

//Setting
Route::get('/setting', 'App\Http\Controllers\AdminController@setting');
// Seeting Own
Route::POST('/admin_own_update', 'App\Http\Controllers\AdminController@admin_own_update');
//View Profile
Route::get('/profile', 'App\Http\Controllers\AdminController@profile');
// __________________________________________________________________________________
//AddStudent
Route::get('/addstudent', 'App\Http\Controllers\AddstudentController@addstudent');
Route::post('/savestudent', 'App\Http\Controllers\AddstudentController@savestudent');

// __________________________________________________________________________________
//AllStudent
Route::get('/allstudent', 'App\Http\Controllers\AllstudentController@allstudent');
Route::get('/student_delete/{student_id}', 'App\Http\Controllers\AllstudentController@studentdelete');
Route::get('/studen_view/{student_id}', 'App\Http\Controllers\AllstudentController@studentview');
Route::get('/studen_edit/{student_id}', 'App\Http\Controllers\AllstudentController@studentedit');
Route::POST('/update_student/{student_id}', 'App\Http\Controllers\AllstudentController@studentupdate');

// __________________________________________________________________________________

//Tutionfee
Route::get('/tutionfee', 'App\Http\Controllers\TutionController@tutionfee');
// __________________________________________________________________________________

//CSE
Route::get('/cse', 'App\Http\Controllers\CSEController@cse');
// __________________________________________________________________________________

//EEE
Route::get('/eee', 'App\Http\Controllers\EEEController@eee');
// __________________________________________________________________________________

//ETE
Route::get('/ete', 'App\Http\Controllers\ETEController@ete');
// __________________________________________________________________________________

//CCE
Route::get('/cce', 'App\Http\Controllers\CCEController@cce');
// __________________________________________________________________________________

//CE
Route::get('/ce', 'App\Http\Controllers\CEController@ce');
// __________________________________________________________________________________

//All Teacher
Route::get('/allteacher', 'App\Http\Controllers\AllteacherController@allteacher');
Route::get('/addteacher', 'App\Http\Controllers\AllteacherController@addteacher');
// saveteacher
Route::post('/saveteacher', 'App\Http\Controllers\AllteacherController@saveteacher');
// Delete Teacher
Route::get('/teacher_delete/{teacher_id}', 'App\Http\Controllers\AllteacherController@studentdelete');


// __________________________________________________________________________________
