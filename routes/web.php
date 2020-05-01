<?php


Route::group(['middleware' => ['web']], function () {
    
    Route::get('/', [
        'uses' => 'MainController@landing',
        'as' => 'home'
    ]);

    Route::get('/company', [
        'uses' => 'MainController@company',
        'as' => 'company'
    ]);

    Route::get('/clientele', [
        'uses' => 'MainController@clientele',
        'as' => 'clientele'
    ]);

    Route::get('/partner', [
        'uses' => 'MainController@partner',
        'as' => 'partner'
    ]);

    Route::get('/team', [
        'uses' => 'MainController@team',
        'as' => 'team'
    ]);

    Route::get('/services', [
        'uses' => 'MainController@service',
        'as' => 'services'
    ]);

    Route::get('/value-proposition', [
        'uses' => 'MainController@value',
        'as' => 'value-proposition'
    ]);

    Route::get('/contact', [
        'uses' => 'MainController@contact',
        'as' => 'contact'
    ]);

    Route::get('/terms', [
        'uses' => 'MainController@terms',
        'as' => 'terms'
    ]);

    Route::post('/contact', [
        'uses' => 'ContactController@contact',
        'as' => 'contact'
    ]);

    Route::get('/car-insurance-campaign', [
        'uses' => 'CampaignController@carCampaign',
        'as' => 'car-insurance-campaign'
    ]);  
    
    // New pages
    Route::get('/student-insurance-campaign', [
        'uses' => 'CampaignController@studentInsuranceCampaign',
        'as' => 'student-insurance-campaign'
    ]); 

    Route::get('/teens-insurance-campaign', [
        'uses' => 'CampaignController@teensPolicyCampaign',
        'as' => 'teens-insurance-campaign'
    ]);    
    
});


