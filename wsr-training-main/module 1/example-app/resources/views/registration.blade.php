@extends('layout.app')

@section('title') Регистрация @endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-3"></div>
    <div class="col">
        <form method="POST" action="{{ route('register_user') }}">
            @csrf
            @include('layout.alert')
            <div class="mb-3">
                <label class="form-label">Фамилия</label>
                <input type="text" class="form-control" required name="second_name">
            </div>
            <div class="mb-3">
                <label class="form-label">Имя</label>
                <input type="text" class="form-control" required name="first_name">
            </div>
            <div class="mb-3">
                <label class="form-label">Отчество</label>
                <input type="text" class="form-control" required name="patronymic">
            </div>
            <div class="mb-3">
                <label class="form-label">Телефон</label>
                <input type="text" class="form-control" maxlength="12" required name="tel">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" required name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Логин</label>
                <input type="text" class="form-control" required name="login">
            </div>
            <div class="mb-3">
                <label class="form-label">Пароль</label>
                <input type="password" class="form-control" required name="password">
            </div>
            <input type="hidden" name="type_id" value="1" id="">
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </form>
    </div>
    <div class="col-3"></div>
  </div>
</div>

@endsection

