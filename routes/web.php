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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

// FRONTEND ROUTE

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/business/one', 'Frontend\HomeController@formBusiness1')->name('frontend.form.business.1');
Route::get('/business/two', 'Frontend\HomeController@formBusiness2')->name('frontend.form.business.2');
Route::get('/business/three', 'Frontend\HomeController@formBusiness3')->name('frontend.form.business.3');
Route::get('/business/four', 'Frontend\HomeController@formBusiness4')->name('frontend.form.business.4');
Route::get('/individual/one', 'Frontend\HomeController@formIndividual1')->name('frontend.form.individual.1');
Route::get('/individual/two', 'Frontend\HomeController@formIndividual2')->name('frontend.form.individual.2');
Route::get('/individual/three', 'Frontend\HomeController@formIndividual3')->name('frontend.form.individual.3');
Route::get('/fill', 'Frontend\HomeController@formFinal')->name('frontend.form.final');
Route::post('/fill-submit', 'Frontend\HomeController@storeForm')->name('frontend.fill.store');
Route::get('/thankyou', 'Frontend\HomeController@formThankYou')->name('frontend.form.thank_you');

// ADMIN ROUTE
// ====================================================================================================================

Route::prefix('admin')->group(function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Contact Message
    Route::get('/contact-messages', 'Admin\ContactMessageController@index')->name('admin.contact-messages.index');

    // Admin User
    Route::get('/admin-users', 'Admin\AdminUserController@index')->name('admin.admin-users.index');
    Route::get('/admin-users/create', 'Admin\AdminUserController@create')->name('admin.admin-users.create');
    Route::post('/admin-users/store', 'Admin\AdminUserController@store')->name('admin.admin-users.store');
    Route::get('/admin-users/edit/{item}', 'Admin\AdminUserController@edit')->name('admin.admin-users.edit');
    Route::post('/admin-users/update', 'Admin\AdminUserController@update')->name('admin.admin-users.update');
    Route::post('/admin-users/delete', 'Admin\AdminUserController@destroy')->name('admin.admin-users.destroy');

    // User
    Route::get('/users', 'Admin\UserController@index')->name('admin.users.index');
    Route::get('/users/create', 'Admin\UserController@create')->name('admin.users.create');
    Route::post('/users/store', 'Admin\UserController@store')->name('admin.users.store');
    Route::get('/users/edit/{item}', 'Admin\UserController@edit')->name('admin.users.edit');
    Route::post('/users/update', 'Admin\UserController@update')->name('admin.users.update');
    Route::post('/users/delete', 'Admin\UserController@destroy')->name('admin.users.destroy');

    // Category
    Route::get('/categories', 'Admin\CategoryController@index')->name('admin.categories.index');
    Route::get('/categories/create', 'Admin\CategoryController@create')->name('admin.categories.create');
    Route::post('/categories/store', 'Admin\CategoryController@store')->name('admin.categories.store');
    Route::get('/categories/edit/{item}', 'Admin\CategoryController@edit')->name('admin.categories.edit');
    Route::post('/categories/update', 'Admin\CategoryController@update')->name('admin.categories.update');
    Route::post('/categories/delete', 'Admin\CategoryController@destroy')->name('admin.categories.destroy');

    // Currency
    Route::get('/currencies', 'Admin\CurrencyController@index')->name('admin.currencies.index');

    // Subscribes
    Route::get('/subscribes', 'Admin\SubscribeController@index')->name('admin.subscribes.index');
    Route::get('/subscribe-downloads', 'Admin\SubscribeController@download')->name('admin.subscribes.download');


    // Store Address
    Route::get('/store-address', 'Admin\StoreAddressController@index')->name('admin.store-address.index');
    Route::get('/store-address/create', 'Admin\StoreAddressController@create')->name('admin.store-address.create');
    Route::post('/store-address/delete', 'Admin\StoreAddressController@destroy')->name('admin.store-address.destroy');

    // Voucher
    Route::get('/vouchers/', 'Admin\VoucherController@index')->name('admin.vouchers.index');
    Route::get('/vouchers/show/{item}', 'Admin\VoucherController@show')->name('admin.vouchers.show');
    Route::get('/vouchers/create', 'Admin\VoucherController@create')->name('admin.vouchers.create');
    Route::post('/vouchers/store', 'Admin\VoucherController@store')->name('admin.vouchers.store');
    Route::get('/vouchers/edit/{item}', 'Admin\VoucherController@edit')->name('admin.vouchers.edit');
    Route::post('/vouchers/update', 'Admin\VoucherController@update')->name('admin.vouchers.update');
    Route::post('/vouchers/delete', 'Admin\VoucherController@destroy')->name('admin.vouchers.destroy');

    // Footer
    Route::get('/footer', 'Admin\FooterController@index')->name('admin.footer.index');
    Route::post('/footer/update', 'Admin\FooterController@update')->name('admin.footer.update');
    Route::post('/footer/column/item/store', 'Admin\FooterController@storeColumnItem')->name('admin.footer.item.store');
    Route::post('/footer/column/item/update', 'Admin\FooterController@updateColumnItem')->name('admin.footer.item.update');
    Route::post('/footer/column/item/destroy', 'Admin\FooterController@destroyColumnItem')->name('admin.footer.item.destroy');

    // Footer
    Route::get('/package', 'Admin\PackageDataController@index')->name('admin.package.index');
    Route::post('/package/update', 'Admin\PackageDataController@update')->name('admin.package.update');
    Route::post('/package/column/item/store', 'Admin\PackageDataController@storeColumnItem')->name('admin.package.item.store');
    Route::post('/package/column/item/update', 'Admin\PackageDataController@updateColumnItem')->name('admin.package.item.update');
    Route::post('/package/column/item/destroy', 'Admin\PackageDataController@destroyColumnItem')->name('admin.package.item.destroy');

    Route::get('/product/create-customize/{item}', 'Admin\ProductController@createCustomize')->name('admin.product.create.customize');
    Route::post('/product/store-customize/{item}', 'Admin\ProductController@storeCustomize')->name('admin.product.store.customize');
    Route::get('/product/edit-customize/{item}', 'Admin\ProductController@editCustomize')->name('admin.product.edit.customize');
    Route::post('/product/update-customize/{item}', 'Admin\ProductController@updateCustomize')->name('admin.product.update.customize');
    Route::get('/product/edit/{item}', 'Admin\ProductController@edit')->name('admin.product.edit');
});

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::view('/send-email', 'auth.send-email');

