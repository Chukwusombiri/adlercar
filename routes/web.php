<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{AdminDashBoardController,UsersController,
    FaqsController, TeamController, CompanyController, ShipmentController,
    MailController, TestimonialsController,ArticlesController,};
use App\Http\Controllers\Guest\{CronController, GuestPagesController};
use App\Http\Controllers\User\{UserDashBoardController,UserShipmentController,}; 

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

/* GUEST */
Route::controller(GuestPagesController::class)->group(function () {
Route::get('/','index')->name('guestHome');
Route::get('/customer-support/contact', 'contact')->name('contact');
Route::get('/pickup-delivery/schedule', 'schedule')->name('schedule');
Route::get('/our-company/about', 'about')->name('about');
Route::get('/our-company/frequently-asked-question', 'faqs')->name('faqs');
Route::get('/customer-feedbacks/testimonials', 'testimonials')->name('testimonials');
Route::get('/shipping-support-for-ukrain','ukrain')->name('ukrain');
Route::get('/get-estimate/quote','quote')->name('quote');
Route::get('/warehouse-solutions','warehouse')->name('warehouse');
Route::get('/transport-and-distribution','transport')->name('transport');
Route::get('/transportation/air-freight','air')->name('air');
Route::get('/transportation/ocean-freight','ocean')->name('ocean');
Route::get('/transportation/road-freight','road')->name('road');
Route::get('/transportation/rail-freight','rail')->name('rail');
Route::get('/shipping','shipping')->name('shipping');
Route::get('/insights-and-innovations','blogs')->name('blogs'); 
Route::get('/read-article/{slug}','readarticle')->name('readarticle');
Route::get('/shipment/Track-shipment/{tracker_id}','trackNow')->name('trackNow')->middleware('valid_tracker');
});


/* AUTH */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',function(){
        if(auth()->user()->is_admin){
            return redirect('/admin/dashboard');
        }else{
            return redirect('/');
        }
    });

    /* USER */
    Route::group(
        [
            'middleware'=>'is_user',
            'prefix'=>'user',
            'as'=>'user.',   
        ], function(){                        
            Route::get('/start-shipment/ship-today', [UserDashBoardController::class,'ship'])->name('ship');                                                    
        }
    ); 


    /* ADMIN */
    Route::group(
        [
            'middleware'=>'is_admin',
            'prefix'=>'admin',
            'as'=>'admin.',
        ], function(){
        Route::get('/dashboard',[AdminDashBoardController::class,'index'])->name('dashboard');
        
        /* notifications */
        Route::get('/notifications',[AdminDashBoardController::class,'notifications'])->name('notifications');
        Route::get('/notification/{id}', [AdminDashBoardController::class,'readNotifications'])->name('notification');       
        Route::get('/resetpwd', [AdminDashBoardController::class,'resetpwd'])->name('resetpwd');
        Route::patch('/reset', [AdminDashBoardController::class,'reset'])->name('reset');                                                                                                                                                                                
         /* user management */
        Route::resource( 'users' ,UsersController::class)->names([
            'index' => 'users',            
            'show' => 'user.show',                        
        ]);  
        
         /* team */
         Route::resource('/shipments',ShipmentController::class)->names([
            'index' => 'shipments',   
            'show' => 'shipment.show',        
        ]);


        /* company */
        Route::get('/company',[CompanyController::class,'index'])->name('company_details');       
        Route::get('/company/edit/{id}',[CompanyController::class,'edit'])->name('company_details.edit');
        Route::patch('/company/update/{id}',[CompanyController::class,'update'])->name('company_details.update');                
        Route::get('/company/certificate/{id}',[CompanyController::class,'getCertificate'])->name('company_details.certificate');
        Route::get('/company/pdf/{id}',[CompanyController::class,'getPdf'])->name('company_details.pdf');
            
        /* team */
        Route::resource('/teamMembers',TeamController::class)->names([
            'index' => 'teamMembers',
            'create' => 'teamMembers.create',
            'store' => 'teamMembers.store',                      
            'edit' => 'teamMembers.edit',
            'destroy'=> 'teamMembers.destroy',
        ]);

        /* faqs */
        Route::resource('faqs',FaqsController::class)->names([
            'index' => 'faqs',
            'create' => 'faqs.create',
            'store' => 'faqs.store',                                 
            'edit' => 'faqs.edit',
            'destroy'=> 'faqs.destroy',
        ]);


        /* testimonials */
        Route::resource('/testimonials',TestimonialsController::class)->names([
            'index' => 'testimonials',
            'create' => 'testimonials.create',
            'store' => 'testimonials.store',                                 
            'edit' => 'testimonials.edit',
            'destroy'=> 'testimonials.destroy',
        ]);
       
        /* Article */
        Route::resource('articles', ArticlesController::class)->names([
            'index' => 'articles',
            'create' => 'articles.create',
            'store' => 'articles.store', 
            'show' => 'articles.show',                     
            'edit' => 'articles.edit',
            'destroy'=> 'articles.destroy',
        ]);
            
        /* mail */ 
        Route::get('/getmail/{id?}',[MailController::class,'getmail'])->name('getmail');
        Route::post('/sendmail',[MailController::class,'sendmail'])->name('sendmail');
        Route::get('/sendBulkemail',[MailController::class,'sendBulkemail'])->name('sendBulkemail');
        Route::post('/bulkemail',[MailController::class,'bulkemail'])->name('bulkemail');
    });    
});
