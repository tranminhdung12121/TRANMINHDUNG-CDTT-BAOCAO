<?php

use Illuminate\Support\Facades\Route;
//frontend
use App\Http\Controllers\frontend\SiteController;
use App\Http\Controllers\frontend\SiteLoginController;
use App\Http\Controllers\frontend\SiteAccountController;
use App\Http\Controllers\frontend\SiteCartController;
//backend
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\ConfigController;
use App\Http\Controllers\backend\orderdetailController;



//SITE
Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('san-pham', [SiteController::class, 'product'])->name('site.product');
Route::get('bai-viet', [SiteController::class, 'post'])->name('site.post');
Route::get('config', [SiteConfigController::class]);

// Route::get('lien-he',[ContactController::class,'index'])->name('site.product');
// Route::get('tim-kiem',[SearchController::class,'index'])->name('site.index');
// Route::get('Add-Cart/{id}',[CartController::class,'Addcart'])->name('site.index');
// Route::get('gio-hang/addcart',[CartController::class,'index'])->name('site.cart.addcart');
Route::get('dang-ky', [SiteLoginController::class, 'getregister'])->name('site.getregister');
Route::post('dang-ky', [SiteLoginController::class, 'postregister'])->name('site.postregister');
Route::get('dang-nhap', [SiteLoginController::class, 'getlogin'])->name('site.getlogin');
Route::post('dang-nhap', [SiteLoginController::class, 'postlogin'])->name('site.postlogin');
Route::get('dang-xuat', [SiteLoginController::class, 'logout'])->name('site.logout');
Route::get('chinh-sua', [SiteAccountController::class, 'edit'])->name('account.edit');
Route::post('chinh-sua', [SiteAccountController::class, 'postedit']);
Route::get('tai-khoan', [SiteAccountController::class, 'myaccount'])->middleware('sitelogin')->name('site.myaccount');
Route::post('them-gio-hang', [SiteCartController::class, 'addcart'])->name('site.addcart');
Route::get('gio-hang', [SiteCartController::class, 'showcarts'])->middleware('sitelogin')->name('site.cart');
Route::post('cap-nhat-gio-hang', [SiteCartController::class, 'updatecart'])->name('site.updatecart');
Route::post('xoa-gio-hang', [SiteCartController::class, 'delcart'])->name('site.delcart');
// Route::post('/cart/add', 'CartController@addToCart')->name('cart.add');


