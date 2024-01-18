<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

Route::get('/optimize', function () {
    Artisan::call('optimize:clear');
    return redirect('/');
});

Route::get('/clear-cache', function () {
	Artisan::call('config:clear');
	Artisan::call('route:clear');
	Artisan::call('view:clear');
	Artisan::call('config:cache');
	Artisan::call('view:cache');
	print_r('Please refresh the browser');
});

Route::get('/knee-replacement', function () {
    $source= Request('utm_source');
 $city = Request('city');
 $dynamic=  Request('dynamic');
 $whatsappText = Request('whatsappText');
 $url = "https://services.medfin.in/web/marketing-info?source=$source&city=$city&service=13&dynamic=$dynamic";
 $curl = curl_init($url);
 curl_setopt($curl, CURLOPT_URL, $url);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 
 
 curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 
 $resp = curl_exec($curl);
  $result = json_decode($resp, true);
 $contact=$result['data']['contact'] ?? '7026200200';
 curl_close($curl);
    return view('test',compact('contact','whatsappText'));
});

Route::get('/total-knee-replacement', function () {
    $source= Request('utm_source');
 $city = Request('city');
 $dynamic=  Request('dynamic');
 $whatsappText = Request('whatsappText');
 $url = "https://services.medfin.in/web/marketing-info?source=$source&city=$city&service=13&dynamic=$dynamic";
 $curl = curl_init($url);
 curl_setopt($curl, CURLOPT_URL, $url);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 
 
 curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 
 $resp = curl_exec($curl);
  $result = json_decode($resp, true);
 $contact=$result['data']['contact'] ?? '7026200200';
 curl_close($curl);

 $ip = file_get_contents('https://api.ipify.org');
//  echo "My public IP address is: " . $ip;
//  dd($ip);
 return view('total-knee-replacement',compact('contact','ip','whatsappText'));
});

Route::get('/', 'PageController@index')->name('home');
Route::post('/theme-categories', 'HomeController@themeCategories');
Route::get('/{id}', 'PageController@medfinpage');
Route::get('/search-in-medfin/{search_text}', 'PageController@medfinpage');

// Route::post('/user-self-registration', 'AuthController@userSelfRegistration');
Route::post('/verifyLoginCredential','AuthController@login');

Route::group(['middleware'=>['LoginCheck']],function(){
    //-----OnlyAdminAccessibleRoute-----
    Route::get('/admin/logout','AuthController@logout');

    Route::group(['middleware' => ['OnlyAdminAccessibleRoute']], function() {
        Route::get('/admin/dashboard', 'PageController@adminDashboard');

        //-----Reset password-----
        Route::post('/admin/master-opration/reset-password', 'AdminController@resetPasswordByAdmin');

         //-----AdminAndStaffAccessibleRoute-----
        Route::group(['middleware' => ['AdminAndStaffAccessibleRoute']], function() {
        //-----Master Category-----
        Route::get('/admin/master-record/category-list','PageController@masterCategory');
        Route::post('/admin/master-record/get-all-category', 'CategoryController@get_category');
        Route::post('/admin/master-record/register/category','CategoryController@create_category')->name('master.category');
        Route::post('/admin/master-record/edit-category','CategoryController@editCategory');
        Route::post('/admin/master-record/update-category/{id}','CategoryController@update')->name('update.category');
        Route::post('/admin/master-record/delete-category','CategoryController@delete_record');
         //-----Clone Services-----
         Route::post('/admin/master-record/Clone/Services','CategoryController@clone_services')->name('clone.service');
        // reset password
        Route::get('/admin/profile','PageController@profile');
        Route::post('/admin/get-profile', 'AuthController@getProfileData');
        Route::post('/admin/update-profile', 'AuthController@updateProfileRecord');
        Route::post('/admin/update-password', 'AuthController@change_profile_password');


        //----- Status-----
            Route::post('/banner_status', 'StatusController@banner_status')->name('/banner_status');
            Route::post('/overview_status', 'StatusController@overview_status')->name('/overview_status');
            Route::post('/faq_status', 'StatusController@faq_status')->name('/faq_status');
            Route::post('/doctor_status', 'StatusController@doctor_status')->name('/doctor_status');
           //page publish
           Route::post('/page_publish', 'StatusController@page_publish')->name('/page_publish');
           //page Archive
           Route::post('/page_archive', 'StatusController@page_archive')->name('/page_archive');

            //list_pages
            Route::get('/admin/all-banner', 'PageController@bannerList');  
            Route::get('/admin/all-Pages', 'PageController@Page_List'); 
                
            //content
            Route::get('/admin/content','PageController@content');
            Route::post('/register/content','ContentController@create_banner')->name('master.banner');
            Route::post('/register/content/overview','ContentController@create_overview')->name('master.overview');

            //FAQs
            Route::post('/register/content/faqs','ContentController@create_faqs')->name('master.faq');
            //treatment
            Route::post('/register/content/treatment','ContentController@create_treatment')->name('master.treatment'); 
            //cause & symptoms
            Route::post('/register/content/cause-and-symptoms','ContentController@create_symptoms')->name('master.symptoms');
            //advantages
            Route::post('/register/content/advantages','ContentController@create_advantages')->name('master.advantages'); 
            //Appointment-Button
            Route::post('/register/content/app-btn','ContentController@create_app_btn')->name('master.btn');
            
            //testimonials
            Route::get('/admin/testimonials','PageController@testimonials');
            Route::post('/register/testimonials','ContentController@create_testimonials')->name('master.testimonials');
            Route::post('/update/testimonials','ContentController@update_testimonials')->name('update.testimonials');
            Route::post('/delete/testimonials','ContentController@delete_testimonials')->name('delete.testimonials');
    });
});
});