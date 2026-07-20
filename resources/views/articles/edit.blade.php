@extends('layouts.app')

@section('title','Sửa bài viết')

@push('styles')

<style>
    textarea {

        resize: none;

    }
</style>

@endpush

@section('content')

<h2>

    Sửa bài viết

</h2>

<form
    action="{{ route('articles.update',$article['id']) }}"
    method="POST">

    @csrf

    @method('PUT')

    <x-input

        name="title"

        label="Tiêu đề"

        :value="$article['title']" />

    <label>

        Nội dung

    </label>

    <textarea

        name="body"

        rows="6">

    {{ old('body',$article['body']) }}

    </textarea>

    @error('body')

    <div style="color:red">

        {{ $message }}

    </div>

    @enderror

    <br><br>

    <x-button>

        Cập nhật

    </x-button>

</form>

@endsection