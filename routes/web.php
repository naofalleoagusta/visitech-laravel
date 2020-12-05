<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/about-us', 'AboutController@index');
Route::get('/contact-us', 'ContactController@index');
Route::get('/visi-powerwall', 'ProductController@visi_powerwall_index');
Route::get('/visi-smart-socket', 'ProductController@visi_smart_socket_index');
Route::get('/news', 'NewsController@index');
Route::get('/news/{slug}', 'NewsDetailController@index');
Route::post('/contact-us', 'ContactController@store');


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('posts')->name('posts/')->group(static function() {
            Route::get('/',                                             'PostsController@index')->name('index');
            Route::get('/create',                                       'PostsController@create')->name('create');
            Route::post('/',                                            'PostsController@store')->name('store');
            Route::get('/{post}/edit',                                  'PostsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PostsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{post}',                                      'PostsController@update')->name('update');
            Route::delete('/{post}',                                    'PostsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('banners')->name('banners/')->group(static function() {
            Route::get('/',                                             'BannersController@index')->name('index');
            Route::get('/create',                                       'BannersController@create')->name('create');
            Route::post('/',                                            'BannersController@store')->name('store');
            Route::get('/{banner}/edit',                                'BannersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BannersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{banner}',                                    'BannersController@update')->name('update');
            Route::delete('/{banner}',                                  'BannersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('faqs')->name('faqs/')->group(static function() {
            Route::get('/',                                             'FaqsController@index')->name('index');
            Route::get('/create',                                       'FaqsController@create')->name('create');
            Route::post('/',                                            'FaqsController@store')->name('store');
            Route::get('/{faq}/edit',                                   'FaqsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'FaqsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{faq}',                                       'FaqsController@update')->name('update');
            Route::delete('/{faq}',                                     'FaqsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('portofolios')->name('portofolios/')->group(static function() {
            Route::get('/',                                             'PortofoliosController@index')->name('index');
            Route::get('/create',                                       'PortofoliosController@create')->name('create');
            Route::post('/',                                            'PortofoliosController@store')->name('store');
            Route::get('/{portofolio}/edit',                            'PortofoliosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PortofoliosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{portofolio}',                                'PortofoliosController@update')->name('update');
            Route::delete('/{portofolio}',                              'PortofoliosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('contacts')->name('contacts/')->group(static function() {
            Route::get('/',                                             'ContactsController@index')->name('index');
            Route::get('/create',                                       'ContactsController@create')->name('create');
            Route::post('/',                                            'ContactsController@store')->name('store');
            Route::get('/{contact}/edit',                               'ContactsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ContactsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{contact}',                                   'ContactsController@update')->name('update');
            Route::delete('/{contact}',                                 'ContactsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('achievments')->name('achievments/')->group(static function() {
            Route::get('/',                                             'AchievmentsController@index')->name('index');
            Route::get('/create',                                       'AchievmentsController@create')->name('create');
            Route::post('/',                                            'AchievmentsController@store')->name('store');
            Route::get('/{achievment}/edit',                            'AchievmentsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AchievmentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{achievment}',                                'AchievmentsController@update')->name('update');
            Route::delete('/{achievment}',                              'AchievmentsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('members')->name('members/')->group(static function() {
            Route::get('/',                                             'MembersController@index')->name('index');
            Route::get('/create',                                       'MembersController@create')->name('create');
            Route::post('/',                                            'MembersController@store')->name('store');
            Route::get('/{member}/edit',                                'MembersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MembersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{member}',                                    'MembersController@update')->name('update');
            Route::delete('/{member}',                                  'MembersController@destroy')->name('destroy');
        });
    });
});