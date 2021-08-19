@extends('layouts.app')
@section('content')

<h1>{{isset($user) ? 'Editar usuário' : 'Cadastrar usuário'}}</h1>

@if ($errors->any())
<div class='alert alert-danger'>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (isset($user))
    <form method="POST" action="{{ route('users.update', ['id'=> $user->id]) }}" >
    {!! method_field('PUT')!!}
    @else
    <form action="{{ route('users.store') }}" method='POST'>
    @endif
        {{ csrf_field() }}
        <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="user" class="form-control">
        </div>
        <div class="form-group">
            <label>Perfil</label>
            <select name="profiles_id" class="form-control">
                @foreach ($profiles as $profile)
                    <option value="{{ $profile->id }}">{{ $profile->name }}</option>"
                @endforeach
            </select>
        </div>
        @if (isset($dados))
            <button type="submit" class="btn btn-primary btn-block">Alterar</button>
        @else
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        @endif
    </form>
@stop
@extends('layouts.app')
@section('content')

<h1>{{isset($user_profiles) ? 'Editar perfis de usuário' : 'Cadastrar perfis para o usuário'}}</h1>

@if ($errors->any())
<div class='alert alert-danger'>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (isset($user_profiles))
    <form method="POST" action="{{ route('user_profiles.update', ['id'=> $user_profiles->id]) }}" >
    {!! method_field('PUT')!!}
    @else
    <form action="{{ route('user_profiles.store') }}" method='POST'>
    @endif
        {{ csrf_field() }}
        <div class="form-group">
            <label>Usuário</label>
            <select name="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>"
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Perfil</label>
            <select name="profiles_id" class="form-control">
                @foreach ($profiles as $profile)
                    <option value="{{ $profile->id }}">{{ $profile->name }}</option>"
                @endforeach
            </select>
        </div>
        @if (isset($dados))
            <button type="submit" class="btn btn-primary btn-block">Alterar</button>
        @else
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        @endif
    </form>
@stop
