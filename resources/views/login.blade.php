@extends('layouts.app')

@section('content')

<div class="card">

<h1>
Login
</h1>

<form action="/login" method="POST">

@csrf

<input
type="email"
name="email"
placeholder="Email">
@error('email')
<p class="error">
    {{ $message }}
</p>
@enderror
<input
type="password"
name="password"
placeholder="Password">
@error('email')
<p class="password">
    {{ $message }}
</p>
@enderror
<button>

Login

</button>
<div class="switch">

Don't have an account?

<a href="/register">

Register

</a>

</div>
</form>

</div>

@endsection