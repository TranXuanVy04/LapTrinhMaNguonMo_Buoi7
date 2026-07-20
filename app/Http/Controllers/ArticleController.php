<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{

    // Hiển thị danh sách bài viết
    public function index()
    {
        // Dữ liệu mẫu
        $articles = [

            [
                'id' => 1,
                'title' => 'Giới thiệu Laravel 12',
                'body' => 'Nội dung A'
            ],

            [
                'id' => 2,
                'title' => 'Blade Components',
                'body' => 'Nội dung B'
            ]

        ];

        return view('articles.index', compact('articles'));
    }

    // Hiển thị form thêm
    public function create()
    {
        return view('articles.create');
    }

    // Lưu bài viết
    public function store(Request $request)
    {

        $request->validate([

            'title' => ['required', 'string', 'max:255'],

            'body' => ['required', 'string', 'min:10']

        ]);

        return redirect()

            ->route('articles.index')

            ->with('success', 'Tạo bài viết thành công (demo).');
    }

    /**
     * Demo Route Model Binding (chưa dùng Database)
     */
    public function show($article)
    {
        // Mô phỏng dữ liệu bài viết
        $articles = [

            1 => [
                'id' => 1,
                'title' => 'Giới thiệu Laravel',
                'body' => 'Nội dung A'
            ],

            2 => [
                'id' => 2,
                'title' => 'Blade Components',
                'body' => 'Nội dung B'
            ]

        ];

        // Kiểm tra bài viết có tồn tại hay không
        if (!isset($articles[$article])) {
            abort(404);
        }

        // Lấy bài viết theo ID
        $article = $articles[$article];

        // Trả về View
        return view('articles.show', compact('article'));
    }

    // Form sửa
    public function edit(string $id)
    {

        $article = [

            'id' => $id,

            'title' => 'Tiêu đề mẫu',

            'body' => 'Nội dung mẫu'

        ];

        return view('articles.edit', compact('article'));
    }

    // Cập nhật
    public function update(Request $request, string $id)
    {

        $request->validate([

            'title' => ['required', 'string', 'max:255'],

            'body' => ['required', 'string', 'min:10']

        ]);

        return redirect()

            ->route('articles.index')

            ->with('success', "Cập nhật bài viết #$id thành công (demo).");
    }

    // Xóa
    public function destroy(string $id)
    {

        return redirect()

            ->route('articles.index')

            ->with('success', "Đã xoá bài viết #$id (demo).");
    }
}
