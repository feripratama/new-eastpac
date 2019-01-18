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

/* Landing Page */
Route::get('/', function () {
    // money_format('%(#10n', $number)

    $dshare_target = (int)App\SiteConfig::config('TOTAL_DSHARE_TARGET');
    $dshare_sold = (int)App\SiteConfig::config('TOTAL_DSHARE_SOLD');

    if($dshare_target <= 0 || $dshare_sold <= 0) {
        $dshare_persentase_progress_bar = 0;
    } else {
        $dshare_persentase_progress_bar = number_format((float)(App\SiteConfig::config('TOTAL_DSHARE_SOLD') / (int)App\SiteConfig::config('TOTAL_DSHARE_TARGET')) * 100, 2, '.', '');
    }

    if(env('COMING_SOON')){
        return view('coming_soon.index');
    }else{
        return view('landingpage.index', compact('dshare_persentase_progress_bar', 'dshare_target', 'dshare_sold'));
    }

})->name('welcome');

Route::get('/faq', function () {
    return view('landingpage.faq');
})->name('faq');

Route::get('/contact-us', function () {
    return view('landingpage.contactus');
})->name('contactus');

Route::get('/about', function () {
    return view('landingpage.about');
})->name('about');


// Auth::routes();

// after
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::middleware(['auth', 'verified'])->prefix('home')->group(function() {
    // home route
    Route::get('contribution','HomeController@contribution')->name('home.contribution');
    Route::get('transaction','HomeController@transaction')->name('home.transaction');
    Route::get('referral','HomeController@referral')->name('home.referral');
    Route::get('kycapp','HomeController@kycapp')->name('home.kycapp');
    Route::get('security','SecurityController@index')->name('home.security');
    Route::get('kycapp-form','KycController@index')->name('home.kycapp.form');
    Route::post('kycapp-form','KycController@store')->name('home.kycapp.store');
    Route::get('d-share', 'HomeController@dshareIndex')->name('home.dshare');

    // referral
    Route::post('/referral/store', 'ReferralController@store')->name('home.referral.store');

    //contribution
    Route::post('/contribution/process', 'HomeController@contributionAction')->name('home.contribution.process');

    /** Activity Log */
    Route::post('/security/update/activityLog', 'SecurityController@activityLog')->name('home.security.activityLog');

    // Route::post('/security/update/password-change', 'SecurityController@passwordChange')->name('home.security.passwordChange');

    // Route::post('/security/update/token-with-draw', 'SecurityController@tokenWithDraw')->name('home.security.tokenWithDraw');
});

// member
Route::middleware(['auth', 'verified'])->prefix('setting')->group(function() {
    // profiel
    Route::get('profile','ProfileController@index')->name('profileIndex');
    Route::post('profile/full-name-save-edit', 'ProfileController@update')->name('profileUpdate');
    Route::post('profile/change-password-save', 'ProfileController@updatePassword')->name('profileUpdatePassword');
    Route::post('profile/upload', 'ProfileController@updateProfile')->name('profileUpload');
    Route::post('profile/userwallet','ProfileController@UserWallet' )->name('UserWallet');
    Route::post('profile/useraccount','ProfileController@UserAccounts')->name('UserAccounts');
    Route::post('profile/updateprofile', 'ProfileController@UpdatePersonalProfile')->name('updatePersonalProfile');
});

