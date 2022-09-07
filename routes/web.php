<?php

use App\Http\Controllers\Conversation\chatController;
use App\Http\Controllers\Dashboard\super_admin\AdminTeamController;
use App\Http\Controllers\Dashboard\super_admin\businessAnalyticsInputController;
use App\Http\Controllers\Dashboard\super_admin\Service_categoryController;
use App\Http\Controllers\Dashboard\super_admin\Services_Controller;
use App\Http\Controllers\Dashboard\super_admin\getAdminController;
use App\Http\Controllers\Dashboard\super_admin\getUserController;
use App\Http\Controllers\Dashboard\super_admin\ProfileController;
use App\Http\Controllers\Dashboard\super_admin\ProjectController;
use App\Http\Controllers\Dashboard\super_admin\SettingsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\servicesController;
use App\Http\Controllers\Page\aboutController;
use App\Http\Controllers\Page\contactController;
use App\Http\Controllers\Dashboard\super_admin\SuperAdminDashbaordController;
use App\Models\review;
use App\Http\Controllers\Dashboard\user\DataCollectionsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Page\careerController;
use App\Http\Controllers\Page\PrivacyController;
use App\Http\Controllers\Page\teamController;
use App\Http\Controllers\Page\TestimonialController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Dashboard\super_admin\BlogController;
use App\Http\Controllers\Dashboard\super_admin\CurrentProjectsController;
use App\Http\Controllers\Page\InterviewController;
use App\Http\Controllers\Profile\generalProfileController;
use App\Models\CurrentProject;
use App\Models\DataCollection;

// Routes

//interview

Route::get('/pages/interview',[InterviewController::class,'interviewPage'])->name('pages.interview');
Route::post('/pages/interview',[InterviewController::class,'interviewFormSubmit'])->name('pages.interview.store');


// Route::
Route::get('/services',             [servicesController::class,'services'])->name('services');
Route::get('/datacollection',       [servicesController::class,'datacollection'])->name('datacollection');
Route::get('/data-analysis',        [servicesController::class,'data_analysis'])->name('data_analysis');
Route::get('/business-analytics',   [servicesController::class,'business_analytics'])->name('business-analytics');
Route::get('/report-writing',       [servicesController::class,'report_writing'])->name('report-writing');
Route::get('/data-outsourcing',     [servicesController::class,'data_outsourcing'])->name('data-outsourcing');
Route::get('/research-consultation',[servicesController::class,'research_consultation'])->name('research-consultation');
Route::get('/training',             [servicesController::class,'training'])->name('training');
Route::get('/market_survey',        [servicesController::class,'market_survey'])->name('market_survey');
Route::get('/dashboard-service',    [servicesController::class,'dashboard_service'])->name('dashboard-service');

//about us
Route::get('/about',                [aboutController::class,'about'])->name('about');
Route::get('/review',               [aboutController::class,'review'])->name('review');
Route::post('/reviews_us',          [aboutController::class,'reviews_us'])->name('reviews-datagenius');
Route::get('/tac',                  [aboutController::class,'terms'])->name('terms');
//contact us

Route::get('/contact',              [contactController::class,'contact'])->name('contact');
Route::post('/contact_message',     [contactController::class,'contact_message'])->name('contact_submit');
Route::get('/library',              [contactController::class,'library'])->name('library');
//more
Route::get('/team-page',            [teamController::class,'index'])->name('team');
Route::get('/testimonial',          [TestimonialController::class,'testimonial'])->name('testimonial');
Route::get('/privacy',              [PrivacyController::class,'privacy'])->name('privacy');
Route::get('/career',               [careerController::class,'career'])->name('career');


//blog
Route::get('/blog_information',         [BlogController::class,'index'])->name('blog.index');
Route::get('/blog/show/{slug}',         [BlogController::class,'show'])->name('blog.show');
Route::get('/blog_category/{id}',       [BlogController::class,'blogInformationCategory'])->name('blog.information.category');
Route::get('/category/{title}',         [BlogController::class,'category'])->name('blog.category');



Route::get('/', function () {
     $review=review::latest()->take(3)->get();
    return view('welcome',['review' => $review]);
})->name('homepage');




Route::get('/check', function(){
    // $data=Http::get('https://coderbyte.com/api/challenges/json/age-counting');
    // $response = json_decode($data, true);
    $api  = '6273d09abc8ea9.49154126';
    $response =Http::get('https://eodhistoricaldata.com/api/fundamentals/AAPL.US?api_token='.$api);
    return $response;

});

