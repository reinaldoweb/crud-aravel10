@extends('master')
@section('content')

<h2>Show</h2>

<ul>
    <li>Name: {{ $user->name }}</li>
    <li>Email: {{ $user->email }}</li>
</ul>
<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
    @method('delete')
    @csrf

    <button type="submit">Deletar</button>
</form>
@endsection
