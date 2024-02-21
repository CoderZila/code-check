<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\AuthController;

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


  /**
         * Register Routes
         */

         Route::get('/login', [AuthController::class, 'index'])->name('login');
		Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
		Route::get('/dashboard', function(){return View('admin.index');})->name('/dashboard');
		Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

		
		Route::get('/staff_augmentation', function(){return View('staffAugmentation.index');})->name('staff_augmentation');
		Route::get('/lokendra', function(){return View('staffAugmentation.lokendra');})->name('lokendra');
		Route::get('/devraj', function(){return View('staffAugmentation.devraj');})->name('devraj');
		Route::get('/job-hire-web', function(){return View('staffAugmentation.job-hire-developer');})->name('job-hire-web');
		Route::get('/ankit', function(){return View('staffAugmentation.ankit');})->name('ankit');
		Route::get('/hitesh', function(){return View('staffAugmentation.hitesh');})->name('hitesh');
		Route::get('/mahendra', function(){return View('staffAugmentation.mahendra');})->name('mahendra');
		Route::get('/rajan', function(){return View('staffAugmentation.rajan');})->name('rajan');
		Route::get('/anshul', function(){return View('staffAugmentation.anshul.index');})->name('anshul');
		Route::get('/ankur', function(){return View('staffAugmentation.ankur.index');})->name('ankur');
		Route::get('/devendra', function(){return View('staffAugmentation.devendra.index');})->name('devendra');
		Route::get('/devendra-about', function(){return View('staffAugmentation.devendra.about');})->name('devendra-about');
		Route::get('/devendra-skill', function(){return View('staffAugmentation.devendra.skill');})->name('devendra-skill');
		Route::get('/devendra-service', function(){return View('staffAugmentation.devendra.services');})->name('devendra-service');
		Route::get('/devendra-contact', function(){return View('staffAugmentation.devendra.contact');})->name('devendra-contact');
		Route::get('/devendra-work', function(){return View('staffAugmentation.devendra.work');})->name('devendra-work');

		Route::get('/', function(){return View('pages.index');})->name('/');
		Route::get('services/penetration-testing-service', function(){return redirect('/');});
		Route::get('industries', function(){return redirect('/');});
		Route::get('company', function(){return redirect('/');});
		Route::get('/index', function(){return View('pages.index');})->name('index');
		Route::get('about-us', function(){return View('pages.about-us');})->name('about-us');
		Route::get('/contact', function(){return View('pages.contact');})->name('contact');
		Route::get('/contact-us', function(){return View('pages.contact');})->name('contact-us');
		Route::get('/testimonial', function(){return View('pages.testimonial');})->name('testimonial');
		Route::get('/staff-augmentation', function(){return View('pages.staff-augmentation');})->name('staff-augmentation');
		Route::get('/become-a-partner', function(){return View('pages.become-a-partner');})->name('become-a-partner');
		Route::get('/hire-dedicated-developer', function(){return View('pages.hire-dedicated-developer');})->name('hire-dedicated-developer');
		Route::get('/our-methodology', function(){return View('pages.our-methodology');})->name('our-methodology');
		Route::get('/affiliate-program', function(){return View('pages.affiliate-program');})->name('affiliate-program');
		Route::get('/career', function(){return View('pages.career');})->name('career');
		Route::get('/portfolio', function(){return View('pages.portfolio');})->name('portfolio');
		Route::get('/seo-and-internet-marketing', function(){return View('pages.seo');})->name('seo-and-internet-marketing');
		Route::get('/digital-marketing', function(){return View('pages.digital-marketing');})->name('digital-marketing');
		Route::get('lp/digital-marketing-packages', function(){return View('pages.lp.digital-marketing-packages');})->name('lp/digital-marketing-packages');
		Route::get('/healthcare-portfolio', function(){return View('pages.healthcare-portfolio');})->name('healthcare-portfolio');
		Route::get('/foodies-portfolio', function(){return View('pages.foodies-portfolio');})->name('foodies-portfolio');
		Route::get('/e-commerce-portfolio', function(){return View('pages.e-commerce-portfolio');})->name('e-commerce-portfolio');
		Route::get('faculty-data-management', function(){return View('pages.faculty-data-management');})->name('faculty-data-management');
		Route::get('fantasy-sports-portfolio', function(){return View('pages.fantasy-sports-portfolio');})->name('fantasy-sports-portfolio');
		Route::get('elearning-portfolio', function(){return View('pages.elearning-portfolio');})->name('elearning-portfolio');
		Route::get('supplybox-portfolio', function(){return View('pages.mobile-supplybox-portfolio');})->name('supplybox-portfolio');
		Route::get('upcabs-portfolio', function(){return View('pages.mobile-upcabs-portfolio');})->name('upcabs-portfolio');
		Route::get('/patientscupid-portfolio', function(){return View('pages.patientscupid-portfolio');})->name('patientscupid-portfolio');
		Route::get('/mobile-real-estate-portfolio', function(){return View('pages.mobile-real-estate-portfolio');})->name('mobile-real-estate-portfolio');
		Route::get('/ppc', function(){return View('pages.pay-per-click');})->name('ppc');
		Route::get('/social-media-optimization', function(){return View('pages.social-media-optimization');})->name('social-media-optimization');
		Route::get('/coming-soon', function(){return View('pages.coming-soon');});
		Route::get('/blog-link', function(){return View('pages.blog_link');});
		Route::get('404-page',function () {return view('pages.404-error');});
		Route::get('thank-you',function () {return view('pages.thankyou');});
		// service pages route 
		Route::get('services/android-app-development', function(){return View('pages.services.android-development');})->name('services/android-app-development');
		Route::get('services/angular-js-development', function(){return View('pages.services.angular-development');})->name('services/angular-js-development');
		Route::get('services/codeigniter-framework-development', function(){return View('pages.services.codeIgniter-development');})->name('services/codeigniter-framework-development');
		Route::get('services/laravel-framework-development', function(){return View('pages.services.laravel-framework-development');})->name('services/laravel-framework-development');
		Route::get('services/mobile-app-development', function(){return View('pages.services.mobile-app-development');})->name('services/mobile-app-development');
		Route::get('services/php-development', function(){return View('pages.services.php-development');})->name('services/php-development');
		Route::get('services/react-native-app-development', function(){return View('pages.services.react-native-app-development');})->name('services/react-native-app-development');
		Route::get('services/blockchain-solutions', function(){return View('pages.services.blockchain-solutions');})->name('services/blockchain-solutions');
		Route::get('services/artificial-intelligence-solutions', function(){return View('pages.services.artificial-intelligence-solutions');})->name('services/artificial-intelligence-solutions');
		Route::get('services/cross-platform-mobile-app-development', function(){return View('pages.services.cross-platform-app-development');})->name('services/cross-platform-mobile-app-development');
		Route::get('services/open-source-software-development', function(){return View('pages.services.open-source-software-development');})->name('services/open-source-software-development');
		Route::get('services/django-python-development', function(){return View('pages.services.django-python-development');})->name('services/django-python-development');
		Route::get('services/cakephp-framework-development', function(){return View('pages.services.cakephp-development');})->name('services/cakephp-framework-development');
		Route::get('services/web-app-development', function(){return View('pages.services.web-app-development');})->name('services/web-app-development');
		Route::get('services/ruby-on-rails-development', function(){return View('pages.services.ruby-on-rails-development');})->name('services/ruby-on-rails-development');
		Route::get('services/symfony-framework-development', function(){return View('pages.services.symfony-framework-development');})->name('services/symfony-framework-development');
		Route::get('services/wordpress-development', function(){return View('pages.services.wordpress-development');})->name('services/wordpress-development');
		Route::get('services/ui-ux-development', function(){return View('pages.services.ui-ux-development');})->name('services/ui-ux-development');
		Route::get('services/yii-framework-development', function(){return View('pages.services.yii-app-development');})->name('services/yii-framework-development');
		Route::get('services/ios-application-development', function(){return View('pages.services.ios-app-development');})->name('services/ios-application-development');
		Route::get('services/vue-js-development', function(){return View('pages.services.vue-js-development');})->name('services/vue-js-development');
		Route::get('services/progressive-web-app-development', function(){return View('pages.services.progressive-web-app-development');})->name('services/progressive-web-app-development');
		Route::get('services/ionic-app-development', function(){return View('pages.services.ionic-app-development');})->name('services/ionic-app-development');
		Route::get('services/node-js-development', function(){return View('pages.services.node-js-development');})->name('services/node-js-development');
		Route::get('services/nodejs-development', function(){return redirect('services/node-js-development');});
		Route::get('services/magento-development', function(){return View('pages.services.magento-development');})->name('services/magento-development');
		Route::get('services/kotlin-app-development', function(){return View('pages.services.kotlin-app-development');})->name('services/kotlin-app-development');
		Route::get('services/flutter-app-development', function(){return View('pages.services.flutter-app-development');})->name('services/flutter-app-development');
		Route::get('services/front-end-development', function(){return View('pages.services.frontend-technologies');})->name('services/front-end-development');
		Route::get('services/cloud-devops-solutions', function(){return View('pages.services.cloud-devops-solutions');})->name('services/cloud-devops-solutions');
		Route::get('services/react-js-development', function(){return View('pages.services.react-development');})->name('services/react-js-development');
		//  Route::get('services/frontend-technologies', function(){return View('pages.services.frontend-technologies');})->name('services/frontend-technologies');
		// industries pages route
		Route::get('industries/ecommerce-solutions', function(){return View('pages.industries.e-commerce');})->name('industries/ecommerce-solutions');
		Route::get('industries/retail-software-solutions', function(){return redirect('industries/ecommerce-solutions');});
		Route::get('industries/online-classroom-e-learning-solutions', function(){return View('pages.industries.e-learning');})->name('industries/online-classroom-e-learning-solutions');
		Route::get('industries/real-estate-software', function(){return View('pages.industries.real-estate');})->name('industries/real-estate-software');
		Route::get('industries/social-networking-solutions', function(){return View('pages.industries.social-media-solution');})->name('industries/social-networking-solutions');
		Route::get('industries/travel-app-development', function(){return View('pages.industries.travel-and-tour');})->name('industries/travel-app-development');
		Route::get('industries/hotel-booking-flight-booking', function(){return View('pages.industries.hotel-and-hospitality');})->name('industries/hotel-booking-flight-booking');
		Route::get('industries/supply-chain-management', function(){return View('pages.industries.supply-chain-management');})->name('industries/supply-chain-management');
		Route::get('industries/health-record-management', function(){return View('pages.industries.healthcare');})->name('industries/health-record-management');
		Route::get('industries/hris', function(){return View('pages.industries.human-resource');})->name('industries/hris');

		//hire developer 
		Route::get('hire-php-developer', function(){return View('pages.hire-developer.hire-php-developer');})->name('hire-php-developer');
		Route::get('hire-laravel-developer', function(){return View('pages.hire-developer.hire-laravel-developer');})->name('hire-laravel-developer');
		Route::get('hire-ui-ux-developer', function(){return View('pages.hire-developer.hire-ui-ux-developer');})->name('hire-ui-ux-developer');
		Route::get('hire-frontend-developer', function(){return View('pages.hire-developer.hire-frontend-developer');})->name('hire-frontend-developer');
		Route::get('hire-java-developer', function(){return View('pages.hire-developer.hire-java-developer');})->name('hire-java-developer');
		Route::get('hire-android-developer', function(){return View('pages.hire-developer.hire-android-developer');})->name('hire-android-developer');
		Route::get('hire-ios-developer', function(){return View('pages.hire-developer.hire-ios-developer');})->name('hire-ios-developer');
		Route::get('hire-web-app-developer', function(){return View('pages.hire-developer.hire-web-app-developer');})->name('hire-web-app-developer');




		// controller routes
		Route::post('slug',[ApiController::class, 'index']);
		Route::post('contact_store',[ContactController::class, 'store'])->name('contact_store');
		Route::post('contact_us',[ContactController::class, 'contact_us_store'])->name('contact_us');
		Route::post('candidatecontactus',[ContactController::class, 'candidate_contact_us_store'])->name('candidatecontactus');
		Route::post('customer-contact-us',[ContactController::class, 'customer_store'])->name('customer-contact-us');
		Route::post('lead-store',[ContactController::class, 'store_lead'])->name('lead-store');
		Route::any('{query}', function() { return redirect('404-page'); })->where('query', '.*');

