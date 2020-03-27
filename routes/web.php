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




if(!\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\URL::current(), 'nuke360.com')) {
    Route::middleware('optimizeImages')->group(
        function () {
            Auth::routes();
            
            
            Route::get('/redirect', 'SocialAuthFacebookController@redirect');
            Route::get('/callback', 'SocialAuthFacebookController@callback');
            
            //Standard Pages
            Route::get('/', 'PageController@index')->name('pages.welcome.index');
            Route::get('/about-us', 'PageController@aboutIndex')->name('pages.about.index');
            
            //Contact Us Page
            Route::redirect('/contact', '/contact-us');
            Route::get('/contact-us', 'ContactFormController@index')->name('pages.contact.index');
            Route::post('/contact-us', 'ContactFormController@store')->name('pages.contact.store');
            
            //Portfolio
            //Portfolio
            Route::redirect('kitchen-portfolio', '/portfolio');
            Route::get('/portfolio', 'PortfolioController@index')->name('pages.portfolio.index');
            Route::get('/portfolio/{type}/{portfolio_id}/{portfolio_slug?}', 'PortfolioController@show')->name(
                'pages.portfolio.show'
            );
            
            
            //Users Routes
            Route::get('/profiles/{user_id}', 'User\UserProfileController@show')->name('users.profiles.show');
            
            //		Route::get('/storage/project_uploads/{file_name}', 'ProjectUploadController@index')->name(
            //			'project_upload.index'
            //		);
            
            
            Route::get('/home', 'HomeController@index')->name('auth.home.index');
            
            
            //News
            Route::get('/news', 'NewsController@index')->name('pages.news.index');
            Route::get('/news/{news_post_id}/{news_slug?}', 'NewsController@show')->name('pages.news.show');
            Route::post('/news/{news_post_id}/{news_slug}', 'NewsController@storeComment')->name(
                'pages.news.comments.store'
            );
            
            
            //Policies
            Route::get(
                '/cookie-policy',
                function () {
                    return view('pages.policies.cookies.index');
                }
            )->name('cookie-policy');
            
            Route::get(
                '/privacy-policy',
                function () {
                    return view('pages.policies.privacy.index');
                }
            )->name('privacy-policy');
            
            Route::get('/mail/subscribe', 'Modules\Mailchimp\MailchimpController@store');
            
            Route::post('/newsletter/subscribe/footer', 'Modules\Newsletter\SubscribeController@footerSubscribe')->name(
                'newsletter.subscribe.footer'
            );
        }
    );
}else{
    \Illuminate\Support\Facades\Route::get('/', function(){
        return view('maintenence');
    });
}
