<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FrontendloginController;
use App\Http\Controllers\UserMController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\IndexController;
//use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AddressbookController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\FrontProductController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ManagementController;
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
Route::get('/', function () 
{
    return view('welcome');
});
//Dashboard login
Route::get('/admin/auth/login',[MainController::class,'login']);
Route::get('/admin/layouts/app',[MainController::class,'app']);
Route::get('/admin/auth/register',[MainController::class,'register']);

//Dashboard managements
Route::resource('usermanagements', UserMController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('banners', BannerController::class);
Route::resource('configurations', ConfigurationController::class);
Route::resource('coupons', CouponController::class);
Route::resource('cmspages',CmsController::class);
Route::resource('managements',ManagementController::class);

//FrontEnd login
Route::get('/',[App\Http\Controllers\FrontendloginController::class,'index']);
Route::post('index',[App\Http\Controllers\FrontendloginController::class,'store'])->name('store');
Route::post('/',[App\http\Controllers\FrontendloginController::class,'index'])->name('index');

Route::any('/forgotpassword',[FrontController::class,'forgotpassword']);
Route::get('/reset_password',[FrontController::class,'reset_password']);
Route::get('frontends/auth/login',[FrontController::class,'login']);
Route::get('/newpassword',[FrontController::class,'newpassword']);

Route::get('/myorder',[ProductController::class,'myorder']);
Route::post('/orderplace',[ProductController::class,'orderPlace']);

Route::get('/checkout',[CheckController::class,'checkout']);
Route::any('/myaccount',[ProductController::class,'myaccount']);
//Route::get('frontends/category',[IndexController::class,'category']);

//Route::get('frontends/cart',[ProductController::class,'cart']);

Route::get('/index',function()
{
    return view('frontends.layouts.index');
});

Route::get('/index',[IndexController::class,'category']);
Route::get('/productdetails/{id}',[IndexController::class,'productdetails']);
Route::get('/cart',[ProductController::class,'cart']);
Route::post('/cartaction',[ProductController::class,'addtocart']);

Route::get('/wishlist',[ProductController::class,'wishlist']);

Route::any('/login_register',[UsersController::class,'register']);

Route::get('/newpassword',[NewPasswordController::class,'index']);
Route::get('/check',[ProductController::class,'check']);
Route::any('/order_review',[ProductController::class,'order_review']);
Route::any('/placeorder',[ProductController::class,'placeorder']);
Route::any('/contactus',[IndexController::class,'contactus']);
Route::get('/enquiry',[IndexController::class,'enquiry']);

Route::get('/login',[FrontendloginController::class,'login']);

Route::any('/cart/apply-coupon',[ProductController::class,'applyCoupon']);

Route::post('/check-subscriber-email',[NewsletterController::class,'checkSubscriber']);
Route::get('frontends/layouts/app',[IndexController::class,'app']);

//Route::get('/place_order',[ProductController::class,'place_order']); 
Route::resource('frontends/addressbook', AddressbookController::class);

Route::get('frontends/checkouts',[ShippingController::class,'shipping']);
//Route::get('frontends/wishlist',[WishlistController::class,'wishlist']);
Route::get('frontends/productdetails',[ProductController::class,'productdetails']);
//Route::get('/register',[AdminLoginController::class,'adminlogin']);
Route::get('/search',[ProductController::class,'search']);

Route::any('/cart/delete-product/{id}',[ProductController::class,'deleteCartProduct']);
Route::get('/cart/update-quantity/{id}',[ProductController::class,'updateCartQuantity']);

Route::get('/pages/{url}',[CmsController::class,'cmsPage']);

Route::any('/export-usermanagements',[UserMController::class,'exportUsermanagements']);
Route::any('/export-coupons',[CouponController::class,'exportCoupons']);
Route::any('/export-managements',[ManagementController::class,'exportManagements']);