///////////////////ADMIN//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/login', [AuthController::class, 'getlogin'])->name('admin.getlogin');
Route::post('admin/login', [AuthController::class, 'postlogin'])->name('admin.postlogin');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::prefix('admin')->middleware('login')->group(function () {
  // Route::prefix('admin')->group(function () {    
  Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
  //product
  Route::get('product/status/{product}', [ProductController::class, 'status'])->name('product.status');
  Route::get('product/delete/{product}', [ProductController::class, 'delete'])->name('product.delete');
  Route::get('product/restore/{product}', [ProductController::class, 'restore'])->name('product.restore');
  Route::get('product/trash', [ProductController::class, 'trash'])->name('product.trash');
  Route::resource('product', ProductController::class);
  //endproduct
  //category
  Route::get('category/status/{category}', [CategoryController::class, 'status'])->name('category.status');
  Route::get('category/delete/{category}', [CategoryController::class, 'delete'])->name('category.delete');
  Route::get('restore/{category}', [CategoryController::class, 'restore'])->name('category.restore');
  Route::get('category/trash', [CategoryController::class, 'trash'])->name('category.trash');
  Route::resource('category', CategoryController::class);
  //endcategory
  //brand
  Route::get('brand/status/{brand}', [BrandController::class, 'status'])->name('brand.status');
  Route::get('brand/delete/{brand}', [BrandController::class, 'delete'])->name('brand.delete');
  Route::get('brand/restore/{brand}', [BrandController::class, 'restore'])->name('brand.restore');
  Route::get('brand/trash', [BrandController::class, 'trash'])->name('brand.trash');
  Route::resource('brand', BrandController::class);
  //endbrand
  //post
  Route::get('post/status/{post}', [PostController::class, 'status'])->name('post.status');
  Route::get('post/delete/{post}', [PostController::class, 'delete'])->name('post.delete');
  Route::get('post/restore/{post}', [PostController::class, 'restore'])->name('post.restore');
  Route::get('post/trash', [PostController::class, 'trash'])->name('post.trash');
  Route::resource('post', PostController::class);
  //endpost
  //topic
  Route::get('topic/status/{topic}', [TopicController::class, 'status'])->name('topic.status');
  Route::get('topic/delete/{topic}', [TopicController::class, 'delete'])->name('topic.delete');
  Route::get('topic/restore/{topic}', [TopicController::class, 'restore'])->name('topic.restore');
  Route::get('topic/trash', [TopicController::class, 'trash'])->name('topic.trash');
  Route::resource('topic', TopicController::class);
  //endtopic
  //page
  Route::get('page/status/{page}', [PageController::class, 'status'])->name('page.status');
  Route::get('page/delete/{page}', [PageController::class, 'delete'])->name('page.delete');
  Route::get('page/restore/{page}', [PageController::class, 'restore'])->name('page.restore');
  Route::get('page/trash', [PageController::class, 'trash'])->name('page.trash');
  Route::resource('page', PageController::class);
  //endpage
  //customer
  Route::get('customer/status/{customer}', [CustomerController::class, 'status'])->name('customer.status');
  Route::get('customer/delete/{customer}', [CustomerController::class, 'delete'])->name('customer.delete');
  Route::get('customer/restore/{customer}', [CustomerController::class, 'restore'])->name('customer.restore');
  Route::get('customer/trash', [CustomerController::class, 'trash'])->name('customer.trash');
  Route::resource('customer', CustomerController::class);
  //endcustomer
  //order
  Route::get('order/status/{order}', [orderController::class, 'status'])->name('order.status');
  Route::get('order/delete/{order}', [orderController::class, 'delete'])->name('order.delete');
  Route::get('order/restore/{order}', [orderController::class, 'restore'])->name('order.restore');
  Route::get('order/trash', [orderController::class, 'trash'])->name('order.trash');
  Route::resource('order', orderController::class);
  //endorder
  //contact
  Route::get('contact/status/{contact}', [ContactController::class, 'status'])->name('contact.status');
  Route::get('contact/delete/{contact}', [ContactController::class, 'delete'])->name('contact.delete');
  Route::get('contact/restore/{contact}', [ContactController::class, 'restore'])->name('contact.restore');
  Route::get('contact/trash', [ContactController::class, 'trash'])->name('contact.trash');
  Route::resource('contact', ContactController::class);
  //endcontact
  //menu
  Route::get('menu/status/{menu}', [MenuController::class, 'status'])->name('menu.status');
  Route::get('menu/delete/{menu}', [MenuController::class, 'delete'])->name('menu.delete');
  Route::get('menu/restore/{menu}', [MenuController::class, 'restore'])->name('menu.restore');
  Route::get('menu/trash', [MenuController::class, 'trash'])->name('menu.trash');
  Route::resource('menu', MenuController::class);
  //endmenu
  //slider
  Route::get('slider/status/{slider}', [SliderController::class, 'status'])->name('slider.status');
  Route::get('slider/delete/{slider}', [SliderController::class, 'delete'])->name('slider.delete');
  Route::get('slider/restore/{slider}', [SliderController::class, 'restore'])->name('slider.restore');
  Route::get('slider/trash', [SliderController::class, 'trash'])->name('slider.trash');
  Route::resource('slider', SliderController::class);
  //endslider
  ////user
  Route::get('user/status/{user}', [UserController::class, 'status'])->name('user.status');
  Route::get('user/delete/{user}', [UserController::class, 'delete'])->name('user.delete');
  Route::get('user/show/{user}', [UserController::class, 'show'])->name('user.show');
  Route::get('user/restore/{user}', [UserController::class, 'restore'])->name('user.restore');
  Route::get('user/trash', [UserController::class, 'trash'])->name('user.trash');
  Route::resource('user', UserController::class);
  //enduser    
  ////config
  Route::get('config/status/{config}', [ConfigController::class, 'status'])->name('config.status');
  Route::get('config/delete/{config}', [ConfigController::class, 'delete'])->name('config.delete');
  Route::get('config/show/{config}', [ConfigController::class, 'show'])->name('config.show');
  Route::get('config/restore/{config}', [ConfigController::class, 'restore'])->name('config.restore');
  Route::get('config/trash', [ConfigController::class, 'trash'])->name('config.trash');
  Route::resource('config', ConfigController::class);
  //endconfig
  Route::resource('orderdetail', OrderdetailController::class);
});

Route::get("{slug}", [SiteController::class, 'index'])->name('site.slug');
