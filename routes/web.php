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

Auth::routes();
Route::prefix('user')->group(function(){
    Route::get('/logout','auth\LoginController@userLogout')->name('user.logout');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'HomeController@profile')->name('user.profile');
    Route::get('/table', 'HomeController@table')->name('user.table');
    Route::get('/formation/{id}', 'HomeController@show_formation')->name('user.formation.show');

    Route::get('enroll/login/{id}', 'EnrollmentController@handleLogin')->name('enroll.handleLogin')->middleware('auth');
    Route::get('enroll/{id}', 'EnrollmentController@create')->name('enroll.create');
    Route::post('enroll/store/{id}', 'EnrollmentController@store')->name('enroll.store');
    Route::get('my-courses', 'EnrollmentController@myFormations')->name('enroll.myFormations')->middleware('auth');

  

});

Route::prefix('admin')->group(function(){

        Route::get('/login','auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login','auth\AdminLoginController@Login')->name('admin.login.submit');


        Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
        Route::get('/gest-formateurs', 'Admin\AdminController@index_formateur')->name('admin.gestion.formateur');
        Route::get('/gest-candidats', 'Admin\AdminController@index_candidat')->name('admin.gestion.candidat');
        Route::get('/logout','auth\AdminLoginController@logout')->name('admin.logout');

        // route de la gestion de formateur
        Route::post('/add-formateur', 'Admin\AdminController@store_formateur')->name('admins.store_formateur');
        Route::PATCH('/update-formateur/{id}', 'Admin\AdminController@update_formateur')->name('admins.update_formateur');
        Route::delete('/delete-formateur/{id}', 'Admin\AdminController@destroy_formateur')->name('admins.destroy_formateur');
        Route::get('/inbox','InboxController@index_admin')->name('admin.inbox');
        Route::post('/inbox/store','InboxController@store_inbox_admin')->name('admin.inbox.store');   

        // user permission management

        Route::get('/registered_users', 'Admin\PermissionsController@index')->name('admin.user.permission');
        Route::post('/permission/{id}', 'Admin\PermissionsController@edit')->name('permission.edit');
        Route::put('/permission/update/{id}', 'Admin\PermissionsController@update')->name('permission.edit.submit');
        Route::post('/delete-permission-page/{id}', 'Admin\PermissionsController@show_delete')->name('permission.delete');
        Route::delete('/delete-permission/{id}', 'Admin\PermissionsController@destroy')->name('permission.delete.submit');





        
    });

Route::prefix('formateur')->group(function(){

    // authentification  routes 
    Route::get('/login','auth\FormateurLoginController@showLoginForm')->name('formateur.login');
    Route::post('/login','auth\FormateurLoginController@Login')->name('formateur.login.submit');
    Route::get('/register','auth\FormateurRegisterController@showRegisterForm')->name('formateur.register');
    Route::post('/register','auth\FormateurRegisterController@Register')->name('formateur.register.submit');
    Route::get('/logout','auth\FormateurLoginController@logout')->name('formateur.logout');
    
    // profile management and dashboard routes 

    Route::get('/','Formateur\FormateurController@index')->name('formateur.dashboard');
    Route::get('/profile', 'Formateur\FormateurController@showProfile')->name('formateur.profile');
    Route::get('/edit-profile','Formateur\FormateurController@edit')->name('formateur.edit-profile');
    Route::put('/update-profile','Formateur\FormateurController@update')->name('formateur.update-profile');


    // send message routes (inboxes)

    Route::get('/inbox','InboxController@index_formateur')->name('formateur.inbox');
    Route::post('/inbox/store','InboxController@store_inbox_formateur')->name('formateur.inbox.store');

   // formation routes 

    Route::get('/formation/create', 'Formateur\FormationController@create')->name('formation.create');
    Route::get('/formation/{id}', 'Formateur\FormationController@show')->name('formation.show');
    Route::get('/formation/edit/{id}', 'Formateur\FormationController@edit')->name('formations.edit');
    Route::put('/update-formation/{id}', 'Formateur\FormationController@update')->name('formations.update');
    Route::delete('/delete-formation/{id}', 'Formateur\FormationController@destroy')->name('formations.destroy');
    Route::get('/formation-list', 'Formateur\FormateurController@showFormationTable')->name('formateur.formation.table');
    Route::post('/formation', 'Formateur\FormationController@store')->name('formation.store');

   // user enrollment management

    Route::get('/registered_users', 'Formateur\EnrollmentsController@index')->name('formateur.user.list');
    Route::post('/enrollment/{id}', 'Formateur\EnrollmentsController@edit')->name('enrollment.edit');
    Route::put('/enrollment/update/{id}', 'Formateur\EnrollmentsController@update')->name('enrollment.edit.submit');
    Route::post('/delete-enrollment-page/{id}', 'Formateur\EnrollmentsController@show_delete')->name('enrollment.delete');
    Route::delete('/delete-enrollment/{id}', 'Formateur\EnrollmentsController@destroy')->name('enrollment.delete.submit');



    
});