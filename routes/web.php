<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});
//=============================
// Bài 1 - Route có tham số động
//=============================

Route::get('/articles/page/{page}', function ($page) {

    return "Trang bài viết số: " . (int)$page;

})
->whereNumber('page')
->name('articles.page');

//==================================
// Route có tham số tùy chọn
//==================================

Route::get('/articles/slug/{slug?}', function ($slug = 'khong-co-slug') {

    return "Slug: " . $slug;

})

->where('slug','[a-z0-9-]+');

//=============================
// Route Group
//=============================

Route::prefix('admin')

->group(function(){

    Route::get('/articles',function(){

        return "Quản trị bài viết";

    })

    ->name('admin.articles.index');

});

//=============================
// Test Named Route
//=============================


Route::get('/test',function(){

    return route('articles.page',['page'=>2]);

});


Route::resource('articles',ArticleController::class);

Route::get('/articles/show/{article}', [ArticleController::class, 'show'])
    ->name('articles.show.demo');

    // Route xóa bài viết
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])
    ->name('articles.destroy');