// administrator
Route::middleware(['auth','role:administrator'])->prefix('administrator')->group(function() {
    // manage user
    Route::get('/manage-user', 'AdministratorController@manageUser')->name('admin.usermanage');
    Route::get('/manage-user/show/{id}', 'AdministratorController@manageUserShow')->name('admin.usermanage.show');

    // role
    Route::post('manage-user/add-role-to/{id}', 'AdministratorController@addRoleTo')->name('admin.usermanage.addRoleTo');
    Route::get('/manage-user/remove-role-from/{id}/{role_name}', 'AdministratorController@removeRole')->name('admin.usermanage.removeRole');

    // permission
    Route::post('/manage-user/add-permission-to/{id}', 'AdministratorController@addPermissionTo')->name('admin.usermanage.addPermissionTo');
    Route::get('/manage-user/remove-permission-from/{id}/{permission_name}', 'AdministratorController@removePermission')->name('admin.usermanage.removePermission');

    // site config
    Route::get('/site-config', 'AdministratorController@configIndex')->name('admin.config.index');
    Route::post('/site-config/save-edit-config', 'AdministratorController@updateConfigValue')->name('admin.config.update');

    // manage menu
    Route::get('/manage-menu', 'AdministratorController@manageMenu')->name('admin.managemenu');
    Route::get('/manage-menu/show/{id}', 'AdministratorController@manageMenuShow')->name('admin.managemenu.show');
    Route::post('/manage-menu/update-menu/{id}', 'AdministratorController@updateMenu')->name('admin.managemenu.update');
    Route::get('/manage-menu/create-submenu/{parent_id}', 'AdministratorController@createSubMenu')->name('admin.managemenu.addsubmenu');
    Route::get('/manage-menu/create', 'AdministratorController@createMenu')->name('admin.managemenu.addmenu');
    Route::delete('/manage-menu/destroy-submenu/{parent_id}/{submenu_id}', 'AdministratorController@destroySubMenu')->name('admin.managemenu.destroysubmenu');
    Route::delete('/manage-menu/destroy-menu/{id}', 'AdministratorController@destroyMenu')->name('admin.managemenu.destroymenu');
    Route::post('/manage-menu/store-submenu/{parent_id}', 'AdministratorController@storeSubMenu')->name('admin.managemenu.storesubmenu');
    Route::post('/manage-menu/store-menu', 'AdministratorController@storeMenu')->name('admin.managemenu.storemenu');

    // bounty
    Route::get('/bounty', 'AdministratorController@bountyIndex')->name('admin.bounty');
    Route::post('/bounty/approve', 'AdministratorController@bountyApprove')->name('admin.bounty.approve');

    //White Paper
    Route::get('/white-paper', 'WhitePaperController@index')->name('whitePaper.index');
    Route::get('/white-paper/create', 'WhitePaperController@create')->name('whitePaper.create');
    Route::post('/white-paper/store', 'WhitePaperController@store')->name('whitePaper.store');
    Route::post('white-paper/upload', 'WhitePaperController@upload')->name('uploadWhitePaper');
    Route::get('/white-paper/edit/{id}', 'WhitePaperController@edit')->name('whitePaper.edit');
    Route::post('/white-paper/update/{id}', 'WhitePaperController@update')->name('whitePaper.update');
    Route::get('white-paper/delete/{id}', 'WhitePaperController@destroy')->name('WhitePaper.delete');

    //Images
    Route::get('/images', 'ImageController@index')->name('images.index');
    Route::get('/images/create', 'ImageController@create')->name('images.create');
    Route::post('/images/store', 'ImageController@store')->name('images.store');
    Route::post('images/upload', 'ImageController@upload')->name('images.upload');
    Route::get('/images/edit/{id}', 'ImageController@edit')->name('images.edit');
    Route::post('/images/update/{id}', 'ImageController@update')->name('images.update');
    Route::get('images/delete/{id}', 'ImageController@destroy')->name('images.destroy');
});

Route::middleware(['auth','role:administrator'])
    ->prefix('edit-landing-page-content')->group(function() {
        Route::put('/save', 'LandingPageContentController@update')->name('editcontent.update');
});

Route::get('/api',"GuzzleController@index")->middleware('auth');

Route::get('/api/transfer/{from}/{to}/{total_transfer}', function($from, $to, $total_transfer){
    // $from_uid = App\UserWallet::where('wallet_address', $from)->first()->user_id;


    // if($to == '0xb2a122ed4A1903fe3FF587A13Cb8A95a052851aA') {
    //     App\Dshare::create([
    //         'user_id' => $from_uid,
    //         'dshare'=> $total_transfer
    //     ]);

    //     App\UserTokenBalance::where('user_id', $from_uid)->update([
    //         'east_balance' => App\UserTokenBalance::where('user_id', $from_uid)->first()->east_balance - $total_transfer
    //     ]);
    // } else {
    //     $to_uid = App\UserWallet::where('wallet_address', $to)->first()->user_id;

    //     App\UserTokenBalance::where('user_id', $from_uid)->update([
    //         'east_balance' => App\UserTokenBalance::where('user_id', $from_uid)->first()->east_balance - $total_transfer
    //     ]);

    //     App\UserTokenBalance::where('user_id', $to_uid)->update([
    //         'east_balance' => App\UserTokenBalance::where('user_id', $to_uid)->first()->east_balance + $total_transfer
    //     ]);
    // }

    $from_uid = App\UserWallet::where('wallet_address', $from);
    $to_uid = App\UserWallet::where('wallet_address', $to);

    $from_user_token = App\UserTokenBalance::where('user_id', $from_uid->first()->user_id);

    if($from_user_token->first()->east_balance < $total_transfer) {
        $ret = [
            'status' => 500,
            'msg' => "East Token not enough",
        ];
    } else {
        if($total_transfer <= 0) {
            $ret = [
                'status' => 500,
                'msg' => "East Token not enough",
            ];
        } else {
            App\UserTokenBalance::where('user_id', $from_uid->first()->user_id)->decrement('east_balance', $total_transfer);
            App\UserTokenBalance::where('user_id', $to_uid->first()->user_id)->increment('east_balance', $total_transfer);
            $ret = [
                'status' => 200,
                'msg' => "Transaction success",
            ];
        }
    }

    return response()->json($ret);


});

Route::middleware('throttle:50,1')->get('test', function() {
    dd(thottler()->check());
});

Route::get('test-param/{param}', function($param){
    echo json_decode(testApi($param))->param;
});

Route::get('get-east-balance/{wa}/{pk}', function($wa, $pk){
    echo json_decode(getEastBalance('http://api.eastpac.local/api/get-balance', $wa, $pk))->value;
});


Route::get('send-member-to-member/{from}/{pk_from}/{to}/{send_value}', function($from, $pk_from, $to, $send_value){
    echo transferMemberToMember('http://api.eastpac.local/api/send-member-to-member', $from, $pk_from, $to, $send_value);
});
