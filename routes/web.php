<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\CompanySetupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompanyRegistrationController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\MetaPixelController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Http;
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

// Route::get('/', function () {
//     // return view('index');
//     return view('theme.index');
// });
Route::get('/', [ HomeController::class, 'index']);
Route::post('/subscribe', [ SubscribeController::class, 'emailsend']);
Route::post('/contact-post', [ SubscribeController::class, 'contact_post']);
Route::post('/gitex-contact-post', [ SubscribeController::class, 'gitex_contact_post']);
Route::post('/mail-subscribe', [ SubscribeController::class, 'emailsubscribe']);
Route::get('/privacy-policy', [ SubscribeController::class, 'privacy_policy']);
Route::post('/vizbot-email-post', [ SubscribeController::class, 'vizbot_email']);
// Chat Bot Routes
Route::post('/save_guest_client', [ ChatbotController::class, 'save_guest_client']);
Route::post('/save_guest_client_rating', [ ChatbotController::class, 'save_guest_client_rating']);
// End Chat Bot Routes
// create new routes
Route::get('/step', [ HomeController::class, 'step']);
// Route::get('/features-old', [ HomeController::class, 'features_page']);
Route::get('/features', [ HomeController::class, 'features_page_2']);
Route::get('/partner-program', [ HomeController::class, 'partner_program']);
Route::get('/about-us', [ HomeController::class, 'about_us']);
Route::get('/terms-conditions', [ HomeController::class, 'terms_conditions']);
Route::get('/contact-us', [ HomeController::class, 'contact_us']);
Route::get('/message', [ HomeController::class, 'message']);
Route::get('/solutions', [ HomeController::class, 'solutions']);
Route::get('/integrations', [ HomeController::class, 'integrations']);
Route::get('/industries', [ HomeController::class, 'industries']);
Route::get('/apps', [ HomeController::class, 'apps']);
Route::get('/case-studies', [ HomeController::class, 'case_studies']);
Route::get('/25th-itcn', [ HomeController::class, 'itcn_25th']);
// Route::get('/gitex', [ HomeController::class, 'gitex']);
// Route::get('/gitex-contact-us', [ HomeController::class, 'gitex_contact_us']);
// Route::get('/thank-you', [ HomeController::class, 'thank_you']);
Route::get('/pricing-plans', [ PricesController::class, 'prices']);
// Route::get('/ip-location/{ip?}', [ PricesController::class, 'getLocation']); // Test route
Route::get('/company-setup', [ CompanySetupController::class, 'company_setup']);
// Route::get('/login', [ LoginController::class, 'login']);
Route::get('/company-register/{price_id}', [ CompanyRegistrationController::class, 'company_register'])->name('register_company');
Route::post('/verify-user-info', [ CompanyRegistrationController::class, 'verifyUser'])->name('verify_user');
Route::post('/authenticate-user', [ CompanyRegistrationController::class, 'authenticateUser'])->name('authenticate_user');
Route::post('add-user', [ CompanyRegistrationController::class, 'addUser'])->name('add_user');
Route::post('talk-to-sales', [ CompanyRegistrationController::class, 'talkToSales'])->name('talk_to_sales');
Route::post('get-selected-plan', [ PricesController::class, 'getSelectedPlan'])->name('get_selected_plan');
Route::post('payment-card-intent', [ PricesController::class, 'paymentCardIntent'])->name('payment_card_intent');
Route::get('subscribe-confirm-return', [ PricesController::class, 'confirmReturn'])->name('subscribe_confirm_return');
Route::get('subscription-confirmed-successfully', [ PricesController::class, 'subscription'])->name('subscription_confirmed');
Route::post('payment-confirm-from-old-card', [ PricesController::class, 'paymentConfirmFromOldCard'])->name('payment_confirm_from_old_card');
Route::post('plan-add-without-card', [ PricesController::class, 'planAddWithoutCard'])->name('plan_add_without_card');
Route::post('apply-coupon', [ PricesController::class, 'applyCoupon'])->name('apply.coupon');
Route::get('/industries/time-tracking-software-for-startups', [ HomeController::class, 'industry_startup']);
Route::get('/industries/real-estate', [ HomeController::class, 'industry_real_estate']);
Route::get('/industries/freelancing', [ HomeController::class, 'industry_freelance']);
Route::get('/industries/merchandising', [ HomeController::class, 'industry_merchandise']);
Route::get('/industries/architects-engineers', [ HomeController::class, 'industry_architects']);
Route::get('/industries/law-firms', [ HomeController::class, 'industry_law_firms']);
Route::get('/industries/wholesale', [ HomeController::class, 'industry_wholesale']);
Route::get('/industries/healthcare', [ HomeController::class, 'industry_healthcare']);
Route::get('/industries/retail', [ HomeController::class, 'industry_retailers']);
Route::get('/industries/accounts-finance', [ HomeController::class, 'industry_accounting']);
// company register follow using admin panel
Route::get('company-payment/{company_id}', [ CompanyRegistrationController::class, 'companyPayment'])->name('company_payment');

// Features' Routes
Route::get('/feature/training-management', [ FeaturesController::class, 'training_management']);
Route::get('/feature/assessments', [ FeaturesController::class, 'assessments']);
Route::get('/feature/client-management', [ FeaturesController::class, 'client_management']);
// Route::get('/feature/break-management', [ FeaturesController::class, 'break_management']);
Route::get('/feature/project-management', [ FeaturesController::class, 'project_management']);
Route::get('/feature/task-management', [ FeaturesController::class, 'task_management']);
Route::get('/feature/monitoring', [ FeaturesController::class, 'monitoring']);

