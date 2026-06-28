<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet"
href="{{ asset('css/style.css') }}">

</head>

<body>

@include('partials.header')
@if(session('success'))

<div class="success">

{{ session('success') }}
@if(session('error'))

<div class="error-box">

{{ session('error') }}

</div>

@endif
</div>

@endif
<main>

@yield('content')

</main>

@include('partials.footer')

</body>

</html>