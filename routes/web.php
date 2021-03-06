<?php

Route::get('/', function () {
    return view('mainpage');
});
Route::namespace('Admin')
    ->prefix('admin')
    ->as('admin.')
	->group(function () {
        Route::get('/', 'DashboardController')->name('index'); 	 
        Route::get('posts/status', 'PostController@getPostsByStatus')->name('posts.status'); 	 
        Route::resource('posts', 'PostController');
        Route::get('categories/status', 'CategoryController@getCategoriesByStatus')->name('categories.status');
        
        Route::get('categories/trashed', 'CategoryController@trashed')->name('categories.trashed');
        Route::post('categories/restore/{id}', 'CategoryController@restore')->name('categories.restore');
        Route::delete('categories/force/{id}', 'CategoryController@force')->name('categories.force');

        Route::resource('categories', 'CategoryController');
        
        Route::get('users/trashed', 'UserController@trashed')->name('users.trashed');
        Route::post('users/restore/{id}', 'UserController@restore')->name('users.restore');
        Route::delete('users/force/{id}', 'UserController@force')->name('users.force');
        Route::resource('users', 'UserController');
        Route::resource('tags', 'TagController');
        
        Route::get('invitations', 'InvitationsController@index')->name('showInvitations');
        Route::post('invite/{id}', 'InvitationsController@sendInvite')
        ->name('send.invite');
         /**
         * Админ Рауты
         */
        Route::namespace('Auth')->group(function(){
            //Логин 
            Route::get('/login','LoginController@showLoginForm')->name('login');
            Route::post('/login','LoginController@login');
            Route::post('/logout','LoginController@logout')->name('logout');

            //Забыл пароль
            Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
            Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

            //Сборсить пароль
            Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
            Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

        });
});




Route::get('/blog', 'BlogController@index')->name('blog.index'); 
Route::get('blog/{slug}', 'BlogController@show')->name('blog.show');


Route::get('/home', function () {
    return redirect('profile');
});

Route::middleware('auth')
    ->middleware('verified')
    ->prefix('profile')
    ->as('profile.')
	->group(function () {
        Route::get('', 'ProfileController@index')
            ->name('home');
        Route::get('info', 'ProfileController@info')
            ->name('info');
        Route::put('store', 'ProfileController@store')
            ->name('store');
});

Route::get('register/request', 'Auth\RegisterController@requestInvitation')->name('requestInvitation');
Route::post('invitations', 'InvitationController@store')->middleware('guest')->name('storeInvitation');


Auth::routes();
// Auth::routes(['verify' => true]);

// Регистрационные рауты

Route::get('social/{provider}', 'Auth\SocialController@redirect')->name('social.redirect');
Route::get('social/{provider}/callback', 'Auth\SocialController@callback')->name('social.callback');

// Еще какие-то маршруты....

Route::fallback(function() {
    return "Oops… How you've trapped here?";
});
