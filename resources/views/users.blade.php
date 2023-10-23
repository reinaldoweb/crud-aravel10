@extends('master')
@section('content')

<h2><a href="{{ route('users.create') }}">Create</a></h2>

<hr>
<h2>Users</h2>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }} -  <a href="{{ route('users.edit', [$user->id]) }}">Editar</a> || <a href="{{ route('users.destroy', [$user->id]) }}">Deletar</a> || <a href="{{ route('users.show', [$user->id]) }}">Show</a>
        </li>
    @endforeach
</ul>

@endsection
