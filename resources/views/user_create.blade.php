@extends('master')
@section('content')

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@else(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<h2>Create</h2>

<form action="{{ route('users.store')}}" method="post">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password"  placeholder="Password">
    <input type="password" name="password_confirmation" placeholder="Confirm Password">
    <button type="submit">Save</button>
</form>

@endsection
