@extends('layouts.app')

@section('title','Chi tiết bài viết')

@section('content')

<h2>Chi tiết bài viết</h2>

<table border="1" cellpadding="8">

<tr>
    <th>ID</th>
    <td>{{ $article['id'] }}</td>
</tr>

<tr>
    <th>Tiêu đề</th>
    <td>{{ $article['title'] }}</td>
</tr>

<tr>
    <th>Nội dung</th>
    <td>{{ $article['body'] }}</td>
</tr>

</table>

@endsection