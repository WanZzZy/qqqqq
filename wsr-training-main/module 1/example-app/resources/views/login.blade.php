@extends('layout.app')

@section('title') Вход пользователя @endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-3"></div>
    <div class="col">
        @include('layout.alert')
        <form method="POST" action="{{ route('login_user') }}">
          @csrf
          <div class="mb-3">
              <label class="form-label">Логин</label>
              <input type="text" class="form-control" name="login">
          </div>
          <div class="mb-3">
              <label class="form-label">Пароль</label>
              <input type="password" class="form-control" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Войти</button>
        </form>
    </div>
    <div class="col-3"></div>
  </div>
</div>

@endsection

