{{-- Breadcrumb hiển thị theo Route hiện tại --}}

<div style="margin-bottom:15px;color:gray">

    <a href="{{ route('articles.index') }}">

        Articles

    </a>

    /

    @if(Route::currentRouteName()=="articles.index")

        Danh sách

    @elseif(Route::currentRouteName()=="articles.create")

        Thêm bài viết

    @elseif(Route::currentRouteName()=="articles.edit")

        Sửa bài viết

    @elseif(Route::currentRouteName()=="articles.show")

        Chi tiết bài viết

    @endif

</div>