Route::get('/feature/tracking', [ FeaturesController::class, 'tracking']);
Route::get('/feature/productivity-analytics', [ FeaturesController::class, 'productivity_analytics']);
Route::get('/feature/snapshots-and-capturing', [ FeaturesController::class, 'snapshot_capturing']);
Route::get('/feature/hr-management', [ FeaturesController::class, 'hr_management']);

// Case Studies' ROutes
Route::get('/case-study/results-driven', [ HomeController::class, 'case_study_result_driven']);
Route::get('/case-study/click2mail', [ HomeController::class, 'case_study_c2m']);
Route::get('/case-study/physician-wealth-systems', [ HomeController::class, 'case_study_pws']);

//Blogs
// Route::get('/blogs-old', [ HomeController::class, 'blogs']);
Route::get('/blogs', [ HomeController::class, 'blogs_new']);
Route::get('/blogs/why-time-tracking-is-important-essential-role-in-modern-organizations', [ HomeController::class, 'why_time_tracking']);
Route::get('/blogs/what-is-quiet-quitting-and-how-to-address-it', [ HomeController::class, 'understanding_quiet_quitting']);
Route::get('/blogs/how-to-avoid-micromanagement-using-advanced-solutions', [ HomeController::class, 'avoid_micromanagement']);
Route::get('/blogs/hybrid-or-remote-work-who-is-better', [ HomeController::class, 'hybrid_or_remote_work']);
Route::get('/blogs/staffviz-vs-hubstaff-comparative-analysis', [ HomeController::class, 'staffviz_vs_hubstaff']);
Route::get('/blogs/staffviz-vs-clockify-ultimate-showdown', [ HomeController::class, 'staffviz_vs_clockify']);
Route::get('/blogs/staffviz-vs-time-doctor-compare-and-contrast', [ HomeController::class, 'staffviz_vs_timedoctor']);
Route::get('/blogs/staffviz-vs-toggltrack-which-time-tracking-tool-is-right-for-you', [ HomeController::class, 'staffviz_vs_toggltrack']);
Route::get('/blogs/time-management-strategies-for-peak-productivity', [ HomeController::class, 'time_management_strategies_for_peak_productivity']);
Route::get('/blogs/5-ultimate-hacks-to-ease-time-management-for-employees', [ HomeController::class, 'ultimate_hacks_to_ease_time_management_for_employees']);
Route::get('/blogs/remote-meetings-101-the-essential-handbook', [ HomeController::class, 'remote_meetings_101_the_essential_handbook']);
Route::get('/blogs/everything-you-need-to-know-about-human-resource-development-in-2024', [ HomeController::class, 'everything_you_need_to_know_about_human_resource_development_in_2024']);
Route::get('/blogs/top-time-management-tools-in-2025-to-increase-team-productivity', [ HomeController::class, 'top_time_management_tools_in_2025_to_increase_team_productivity']);
Route::get('/blogs/master-time-management-a-guide-to-stephen-coveys-time-management-matrix', [ HomeController::class, 'master_time_management_a_guide_to_stephen_coveys_time_management_matrix']);
Route::get('/blogs/14-performance-evaluation-types', [ HomeController::class, 'performance_evaluation_types']);
Route::get('/blogs/performance-evaluation-templates', [ HomeController::class, 'performance_evaluation_templates']);
Route::get('/blogs/program-management-vs-project-management', [ HomeController::class, 'program_management']);
Route::get('/blogs/sprint-planning', [ HomeController::class, 'sprint_planning']);
Route::get('/blogs/agile-vs-waterfall', [ HomeController::class, 'agile_vs_waterfall']);

//Meta Pixel AJAX Calls
Route::post('/pricing-page-view', [ MetaPixelController::class, 'pricing_page']);
Route::post('/book-a-demo', [ MetaPixelController::class, 'book_a_demo']);
Route::post('/app-download-pixel', [ MetaPixelController::class, 'app_download']);
Route::post('/contact-pixel', [ MetaPixelController::class, 'contact_pixel']);
Route::post('meta-pixel', [ MetaPixelController::class, 'metaPixel'])->name('meta.pixel');
Route::redirect('/public/docs', '/docs', 301);

//Dynamic sitemap route
Route::get('/sitemap.xml', [SitemapController::class, 'index']);




Route::get('ghl',function(){

    $custom_data = [
        'user_email' => 'test016@gmail.com',
        'first_name' => 'Premium',
        'last_name' =>'user',
        'company_name' => 'Premium plan company',
        'plan_name' => 'Premium Plan',
        'payment_type' =>'monthly',
        'plan_price' => '10',
    ];

    // add an other integration method

    $webhookUrls = [
        'Free Plan' => 'https://services.leadconnectorhq.com/hooks/pEqTH8u07uVlOrJnClOr/webhook-trigger/cef85f7f-7122-4df3-9559-62e8371533b1',
        'Basic'     => 'https://services.leadconnectorhq.com/hooks/pEqTH8u07uVlOrJnClOr/webhook-trigger/baa0e744-8f99-4dbe-a14b-91e73529340b',
        'Standard'  => 'https://services.leadconnectorhq.com/hooks/pEqTH8u07uVlOrJnClOr/webhook-trigger/745d0c1f-8260-4dad-8565-10ba2a2b210f',
        'Premium'   => 'https://services.leadconnectorhq.com/hooks/pEqTH8u07uVlOrJnClOr/webhook-trigger/51813776-0e7f-46e1-b67f-942faedd99aa',
    ];

    $planName = 'Premium';
    $url_connector = $webhookUrls[$planName] ?? null; // Default to null if the plan is not found
    if($url_connector) {
        Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post($url_connector, $custom_data);
    }



    dd('done',$url_connector);

});
