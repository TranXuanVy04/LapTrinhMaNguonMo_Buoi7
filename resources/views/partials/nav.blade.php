{{-- Thanh điều hướng --}}
<nav style="padding:12px;background:#111827">

    {{-- Trang chủ --}}
    <a href="{{ url('/') }}"
       style="color:white">

       Trang chủ

    </a>

    {{-- Danh sách bài viết --}}
    <a href="{{ route('articles.index') }}"
       style="color:white">

       Articles

    </a>

    {{-- Thêm bài viết --}}
    <a href="{{ route('articles.create') }}"
       style="color:white">

       Tạo bài viết

    </a>

</nav>