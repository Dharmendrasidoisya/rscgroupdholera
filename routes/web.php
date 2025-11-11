<?php

use Illuminate\Support\Facades\Route;
use Database\Seeders\AdminSedder;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\MasterformController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function(){
    
});

route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        //login route
        Route::get('/','AuthenticatedSessionController@create')->name('login');
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');
         // start Reseate password...

            Route::get('forget-password','ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');
            Route::post('forget-password','ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post');
            Route::get('reset-password/{token}','ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');
            Route::post('reset-passwords/{token}','ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');
            
    // End Reseate password...

    // password ...
   
        
    });

   

    Route::middleware('admin')->group(function(){
        //Profile route...
        // Route::get('profileindex','Auth\PasswordResetLinkController@index')->name('profileindex');
        // Route::get('forgot-password','Auth\PasswordResetLinkController@create')->name('forgot.password');
        // Route::post('forgot-password-show','Auth\PasswordResetLinkController@show')->name('forgot.store');
        // Route::post('password-update','Auth\PasswordResetLinkController@update')->name('forgot.update');



        Route::get('dashboard2','HomeController@index')->name('dashboard2');
        Route::get('dashboard','HomeController@create')->name('dashboard');
        // company route...
        Route::get('company','CompanyController@index')->name('companycreate');
        Route::post('company','CompanyController@store')->name('companystore');
        Route::get('companylist','CompanyController@show')->name('companylist');
        Route::get('companyedit/{id}','CompanyController@edit')->name('companyedit');
        Route::post('companyupdate/{id}','CompanyController@update')->name('companyupdate');
        Route::get('companyview/{id}','CompanyController@view')->name('companyview');
        Route::get('companydestroy/{id}','CompanyController@destroy')->name('companydestroy');

        Route::post('company/update-status', 'CompanyController@update_status')->name('companystatus');

        // Aboutslider route...
        Route::get('slider','SlidrController@create')->name('slider.create');
        Route::post('slider','SlidrController@store')->name('slider.store');
        Route::get('slider/index','SlidrController@index')->name('slider.index');
        Route::get('slider/edit/{id}','SlidrController@edit')->name('slider.edit');
        Route::post('slider/update/{id}','SlidrController@update')->name('slider.update');
        Route::get('slider/update/{id}','SlidrController@show')->name('slider.show');
        Route::get('slider/destroy/{id}','SlidrController@destroy')->name('slider.destroy');
        Route::post('slider/update_status','SlidrController@update_status')->name('slider.update_status');
        // AboutEditslider route...
        Route::get('sliderediter','AboutediterSlidrController@create')->name('sliderediter.create');
        Route::post('sliderediter','AboutediterSlidrController@store')->name('sliderediter.store');
        Route::get('sliderediter/index','AboutediterSlidrController@index')->name('sliderediter.index');
        Route::get('sliderediter/edit/{id}','AboutediterSlidrController@edit')->name('sliderediter.edit');
        Route::post('sliderediter/update/{id}','AboutediterSlidrController@update')->name('sliderediter.update');
        Route::get('sliderediter/update/{id}','AboutediterSlidrController@show')->name('sliderediter.show');
        Route::get('sliderediter/destroy/{id}','AboutediterSlidrController@destroy')->name('sliderediter.destroy');
        Route::post('sliderediter/update_status','AboutediterSlidrController@update_status')->name('sliderediter.update_status');


        // ClientLogo  route...
        Route::get('logo','ClientLogoController@create')->name('logo.create');
        Route::post('logo','ClientLogoController@store')->name('logo.store');
        Route::get('logo/index','ClientLogoController@index')->name('logo.index');
        Route::get('logo/edit/{id}','ClientLogoController@edit')->name('logo.edit');
        Route::post('logo/update/{id}','ClientLogoController@update')->name('logo.update');
        Route::get('logo/update/{id}','ClientLogoController@show')->name('logo.show');
        Route::get('logo/destroy/{id}','ClientLogoController@destroy')->name('logo.destroy');
        Route::post('logo/update_status','ClientLogoController@update_status')->name('logo.update_status');

        // category route...
        // Route::get('category',[CategoryController::class,'index'])->name('categorycreatee');
        Route::get('category','CategoryController@create')->name('categorycreate');
        Route::post('category','CategoryController@store')->name('categorystore');
        Route::get('categoryshow','CategoryController@show')->name('categoryshow');
        Route::get('categoryedit/{id}','CategoryController@edit')->name('categoryedit');
        Route::post('categoryupdate/{id}','CategoryController@update')->name('categoryupdate');
        Route::get('categoryview/{id}','CategoryController@view')->name('categoryview');
        Route::get('destroy/{id}','CategoryController@destroy')->name('destroy');

        Route::post('category/update-status', 'CategoryController@update_status')->name('categorystatus');
        // Menu route...
        Route::get('menu','MenuController@index')->name('menucreate');
        Route::post('menu','MenuController@store')->name('menustore');
        Route::get('menushow','MenuController@show')->name('menushow');
        Route::get('menuedit/{id}','MenuController@edit')->name('menuedit');
        Route::post('menuupdate/{id}','MenuController@update')->name('menuupdate');
        Route::get('menuview/{id}','MenuController@view')->name('menuview');
        Route::get('menudestroy/{id}','MenuController@destroy')->name('menudestroy');
        Route::post('menu/update-status', 'MenuController@update_status')->name('menu.status');

        // Product route...
        // Route::get('productcreate',[ProductController::class,'index'])->name('productcreate');
        Route::get('productcreate','ProductController@create')->name('productcreate');
        Route::post('productstore','ProductController@store')->name('productstore');
        Route::get('productshow','ProductController@show')->name('productshow');
        Route::get('productedit/{id}','ProductController@edit')->name('productedit');
        Route::post('productupdate/{id}','ProductController@update')->name('productupdate');
        Route::get('productdestroy/{id}','ProductController@destroy')->name('productdestroy');
        Route::get('productview/{id}','ProductController@view')->name('productview');
        //Route::post('/upload','ProductController@uploadimage')->name('ckeditor.upload');
		Route::post('ckeditor/upload', 'BlogController@ckupload')->name('ckeditor.upload');
        Route::get('changeStatus', 'ProductController@changeStatus');
        Route::get('select-destroy','ProductController@DeletCheackedStudent')->name('protecteddestory');
        
        Route::post('product/delete', 'ProductController@delete')->name('deletess');
        Route::post('product/update-status', 'ProductController@update_status')->name('status');

        // Brand route...
        Route::get('brandcreate','BrandController@index')->name('brandcreate');
        Route::post('brandstore','BrandController@store')->name('brandstore');
        Route::get('brandshow','BrandController@show')->name('brandshow');
        Route::get('brandedit/{id}','BrandController@edit')->name('brandedit');
        Route::post('brandupdate/{id}','BrandController@update')->name('brandupdate');
        Route::get('branddestroy/{id}','BrandController@destroy')->name('branddestroy');
        Route::get('brandview/{id}','BrandController@view')->name('brandview');

        Route::post('brand/update-status', 'BrandController@update_status')->name('brandstatus');

        // Blog route...

        Route::get('blogcreate','BlogController@create')->name('blogcreate');
        Route::post('blogstore','BlogController@store')->name('blogstore');
        Route::get('blogindex','BlogController@index')->name('blogindex');
        Route::get('blogedit/{id}','BlogController@edit')->name('blogedit');
        Route::post('blogupdate/{id}','BlogController@update')->name('blogupdate');
        Route::get('blogdestroy/{id}','BlogController@destroy')->name('blogdestroy');
        Route::get('blogview/{id}','BlogController@show')->name('blogshow');
        Route::post('blog/update-status', 'BrandController@update_status')->name('blogstatus');

        // Testimonial Route...

        Route::get('testimonialcreate','TestimonialController@create')->name('testimonialcreate');
        Route::post('testimonialstore','TestimonialController@store')->name('testimonialstore');
        Route::get('testimonialindex','TestimonialController@index')->name('testimonialindex');
        Route::get('testimonialedit/{id}','TestimonialController@edit')->name('testimonialedit');
        Route::post('testimonialupdate/{id}','TestimonialController@update')->name('testimonialupdate');
        Route::get('testimonialdestroy/{id}','TestimonialController@destroy')->name('testimonialdestroy');
        Route::get('testimonialview/{id}','TestimonialController@show')->name('testimonialshow');
        Route::post('testimonial/update-status', 'TestimonialController@update_status')->name('testimonialstatus');

         // News route...

         Route::get('newscreate','NewsController@create')->name('newscreate');
         Route::post('newsstore','NewsController@store')->name('newsstore');
         Route::get('newsindex','NewsController@index')->name('newsindex');
         Route::get('newsedit/{id}','NewsController@edit')->name('newsedit');
         Route::post('newsupdate/{id}','NewsController@update')->name('newsupdate');
         Route::get('newsdestroy/{id}','NewsController@destroy')->name('newsdestroy');
         Route::get('newsview/{id}','NewsController@show')->name('newsshow');
         Route::post('news/update-status', 'NewsController@update_status')->name('newsstatus');

        // SubCategory route...
        // Route::get('subcategorycreate',[SubCategoryController::class,'index'])->name('subcategorycreate');
        Route::get('subcategorycreate','SubCategoryController@create')->name('subcategorycreate');
        Route::post('subcategorystore','SubCategoryController@store')->name('subcategorystore');
        Route::get('subcategoryshow','SubCategoryController@show')->name('subcategoryshow');
        Route::get('subcategoryedit/{id}','SubCategoryController@edit')->name('subcategoryedit');
        Route::post('subcategoryupdate/{id}','SubCategoryController@update')->name('subcategoryupdate');
        Route::get('subcategorydestroy/{id}','SubCategoryController@destroy')->name('subcategorydestroy');
        Route::get('subcategoryview/{id}','SubCategoryController@view')->name('subcategoryview');

        // profile route...
        Route::get('/profile','ProfileController@index')->name('profile');
        Route::post('profilestore','ProfileController@store')->name('profilestore');
        Route::get('profileshow','ProfileController@show')->name('profileshow');
        Route::get('profileedit/{id}','ProfileController@edit')->name('profileedit');
        Route::post('profileupdate/{id}','ProfileController@update')->name('profileupdate');
        Route::get('profiledestroy/{id}','ProfileController@destroy')->name('profiledestroy');
        Route::get('profileview/{id}','ProfileController@view')->name('profileview');

        // Gallery route...
        Route::get('gallery','GalleryController@create')->name('gallerycreate');
        Route::post('gallerystore','GalleryController@store')->name('gallerystore');
        Route::get('galleryshow','GalleryController@show')->name('galleryshow');
        Route::get('galleryedit/{id}','GalleryController@edit')->name('galleryedit');
        Route::post('galleryupdate/{id}','GalleryController@update')->name('galleryupdate');
        Route::get('gallerydestroy/{id}','GalleryController@destroy')->name('gallerydestroy');
        Route::get('galleryview/{id}','GalleryController@view')->name('galleryview');
        Route::post('gallery/update-status', 'GalleryController@update_status')->name('gallerystatus');

        // Gallery route...
        Route::get('project','ProjectsImageController@create')->name('project.create');
        Route::post('projectstore','ProjectsImageController@store')->name('project.store');
        Route::get('projectshow','ProjectsImageController@show')->name('project.show');
        Route::get('projectedit/{id}','ProjectsImageController@edit')->name('project.edit');
        Route::post('projectupdate/{id}','ProjectsImageController@update')->name('project.update');
        Route::get('projectdestroy/{id}','ProjectsImageController@destroy')->name('project.destroy');
        Route::get('projectview/{id}','ProjectsImageController@view')->name('project.view');
        Route::post('project/update-status', 'ProjectsImageController@update_status')->name('project.status');

         // Gallery route...
         Route::get('dholarcity','DholarCityImagController@create')->name('dholarcitycreate');
         Route::post('dholarcitystore','DholarCityImagController@store')->name('dholarcitystore');
         Route::get('dholarcityshow','DholarCityImagController@show')->name('dholarcityshow');
         Route::get('dholarcityedit/{id}','DholarCityImagController@edit')->name('dholarcityedit');
         Route::post('dholarcityupdate/{id}','DholarCityImagController@update')->name('dholarcityupdate');
         Route::get('dholarcitydestroy/{id}','DholarCityImagController@destroy')->name('dholarcitydestroy');
         Route::get('dholarcityview/{id}','DholarCityImagController@view')->name('dholarcityview');
         Route::post('dholarcity/update-status', 'DholarCityImagController@update_status')->name('dholarcitystatus');

        // Masteruser route...
        Route::get('masteruser','MasterUserController@index')->name('useradd');
        Route::get('masterlist','MasterUserController@show')->name('userlist');
        Route::post('masterstore','MasterUserController@store')->name('userstore');
        Route::get('masteredit/{id}','MasterUserController@edit')->name('useredit');
        Route::post('masterupdate/{id}','MasterUserController@update')->name('userupdate');

        // About route...
        Route::get('aboutcreate','AboutController@index')->name('aboutcreate');
        Route::post('aboutstore','AboutController@store')->name('aboutstore');
        Route::get('aboutshow','AboutController@show')->name('aboutshow');
        Route::get('aboutedit/{id}','AboutController@edit')->name('aboutedit');
        Route::post('aboutupdate/{id}','AboutController@update')->name('aboutupdate');
        Route::get('aboutdestroy/{id}','AboutController@destroy')->name('aboutdestroy');
        Route::get('aboutview/{id}','AboutController@view')->name('aboutview');

        Route::post('about/update-status', 'AboutController@update_status')->name('aboutstatus');

         // Gallery Title...
         Route::get('gtitlecreate','GalleryTitleController@index')->name('gtitlecreate');
         Route::post('gtitlestore','GalleryTitleController@store')->name('gtitlestore');
         Route::get('gtitleshow','GalleryTitleController@show')->name('gtitleshow');
         Route::get('gtitleedit/{id}','GalleryTitleController@edit')->name('gtitleedit');
         Route::post('gtitleupdate/{id}','GalleryTitleController@update')->name('gtitleupdate');
         Route::get('gtitlestroy/{id}','GalleryTitleController@destroy')->name('gtitledestroy');
         Route::get('gtitleview/{id}','GalleryTitleController@view')->name('gtitleview');

         Route::post('gtitle/update-status', 'GalleryTitleController@update_status')->name('gtitlestatus');

         // Social Medias Title...
         Route::get('socialcreate','SocialMediasController@index')->name('socialcreate');
         Route::post('socialstore','SocialMediasController@store')->name('socialstore');
         Route::get('socialshow','SocialMediasController@show')->name('socialshow');
         Route::get('socialedit/{id}','SocialMediasController@edit')->name('socialedit');
         Route::post('socialupdate/{id}','SocialMediasController@update')->name('socialupdate');
         Route::get('socialstroy/{id}','SocialMediasController@destroy')->name('socialdestroy');
         Route::get('socialview/{id}','SocialMediasController@view')->name('socialview');

         Route::post('social/update-status', 'SocialMediasController@update_status')->name('socialstatus');
         
        // Application route...
        Route::get('applictioncreate','ApplicationController@create')->name('applictioncreate');
        Route::post('applictionstore','ApplicationController@store')->name('applictionstore');
        Route::get('applictionshow','ApplicationController@show')->name('applictionshow');
        Route::get('applictionedit/{id}','ApplicationController@edit')->name('applictionedit');
        Route::post('applictionupdate/{id}','ApplicationController@update')->name('applictionupdate');
        Route::get('applictiondestroy/{id}','ApplicationController@destroy')->name('applictiondestroy');
        Route::get('applictionview/{id}','ApplicationController@view')->name('applictionview');

        Route::post('appliction/update-status', 'ApplicationController@update_status')->name('applicationstatus');

            // Plot route...
            Route::get('plots','PlotController@index')->name('plots');
        // SEO route...
                // Other route..
            Route::get('seocreate','OtherSEOController@create')->name('seo.create');
            Route::post('seostore','OtherSEOController@store')->name('seo.seostore');
            Route::get('seoindex','OtherSEOController@index')->name('seo.seoindex');
            Route::get('seoedit/{id}','OtherSEOController@edit')->name('seo.seoedit');
            Route::post('seoupdate/{id}','OtherSEOController@update')->name('seo.other.update');
            Route::get('seodestroy/{id}','OtherSEOController@destroy')->name('seo.seodestroy');
            Route::get('seoshow/{id}','OtherSEOController@show')->name('seo.seoshow');
            Route::post('other/update-status', 'OtherSEOController@update_status')->name('sec.other');
             // Other route..
            Route::get('seocategory','CategorySEOController@create')->name('seo.category');
            Route::post('seo/category','CategorySEOController@store')->name('seo.categorystore');
            Route::get('seocategoryindex','CategorySEOController@index')->name('seo.categoryindex');
            Route::get('seo/categoryedit/{id}','CategorySEOController@edit')->name('seo.categoryedit');
            Route::post('seo/categoryupdate/{id}','CategorySEOController@update')->name('seo.categoryupdate');
            Route::get('seo/categorydestroy/{id}','CategorySEOController@destroy')->name('seo.categorydestroy');
            Route::get('seo/categoryshow/{id}','CategorySEOController@show')->name('seo.categoryshow');
            Route::post('seo/category/update-status', 'CategorySEOController@update_status')->name('seo.category.status');
             // gallery seo route..
            Route::get('seogallery','GallerySeoController@create')->name('seo.gallery');
            Route::post('seo/gallery','GallerySeoController@store')->name('seo.gallerystore');
            Route::get('seogalleryindex','GallerySeoController@index')->name('seo.galleryindex');
            Route::get('seo/galleryedit/{id}','GallerySeoController@edit')->name('seo.galleryedit');
            Route::post('seo/galleryupdate/{id}','GallerySeoController@update')->name('seo.galleryupdate');
            Route::get('seo/gallerydestroy/{id}','GallerySeoController@destroy')->name('seo.gallerydestroy');
            Route::get('seo/galleryshow/{id}','GallerySeoController@show')->name('seo.galleryshow');
            Route::post('seo/gallery/update-status', 'GallerySeoController@update_status')->name('seo.gallery.status');
            // Other newsSeo route..
            Route::get('seonews','SeoNewsController@create')->name('seo.news');
            Route::post('seo/news','SeoNewsController@store')->name('seo.newsstore');
            Route::get('seonewsindex','SeoNewsController@index')->name('seo.newsindex');
            Route::get('seo/newsedit/{id}','SeoNewsController@edit')->name('seo.newsedit');
            Route::post('seo/newsupdate/{id}','SeoNewsController@update')->name('seo.newsupdate');
            Route::get('seo/newsdestroy/{id}','SeoNewsController@destroy')->name('seo.newsdestroy');
            Route::get('seo/newsshow/{id}','SeoNewsController@show')->name('seo.newsshow');
            Route::post('seo/news/update-status', 'SeoNewsController@update_status')->name('seo.news.status');
             // SeoIndustries Route..
            Route::get('seoindustries','SeoIndustriesController@create')->name('seo.industries');
            Route::post('seo/industries','SeoIndustriesController@store')->name('seo.industriesstore');
            Route::get('seoindustriesindex','SeoIndustriesController@index')->name('seo.industriesindex');
            Route::get('seo/industriesedit/{id}','SeoIndustriesController@edit')->name('seo.industriesedit');
            Route::post('seo/industriesupdate/{id}','SeoIndustriesController@update')->name('seo.industriesupdate');
            Route::get('seo/industriesdestroy/{id}','SeoIndustriesController@destroy')->name('seo.industriesdestroy');
            Route::get('seo/industriesshow/{id}','SeoIndustriesController@show')->name('seo.industriesshow');
            Route::post('seo/industries/update-status', 'SeoIndustriesController@update_status')->name('seo.industries.status');

            
            // subcategorySEO route.. 
            Route::get('seosubcategory','SubCatagerySEOController@create')->name('seo.subcategory');
            Route::get('seo/subindex','SubCatagerySEOController@index')->name('seo.subindex');
            Route::post('seo/store','SubCatagerySEOController@store')->name('seo.store');
            Route::get('seo/edit/{id}','SubCatagerySEOController@edit')->name('seo.edit');
            Route::post('seo/update/{id}','SubCatagerySEOController@update')->name('seo.update');
            Route::get('seo/show/{id}','SubCatagerySEOController@show')->name('seo.show');
            Route::get('seo/destroy/{id}','SubCatagerySEOController@destroy')->name('seo.destroy');
            Route::get('seo/update/{id}','SubCatagerySEOController@update')->name('seo.update');
            Route::post('seo/product/update-status', 'SubCatagerySEOController@update_status')->name('seo.product.status');

            // productSEO route.. 
            Route::get('seoproduct','ProductSEOController@create')->name('seo.product');
            Route::get('seo/productindex','ProductSEOController@index')->name('seo.productindex');
            Route::post('seo/product','ProductSEOController@store')->name('seo.storeproduct');
            Route::get('seo/editproduct/{id}','ProductSEOController@edit')->name('seo.edit.product');
            Route::post('seo/updateproduct/{id}','ProductSEOController@update')->name('seo.update.product');
            Route::get('seo/showproduct/{id}','ProductSEOController@show')->name('seo.show.product');
            Route::get('seo/destroyproduct/{id}','ProductSEOController@destroy')->name('seo.destroy.product');
            
            Route::post('seo/seoproduct/update-status', 'ProductSEOController@update_status')->name('seo.seoproduct.status');

            // FindLand Route
            Route::get('findlandindex','FindLandController@index')->name('findlandindex');
            Route::get('findlandshow/{id}','FindLandController@show')->name('findlandshow');

            // SellLand Route
            Route::get('selllandindex','SellLandController@index')->name('selllandindex');
            Route::get('selllandshow/{id}','SellLandController@show')->name('selllandshow');

        // Contact route..
        Route::get('contactshow','MasterformController@show')->name('contactshow');
        Route::get('contactview/{id}','MasterformController@view')->name('contactview');

       
    });
    
    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
    Route::post('landtfromstore','MasterformController@store')->name('landtfromstore');

    Route::post('findland','FindLandController@store')->name('findland');
    Route::post('sellland','SellLandController@store')->name('sellland');

});



