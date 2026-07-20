<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="UTF-8">

    <title>@yield('title','Articles')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 90%;
            margin: auto;
            margin-top: 20px;
        }

        .flash {
            padding: 10px;
            background: #ECFDF5;
            color: #065F46;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
        }

        th {
            background: #f3f4f6;
        }

        nav a {
            color: white;
            margin-right: 10px;
            text-decoration: none;
        }
    </style>

    @stack('styles')

</head>

<body>

    @include('partials.nav')

    <div class="container">

    {{-- Hiển thị Breadcrumb --}}
@include('partials.breadcrumb')

        @if(session('success'))

        <div class="flash">

            {{ session('success') }}

        </div>

        @endif

        @yield('content')
        

    </div>

    @include('partials.footer')

    @stack('scripts')

</body>

</html>