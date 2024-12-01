<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/terms', function () {
    return view('frontend.terms');
});
Route::get('/privacy', function () {
    return view('frontend.privacy');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/ourfamily', function () {
    return view('frontend.family');
});
Route::get('/print', function () {
    return view('frontend.print');
});
Route::get('/institute', function () {
    return view('frontend.institute');
});
Route::get('/staff', function () {
    return view('frontend.staff');
});
Route::get('/teacher', function () {
    return view('frontend.teacher');
});
Route::get('/mujib', function () {
    return view('frontend.mujib');
});
Route::get('/photo', function () {
    return view('frontend.photo');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/tutorial', function () {
    return view('frontend.tutorial');
});
Route::get('/oddhakhor', function () {
    return view('frontend.oddhakhor');
});
Route::get('/upodkahho', function () {
    return view('frontend.upodkahho');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'HomeController@logout')->name('user.logout');
Route::get('/password/change', 'HomeController@PasswordChange')->name('password.change');
Route::post('/update/password', 'HomeController@PasswordUpdate')->name('update.password');




//categories------------
Route::get('/categories', 'Backend\CategoryController@index')->name('categories');
Route::post('/store/categories', 'Backend\CategoryController@store')->name('store.category');
Route::get('/delete/category/{id}', 'Backend\CategoryController@destory')->name('delete.category');
Route::get('/edit/category/{id}', 'Backend\CategoryController@edit');
Route::post('/update/categories/{id}', 'Backend\CategoryController@update')->name('update.category');

//subcategory------
Route::get('/subcategories', 'Backend\SubcategoryController@index')->name('subcategories');
Route::post('/store/subcategory', 'Backend\SubcategoryController@store')->name('store.subcategory');
Route::get('/delete/subcategory/{id}', 'Backend\SubcategoryController@destory')->name('delete.subcategory');
Route::get('/edit/subcategory/{id}', 'Backend\SubcategoryController@edit');
Route::post('/update/subcategories/{id}', 'Backend\SubcategoryController@update')->name('update.subcategory');

//district---------
Route::get('/districts', 'Backend\DistrictController@distrcits')->name('district');
Route::post('/store/district', 'Backend\DistrictController@storeDistrict')->name('store.district');
Route::get('/delete/district/{id}', 'Backend\DistrictController@destorydistrict')->name('delete.district');
Route::get('/edit/district/{id}', 'Backend\DistrictController@editdistrict')->name('edit.district');
Route::post('/update/district/{id}', 'Backend\DistrictController@updatedistrict')->name('update.district');

//subdistrict
Route::get('/subdistricts', 'Backend\DistrictController@subdistrict')->name('subdistrict');
Route::post('/store/subdistricts', 'Backend\DistrictController@storesubdistrict')->name('store.subdistrict');
Route::get('/delete/subdistrict/{id}', 'Backend\DistrictController@destroysubdistrict')->name('delete.subdistrict');
Route::get('/edit/subdistrict/{id}', 'Backend\DistrictController@editsubdistrict')->name('edit.subdistrict');
Route::post('/update/subdistrict/{id}', 'Backend\DistrictController@updatesubdistrict')->name('update.subdistrict');

//user role
Route::get('/insert/writer', 'HomeController@Insert')->name('insert.writer');
Route::post('/store/writer', 'HomeController@store')->name('store.writer');
Route::get('/all/writer', 'HomeController@allWriter')->name('all.writer');
Route::get('/edit/writer/{id}', 'HomeController@edit');
Route::post('/update/writer/{id}', 'HomeController@UpdateWriter')->name('update.writer');

//json data multiple dependency
Route::get('get/subcat/{cat_id}','Backend\PostController@GetSubcat');
Route::get('get/subdist/{dist_id}','Backend\PostController@GetSubDist');

//posts routes
Route::get('/insert/post', 'Backend\PostController@create')->name('insert.post');
Route::post('/store/post', 'Backend\PostController@store')->name('store.post');
Route::get('/all/post', 'Backend\PostController@index')->name('all.post');
Route::get('/delete/post/{id}', 'Backend\PostController@destroy')->name('delete.post');
Route::get('/edit/post/{id}', 'Backend\PostController@edit')->name('edit.post');
Route::post('/update/post/{id}', 'Backend\PostController@update')->name('update.post');

//ads
Route::get('/horizontal/ads', 'Backend\AdsController@horizontal')->name('horizontal.ads');
Route::post('/store/ads', 'Backend\AdsController@store')->name('store.ads');
Route::get('/delete/ads/{id}', 'Backend\AdsController@destory')->name('delete.ads'); 

//settings
   //social setting
Route::get('/social/setting', 'Backend\SettingController@SocialSetting')->name('social.setting');
Route::post('/update/social/{id}', 'Backend\SettingController@UpdateSOcial')->name('update.social');
   //seo setting
Route::get('/seo/setting', 'Backend\SettingController@SeoSetting')->name('seo.setting');
Route::post('/update/seo/{id}', 'Backend\SettingController@UpdateSEO')->name('update.seo');
   //Namaz setting
Route::get('/namaz/setting', 'Backend\SettingController@NamazSetting')->name('namaz.setting');
Route::post('/update/namaztime/{id}', 'Backend\SettingController@Updatenamaztime')->name('update.namaztime');
 //Livetv setting
Route::get('/livetv/setting', 'Backend\SettingController@LivetvSetting')->name('livetv.setting');
Route::post('/update/livetv/{id}', 'Backend\SettingController@Updatelivetv')->name('update.livetv');
Route::get('/active/livetv/{id}', 'Backend\SettingController@ActiveLivetv')->name('active.livetv');
Route::get('/deactive/livetv/{id}', 'Backend\SettingController@DeactiveLivetv')->name('deactive.livetv');
   //notice
 Route::get('/notice/setting', 'Backend\SettingController@noticeSetting')->name('notice.setting');  
 Route::post('/update/notice/{id}', 'Backend\SettingController@UpdateNotice')->name('update.notice');
 Route::get('/active/notice/{id}', 'Backend\SettingController@ActiveNotice')->name('active.notice');
 Route::get('/deactive/notice/{id}', 'Backend\SettingController@DeactiveNotice')->name('deactive.notice');
//photo gallery
Route::get('/photo/gallery', 'Backend\GalleryController@photos')->name('photos.gallery');  
Route::post('/store/phto/gallery', 'Backend\GalleryController@storephotos')->name('store.photos'); 
Route::get('/delete/phto/gallery/{id}', 'Backend\GalleryController@destory')->name('delete.photogallery'); 
 //video gallery
 Route::get('/video/gallery', 'Backend\GalleryController@video')->name('video.gallery');  
Route::post('/store/video/gallery', 'Backend\GalleryController@storevideo')->name('store.videos'); 
Route::get('/delete/video/gallery/{id}', 'Backend\GalleryController@destoryv')->name('delete.videogallery');  
 //important website
 Route::get('/important/website', 'Backend\SettingController@importantwebsite')->name('important.website');
Route::post('/store/website', 'Backend\SettingController@StoreWebsite')->name('store.website');
Route::get('/delete/website/{id}', 'Backend\SettingController@destory')->name('delete.website');

 //website setting
Route::get('/website/setting', 'Backend\SettingController@WebsiteSetting')->name('website.setting');
Route::post('/update/websitesetting/{id}', 'Backend\SettingController@UpdateWebsite')->name('update.websitesetting');

//frontend
   //language
Route::get('/lang/english', 'Frontend\ExtraController@English')->name('lang.english');  
Route::get('/lang/bangla', 'Frontend\ExtraController@Bangla')->name('lang.bangla');  
//single post
Route::get('view-post/{id}/{slug}','Frontend\ExtraController@SinglePost');
Route::get('posts/{id}/{subcategory_bn}','Frontend\ExtraController@AllPost');
Route::get('post/{id}/{category_bn}','Frontend\ExtraController@AllPostscat');
Route::get('get/subdist/frontend/{dist_id}','Frontend\ExtraController@GetSubDist');
Route::get('saradesh/','Frontend\ExtraController@Saradesh')->name('saradesh.news');