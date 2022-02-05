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



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){

        Route::post('massages/create', 'MassagesController@create')->name('massages.create');

        Route::get('admin/panel/logout', 'Auth\LoginController@logout')->name('admin.panel.logout');
        Route::get('admin/panel/loginform', 'Auth\LoginController@showLoginForm')->name('admin.panel.showLoginForm');
        Route::get('admin/panel/login', 'Auth\LoginController@login')->name('admin.panel.login');

        Route::get('admin/panel/home', 'Admin\HomeController@index')->name('admin.panel.home');

        Route::get('admin/client/index', 'Admin\Client\ClientController@index')->name('admin.client.index');
        Route::put('admin/client/create', 'Admin\Client\ClientController@create')->name('admin.client.create');
        Route::get('admin/client/show/{client?}', 'Admin\Client\ClientController@show')->name('admin.client.show');
        Route::post('admin/client/show/update', 'Admin\Client\ClientController@update')->name('admin.client.update');

        Route::get('admin/company/index', 'Admin\Client\Company\CompanyController@index')->name('admin.company.index');
        Route::put('admin/company/create', 'Admin\Client\Company\CompanyController@create')->name('admin.company.create');
        Route::get('admin/company/show/{company?}', 'Admin\Client\Company\CompanyController@show')->name('admin.company.show');
        Route::post('admin/company/show/update', 'Admin\Client\Company\CompanyController@update')->name('admin.company.update');

        Route::get('admin/portfolio/index', 'Admin\Floor\PortfolioController@index')->name('admin.portfolio.index');
        Route::put('admin/portfolio/create', 'Admin\Floor\PortfolioController@create')->name('admin.portfolio.create');
        Route::get('admin/portfolio/show/{portfolio?}', 'Admin\Floor\PortfolioController@show')->name('admin.portfolio.show');
        Route::post('admin/portfolio/show/update', 'Admin\Floor\PortfolioController@update')->name('admin.portfolio.update');

        Route::get('admin/comercial/index', 'Admin\Floor\ComercController@index')->name('admin.comercial.index');
        Route::put('admin/comercial/create', 'Admin\Floor\ComercController@create')->name('admin.comercial.create');
        Route::get('admin/comercial/show/{portfolio?}', 'Admin\Floor\ComercController@show')->name('admin.comercial.show');
        Route::post('admin/comercial/show/update', 'Admin\Floor\ComercController@update')->name('admin.comercial.update');


        Route::get('comerc/', 'ComercController@index')->name('comerc');
        Route::get('comerc/{id?}/stepTwo', 'ComercController@stepTwo')->name('comerc.stepTwo');
        Route::get('comerc/{id?}/stepThree/{floor?}', 'ComercController@stepThree')->name('comerc.stepThree');
        Route::post('comerc/finish/{id}/{floor?}', 'ComercController@finish')->name('comerc.finish');
        Route::get('comerc/show/{comercel?}', 'ComercController@show')->name('comerc.show');

        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/{slag}', 'HomeController@page')->name('page');
        Route::get('company/{slug?}', 'CompanyController@index')->name('company');
        Route::get('portfolio/{slug?}', 'PortfolioController@index')->name('portfolio');
        Route::get('floor/{slag?}/{slag1?}', 'HomeController@pageInTown')->name('pageInTown');
        Auth::routes();

        Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');
        Route::group(
        [
        'prefix'=>'admin/',
        'as'=>'admin.',
        'namespace'=>'Admin',
        'middleware'=>['auth'],
        ],
        function() {
            Route::get('users', 'Workers\UserController@index')->name('workers');
            Route::get('users/show/{user}', 'Workers\UserController@show')->name('workers.show');
            Route::put('users/update/{user}', 'Workers\UserController@update')->name('workers.update');
            Route::put('users/store/', 'Workers\UserController@store')->name('workers.store');
            Route::get('users/destroy/{user}', 'Workers\UserController@destroy')->name('workers.destroy');

            Route::get('users/kpi', 'Workers\KpiController@index')->name('workers.kpi');

            Route::get('users/wage', 'Workers\WageController@index')->name('workers.wage');
            Route::put('users/wage/store/{boolean}', 'Workers\WageController@create')->name('workers.wage.create');
            Route::get('users/wage/destroy/{wage}', 'Workers\WageController@destroy')->name('workers.wage.destroy');
            Route::put('users/wage/edit/{wage}/{b}', 'Workers\WageController@edit')->name('workers.wage.edit');

            Route::get('users/timesheet', 'Workers\TimesheetController@index')->name('workers.timesheet');
            Route::put('users/timesheet/store/{boolean}', 'Workers\TimesheetController@create')->name('workers.timesheet.create');
            Route::get('users/timesheet/destroy/{timesheet}', 'Workers\TimesheetController@destroy')->name('workers.timesheet.destroy');
            Route::put('users/timesheet/edit/{timesheet}/{b}', 'Workers\TimesheetController@edit')->name('workers.timesheet.edit');

            Route::resource('region', 'RegionController');
            Route::get('/region/create/{id}', 'RegionController@createtwo')->name('region.parent.create');
            Route::group(
                [
                    'prefix' => 'storage',
                    'as' => 'storage.',
                    'namespace' => 'Storage',
                ],
                function () {
                    Route::get('/providers', 'ProviderController@index')->name('provider');
                    Route::get('/destroy/providers/{provider}', 'ProviderController@destroy')->name('provider.destroy');
                    Route::put('providers/store/', 'ProviderController@store')->name('provider.store');
                    Route::put('edit/{provider}', 'ProviderController@edit')->name('provider.edit');

                    Route::get('/destroy/material/{material}', 'MaterialController@destroy')->name('material.destroy');
                    Route::put('material/store/', 'MaterialController@store')->name('material.store');
                    Route::put('/edit/material/{material}', 'MaterialController@edit')->name('material.edit');
                    Route::get('/material/show/{material}', 'MaterialController@show')->name('material.show');

                    Route::get('/destroy/transaction/material/{material}', 'MaterialTransactionController@destroy')->name('material.transaction.destroy');
                    Route::put('transaction/material/store/', 'MaterialTransactionController@store')->name('material.transaction.store');
                    Route::put('transaction/material/edit/{material}', 'MaterialTransactionController@edit')->name('material.transaction.edit');

                    Route::resource('categories', 'CategoryController');
                    Route::group(
                        [
                            'prefix' => 'categories',
                            'as' => 'categories.',
                        ],
                        function () {
                            Route::get('/{category}', 'CategoryController@more')->name('more');
                            Route::post('/first', 'CategoryController@first')->name('first');
                            Route::post('/up', 'CategoryController@up')->name('up');
                            Route::post('/down', 'CategoryController@down')->name('down');
                            Route::post('/last', 'CategoryController@last')->name('last');
                        });
                }
            );
        });
});
Route::get('setlocale/{lang}', function ($lang) {

    $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);

    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {

        unset($segments[1]); //удаляем метку
    }

    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage){
        array_splice($segments, 1, 0, $lang);
    }

    //формируем полный URL
    $url = Request::root().implode("/", $segments);

    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу

})->name('setlocale');

