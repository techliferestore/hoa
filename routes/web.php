<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\dashcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\servicecmsController;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\OrderController;
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


use App\Http\Controllers\Auth\AdminAuthController;


Route::get('google-bar-chart', [OrderController::class, 'index']);

Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');




Route::get('/profile', [FrontController::class,'profile'])->name('profile');
Route::get('/', [FrontController::class,'home'])->name('home');
Route::get('blog', [FrontController::class,'blog'])->name('blog');

Route::get('service', [FrontController::class,'service'])->name('service');

Route::get('contact-us', [FrontController::class,'contact'])->name('contact');
Route::get('detail-blog/{slug}', [FrontController::class,'dblog'])->name('dblog');



Route::group(['prefix' => 'dashboard'], function () {   
  Route::get('/profile', [dashcontroller::class,'index'])->name('dashboard');
  Route::get('/invoice', [dashcontroller::class,'invoice'])->name('invoice')->middleware('auth');
  Route::get('/invoicetype', [dashcontroller::class,'invoicetype'])->name('invoicetype');
  Route::get('/createinvoice', [dashcontroller::class,'createinvoice'])->name('createinvoice');
  Route::get('/invoicesetting', [dashcontroller::class,'invoicesetting'])->name('invoicesetting');
  Route::get('/invoicehistory', [dashcontroller::class,'invoicehistory'])->name('invoicehistory');
  Route::get('/invoiceprofile', [dashcontroller::class,'invoiceprofile'])->name('invoiceprofile');
 // Route::get('/pay', [dashcontroller::class,'payroll'])->name('pay');
  Route::post('/checkout', [dashcontroller::class,'checkout'])->name('checkout')->middleware('auth');

  Route::get('/plans', [dashcontroller::class,'plain'])->name('plain');
  Route::get('/service', [dashcontroller::class,'service'])->name('service');
  Route::get('/Accounting-Services/{slug}', [dashcontroller::class,'accservice'])->name('accservice');
  Route::get('/bookkeeping/{slug}', [dashcontroller::class,'bookkeeping'])->name('bookkeeping');
  Route::get('/dlayout', [dashcontroller::class,'dlayout']);

  Route::post('/storeinvoice', [dashcontroller::class,'storeinvoice'])->name('storeinvoice');
  Route::post('/storeinvoicesetting', [dashcontroller::class,'storeinvoicesetting'])->name('storeinvoicesetting');
  Route::get('/check-service', [dashcontroller::class,'checkservice'])->name('dashboard.checkservice');
  Route::get('/mis-report', [dashcontroller::class,'misreport'])->name('dashboard.misreport');
  Route::get('/upload-file', [dashcontroller::class,'upload'])->name('dashboard.upload');


  Route::get('/Price-plan', [dashcontroller::class,'fixprice'])->name('fixprice');
    Route::get('/dedicalted-plain', [dashcontroller::class,'dedicated'])->name('dedicated');
  //  Route::get('/profile', [dashcontroller::class,'profile'])->name('dashboard');
   // Route::get('/invoice', [dashcontroller::class,'invoice'])->name('invoice');
  //  Route::get('/payroll', [dashcontroller::class,'payroll'])->name('payroll');
    //Route::get('/plans', [dashcontroller::class,'plain'])->name('plain');
   // Route::get('/service', [dashcontroller::class,'service'])->name('service');
   // Route::get('/Accounting-Services/{slug}', [dashcontroller::class,'accservice'])->name('accservice');
    //Route::get('/bookkeeping/{slug}', [dashcontroller::class,'bookkeeping'])->name('bookkeeping');
   //    Route::get('/dlayout', [dashcontroller::class,'dlayout']);
   

  
  

});


Route::group(['middleware' => ['auth:admin']], function () {

    
  

Route::group(['prefix' => 'admin'], function () {
    Route::get('/bookeeping/{slug}', [admincontroller::class,'bookeeping'])->name('bookeeping');
    Route::get('/ourservice', [admincontroller::class,'ourservice'])->name('ourservice');
    Route::get('/servicecategory', [admincontroller::class,'servicecategory'])->name('servicecategory');
    Route::get('/leads', [admincontroller::class,'leads'])->name('leads');
    Route::get('/uploadblog', [admincontroller::class,'uploadblog'])->name('uploadblog');
    Route::get('/dashboard', [admincontroller::class,'admin_dashboard'])->name('admin_dashboard');
    Route::get('/package-list', [admincontroller::class,'package_list'])->name('package_list');
    Route::get('/add-new-package', [admincontroller::class,'add_new_package'])->name('add_new_package');
    Route::post('package/store',[admincontroller::class,'package_store'])->name('storepackage');
  //Client route start
  Route::get('alluser',[admincontroller::class,'alluser'])->name('alluser');
  Route::get('upload-doc',[admincontroller::class,'uploaddoc'])->name('admin.upload');
  Route::get('mis-report',[admincontroller::class,'misreport'])->name('admin.misreport');

  
  Route::get('allclient',[admincontroller::class,'allclient'])->name('allclient');




    Route::get('/postedblog', [admincontroller::class,'postedblog'])->name('postedblog');
    Route::get('/faq', [admincontroller::class,'blogfaq'])->name('blog_faq');
    Route::get('/category',[adminController::class,'allcategory'])->name('allcategory');
    Route::get('/subcategory',[adminController::class,'subcategory'])->name('allsubcategory');
    Route::get('/editblog/{id}', [adminController::class, 'editblog'])->name('editblog');
    Route::post('/updatblog/{id}', [adminController::class,'updateblog'])->name('updateblog');

    //package fix
    Route::post('/monthly-transaction-name', [adminController::class,'monthly_transaction_name'])->name('admin.monthly-tran-name');
    Route::get('/package-setting', [adminController::class, 'package_setting'])->name('package-setting');
   Route::get('/fix_plain_service_label',[adminController::class,'fix_plain_service_label'])->name('plain_label'); 
   Route::post('/add-fix-plain', [adminController::class,'addfixplain'])->name('admin.addfixplain');
    Route::get('/plain-type', [adminController::class, 'plaintype'])->name('admin.plaintype');

    //edit/activ/delete
    Route::put('/{blog}/complete', [admincontroller::class,'complete'])->name('complete');
    Route::delete('/{blog}/incomplete', [admincontroller::class,'incomplete'])->name('incomplete');
    Route::delete('/{blog}', [admincontroller::class,'destroy'])->name('destroy');
    Route::get('/{blog}/edit', [admincontroller::class,'editblog'])->name('editblog');
    //end blog action
    Route::post('/addcategory', [admincontroller::class,'addcategory']);
    Route::post('/addservicesubcategory', [admincontroller::class,'addservicesubcategory'])->name('addsubcat');
    Route::post('/postlabel', [admincontroller::class,'postlabel'])->name('postlabel');
       
       // Route::post('/updatelabel', [admincontroller::class,'updatelabel'])->name('updatelabel');
                Route::post('/price-setting', [admincontroller::class,'psetting'])->name('psetting');

        Route::get('/addlabel', [admincontroller::class,'addlabel'])->name('addlabel');
    Route::post('/storeblog', [admincontroller::class,'storeblog'])->name('storeblog');
     //cms system start//
    Route::resource('servicecms',servicecmsController::class);

    
});



});




require __DIR__.'/auth.php';
