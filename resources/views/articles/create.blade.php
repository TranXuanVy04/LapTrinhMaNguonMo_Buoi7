@extends('layouts.app')

@section('title','Tạo bài viết')

{{-- Chỉ trang này mới có CSS --}}
@push('styles')

<style>

textarea{

resize:none;

}

</style>

@endpush

@section('content')

<h2>Tạo bài viết</h2>

<x-alert
type="warning"
title="Lưu ý">

Dữ liệu hiện chỉ mô phỏng.

</x-alert>

<form
action="{{ route('articles.store') }}"
method="POST">

@csrf

<x-input
name="title"
label="Tiêu đề"/>

<label>

Nội dung

</label>

<textarea
name="body"
rows="6">

{{ old('body') }}

</textarea>

@error('body')

<div style="color:red">

{{ $message }}

</div>

@enderror

<br><br>

{{-- Component Button --}}
<x-button>

Lưu

</x-button>

</form>

@endsection