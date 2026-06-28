@extends('layouts.app')

@section('content')

<div class="card">

<h1>
Register
</h1>

<form action="/register" method="POST">

@csrf

<input
type="text"
name="name"
value="{{ old('name') }}"
placeholder="Full Name">
@error('name')
<p class="error">
    {{ $message }}
</p>
@enderror
<input
type="email"
name="email"
value="{{ old('email') }}"
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
@error('password')
<p class="error">
    {{ $message }}
</p>
@enderror
<button>

Create Account

</button>
<div class="switch">

Already have an account?

<a href="/login">

Login

</a>

</div>
</form>

</div>

@endsection