Auth::routes();
Route::group(['middleware' => ['role:user']], function() {
Route::get('/home',                [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('/data_collection',DataCollectionsController::class)->middleware('auth');
Route::get('/data_analysis',       [DataCollectionsController::class,'data_analysis'])->name('data_analysis')->middleware('auth');
Route::post('/data_analysis',      [DataCollectionsController::class,'store'])->name('service_details_collection')->middleware('auth');
Route::get('/business_analytics',  [DataCollectionsController::class,'businessAnalytics'])->name('business_analytics')->middleware('auth');
Route::get('/report_writing',      [DataCollectionsController::class,'reportWriting'])->name('report_writing')->middleware('auth');
Route::get('/training',            [DataCollectionsController::class,'training'])->name('training')->middleware('auth');
Route::get('/consultation',        [DataCollectionsController::class,'consultation'])->name('consultation')->middleware('auth');
Route::get('/field_survey',        [DataCollectionsController::class,'fieldSurvey'])->name('field_survey')->middleware('auth');
Route::get('/data_outgoing',       [DataCollectionsController::class,'dataOutsourcing'])->name('dataOutsourcing')->middleware('auth');
Route::get('/deleteProduct/{id}',  [DataCollectionsController::class,'deleteProduct'])->name('deleteProduct')->middleware('auth');
Route::post('/profile_picture',    [HomeController::class,'usersProfileImage'])->name('profile.image')->middleware('auth');
Route::get('/payment',             [HomeController::class,'payment'])->name('payment')->middleware('auth');
Route::get('/chat',                [chatController::class,'index'])->name('conversation.chat')->middleware('auth');
Route::post('/update_profile',     [HomeController::class,'update_profile'])->name('update.profile')->middleware('auth');






});





Route::group(['middleware' => ['role:admin']], function() {
    Route::get('/admin_dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
});



//SuperAdmin

Route::group(['middleware' => ['role:SuperAdmin']], function() {
    Route::get('/superAdmin_dashboard', [SuperAdminDashbaordController::class, 'index'])
    ->name('superAdmin_dashboard')->middleware('auth');

    // user_list from SuperAdmin
    Route::get('/user_list',        [getUserController::class,'index']) ->name('user_list')->middleware('auth');
    Route::get('/edit_list/{id}',   [getUserController::class,'show'])->name('Update Users')->middleware('auth');
    Route::post('/edit_list/{id}',  [getUserController::class,'user_update'])->name('register_user')->middleware('auth');
    Route::post('/user_list',       [getUserController::class,'send'])->name('send')->middleware('auth');
    Route::get('/delete_user/{id}', [getUserController::class,'delete_user'])->name('delete_user')->middleware('auth');

    //Admin_list from SuperAdmin
    Route::get('/admin_list',       [getAdminController::class,'index'])->name('admin')->middleware('auth');
    Route::get('/edit_admin/{id}',  [getAdminController::class,'show'])->name('admin')->middleware('auth');
    Route::post('/edit_admin/{id}', [getAdminController::class,'edit_admin'])->name('admin')->middleware('auth');
    Route::post('/add_admin',       [getAdminController::class,'add_admin'])->middleware('auth');
    Route::get('/delete_admin/{id}',[getAdminController::class,'delete_admin'])->middleware('auth');

    //team reg
    Route::get('/team_reg',          [AdminTeamController::class,'index'])->name('name')->middleware('auth');
    Route::post('/team_registration',[AdminTeamController::class,'createTeam'])->name('team_memeber')->middleware('auth');
    Route::get('/delete_team/{id}',  [AdminTeamController::class,'destory'])->name('delete_team')->middleware('auth');

    Route::get('/project',           [ProjectController::class,'project'])->name('Project')->middleware('auth');
    Route::get('/add_project/{id}',  [ProjectController::class,'add_project'])->name('add_project')->middleware('auth');

    //Super Admin Settings
    Route::get('/profile',          [ProfileController::class,'profile'])->name('profile')->middleware('auth');
    Route::get('/change_password',  [SettingsController::class,'index'])->middleware('auth');
    // Route::post('/change_password',[SettingsController::class,'change_password'])->middleware('auth');


    //service input from dashboard

    Route::resource('/service_create',Services_Controller::class)->middleware('auth');

    Route::resource('/service_category', Service_categoryController::class)->middleware('auth');
    Route::get('/delete_service_category/{id}',[Service_categoryController::class,'remove_category'])->middleware('auth');
    Route::resource('/business_analytics_input',businessAnalyticsInputController::class)->middleware('auth');

    //Blog category

    Route::get('/category',                 [BlogController::class,'blogCategoryView'])->middleware('auth');
    Route::post('/blog_category',           [BlogController::class,'storeBlogCategory'])->middleware('auth');
    Route::get('/delete_blog_category/{id}',[BlogController::class,'deleteCategory'])->middleware('auth');

    //Blog post
    Route::get('/all_post',                 [BlogController::class,'blogPostView'])->middleware('auth');
    Route::post('/all_post',                [BlogController::class,'blogPost'])->name('all_post')->middleware('auth');
    //current Finished Project

    Route::get('/current_project',          [CurrentProjectsController::class,'index'])->middleware('auth');
    Route::post('/current_project',         [CurrentProjectsController::class,'store'])->middleware('auth');


    Route::get('/project_per_user',         [CurrentProjectsController::class,'list_of_project'])->name('project_per_user')->middleware('auth');
});






