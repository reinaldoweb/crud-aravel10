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
<h2>Edit</h2>

<form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{ $user->name }}">
    <input type="text" name="email" value="{{ $user->email }}">
    <button type="submit">Atualizar</button>
</form>

@endsection