// frontend route...


Route::get('/',[FrontendController::class,'index'])->name('home');
Route::get('/about-us',[FrontendController::class,'aboutus'])->name('aboutus');
Route::get('/dholera-sir',[FrontendController::class,'dholera'])->name('dholera');
Route::get('/gallery',[FrontendController::class,'gallery'])->name('gallery');
Route::get('/our-projects',[FrontendController::class,'project'])->name('project');
Route::get('/news',[FrontendController::class,'dholerainsights'])->name('dholerainsights');
Route::get('/disclaimer',[FrontendController::class,'disclaimer'])->name('disclaimer');
Route::get('/thankyou',[FrontendController::class,'thankyou'])->name('thankyou');
Route::get('/news/{title}/{id}',[FrontendController::class,'newsdetails'])->name('newsdetails');
Route::get('/contact-us',[FrontendController::class,'contactus'])->name('contactus');
Route::get('/{category_name}/{id}',[FrontendController::class,'projectdetails'])->name('projectdetails');
Route::get('/plots',[FrontendController::class,'plot'])->name('plot');
Route::post('/plot/store',[FrontendController::class,'plotstore'])->name('plot.store');
Route::get('/nofound',[FrontendController::class,'nofound'])->name('nofound');
Route::post('inquirystore',[FrontendController::class,'store'])->name('inquirystored');
Route::get('/home', function () {
    return redirect('/');
});


Route::fallback(function () {
    return redirect('/');
});