// Datatables
Route::get('/datatables-contact-message', 'Admin\ContactMessageController@getIndex')->name('datatables.contact-message');
Route::get('/datatables-admin-users', 'Admin\AdminUserController@getIndex')->name('datatables.admin_users');
Route::get('/datatables-admin-products', 'Admin\ProductController@getIndex')->name('datatables.admin_products');
Route::get('/datatables-users', 'Admin\UserController@getIndex')->name('datatables.users');
Route::get('/datatables-categories', 'Admin\CategoryController@getIndex')->name('datatables.categories');
Route::get('/datatables-currencies', 'Admin\CurrencyController@getIndex')->name('datatables.currencies');
Route::get('/datatables-store-addresses', 'Admin\StoreAddressController@getIndex')->name('datatables.store-addresses');
Route::get('/datatables-subscribes', 'Admin\SubscribeController@getIndex')->name('datatables.subscribes');
Route::get('/datatables-vouchers', 'Admin\VoucherController@getIndex')->name('datatables.vouchers');
Route::get('/datatables-faqs', 'Admin\FaqController@getIndex')->name('datatables.faqs');

// Select2
Route::get('/select-roles', 'Admin\RoleController@getRoles')->name('select.roles');
Route::get('/select-categories', 'Admin\CategoryController@getCategories')->name('select.categories');
Route::get('/select-products', 'Admin\ProductController@getProducts')->name('select.products');

// Third Party API
Route::get('/update-currency', 'Admin\CurrencyController@getCurrenciesUpdate')->name('update-currencies');

// Email Aauth
Route::get('/request-verification/{email}', 'Auth\RegisterController@RequestVerification')->name('request-verification');