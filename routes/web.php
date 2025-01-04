<?php


use App\Http\Controllers\BandController;


use App\Http\Controllers\ProductController;

use App\Http\Controllers\CategoryController;

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

/*Route FE */

/*Route FE */

Route::get('/', function () {
    return view('frontend.pages.home');
});
Route::get('/shop', function () {
    return view('frontend.pages.shop');
});
Route::get('/single-product-detail', function () {
    return view('frontend.pages.single-product-details');
});
Route::get('/checkout', function () {
    return view('frontend.pages.checkout');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/single-blog', function () {
    return view('frontend.pages.single-blog');
});
Route::get('/regular-page', function () {
    return view('frontend.pages.regular-page');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');

});
//Back end

});
Route::get('/wishlist', function () {
    return view('frontend.pages.wishlist');
});

//Back end


Route::prefix('/admin')->group(function () {

    // Route cho trang dashboard
    Route::view('/', 'backend.pages.dashboard');
    Route::view('/dashboard', 'backend.pages.dashboard');

    // Route cho sản phẩm
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'Index'])->name('Index_Product');
        // Thêm sản phẩm
        Route::view('/add-product', 'backend.pages.product.add-product')->name('Add_Product');
        Route::get('/add', [ProductController::class, 'Add']);
        // Sửa sản phẩm
        Route::get('/edit', [ProductController::class, 'Edit'])->name('Edit_Product');
        // Xóa sản phẩm
        Route::get('/delete', [ProductController::class, 'Delete'])->name('Delete_Product');
    });

    // Route cho nhóm nhạc ca sĩ
    Route::prefix('band-singer')->group(function () {
        Route::get('/', [BandController::class, 'Index'])->name('Index_Band');
        // Thêm nhóm nhạc ca sĩ
        Route::view('/add-band', 'backend.pages.band_singer.add-band-singer')->name('Index_Add_Band');
        Route::post('/add', [BandController::class, 'Add'])->name('Add_Singer');
        // Sửa nhóm nhạc ca sĩ
        Route::get('/edit-band/{id}', [BandController::class, 'Show'])->name('Index_Edit_Band');
        Route::get('/edit/{id}', [BandController::class, 'Edit'])->name('Edit_Band');
        // Xóa nhóm nhạc ca sĩ
        Route::delete('/delete/{id}', [BandController::class, 'Delete'])->name('Delete_Band');
    });

    // Route cho loại sản phẩm
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'Index'])->name('Index_Category');
        // Thêm loại sản phẩm
        Route::view('/add-category', 'backend.pages.category.add-category')->name('Index_Add_Category');
        Route::post('/add', [CategoryController::class, 'Add'])->name('Add_Category');
        // Sửa loại sản phẩm
        Route::get('/edit-category/{id}', [CategoryController::class, 'Show'])->name('Index_Edit_Category');
        Route::get('/edit/{id}', [CategoryController::class, 'Edit'])->name('Edit_Category');
        // Xóa loại sản phẩm
        Route::delete('/delete/{id}', [CategoryController::class, 'Delete'])->name('Delete_Category');
    });

<<<<<<< Updated upstream
    // Route cho liên hệ
    Route::view('/contact', 'backend.pages.contact');

    // Route cho đơn hàng
    Route::view('/bill', 'backend.pages.bill');

    // Route cho bình luận
    Route::view('/comments', 'backend.pages.comments');

=======
    // Route cho phiếu nhập
    Route::prefix('goods-receipt')->group(function(){
        Route::get('/',[GoodController::class,'Index'])->name('Index_Goods');
    });
        
>>>>>>> Stashed changes
    // Route cho thống kê
    Route::view('/statistic', 'backend.pages.statistic');

    //Route cho quản lý đội ngũ
    Route::prefix(prefix: 'staff')->group(callback: function (): void {
        Route::view('/staff-management', 'backend.pages.staff.staff-management')->name('Index_Staff_Management');
        //Thêm 
        Route::view('/add-staff-management', 'backend.pages.staff.add-staff-management')->name('Index_Add_Staff_Management');
    });

<<<<<<< Updated upstream
    //Route cho quản lý nhân viên
    Route::view(uri: '/staff-management', view: 'backend.pages.staff.staff-management');
    Route::view(uri: '/add-staff-management', view: 'backend.pages.staff.add-staff-management');
    Route::view(uri: '/edit-staff-management', view: 'backend.pages.staff.edit-staff-management');
    // Route cho đơn hàng
    Route::view('/orders', 'backend.pages.orders');

    // Route cho liên hệ
    Route::view('/contact', 'backend.pages.contact');
=======
    // Route cho quản lý hóa đơn
    Route::prefix(prefix: 'bill-management')->group(callback: function (): void {
        Route::view('/bill-management', 'backend.pages.bill.bill-management')->name('Index_Bill_Management');
        //Chi tiết
        Route::view('/bill-detail-management', 'backend.pages.bill.bill-detail-management')->name('Index_Bill_Detail_Management');
    });

    // Route cho quản lý bình luận
    Route::prefix(prefix: 'comments')->group(callback: function (): void {
        Route::view('/commments-management', 'backend.pages.comments.comments-management')->name('Index_Comments_Management');
    });
    
    //Route cho quản lý khách hàng
     Route::prefix(prefix: 'customer')->group(callback: function (): void {
        Route::view('/customer-management', 'backend.pages.customer.customer-management')->name('Index_Customer_Management');
     });

    //Route cho quản lý bài viết
    Route::prefix(prefix: 'blog')->group(callback: function (): void {
    Route::view('/blog-management', 'backend.pages.blog.blog-management')->name('Index_Blog_Management');
    Route::view('/add-blog-management', 'backend.pages.blog.add-blog-management')->name('Index_Add_Blog_Management');
    Route::view('/edit-blog-management', 'backend.pages.blog.edit-blog-management')->name('Index_Edit_Blog_Management');
    });
>>>>>>> Stashed changes
});