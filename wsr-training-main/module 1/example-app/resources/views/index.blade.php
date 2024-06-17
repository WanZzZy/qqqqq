@extends('layout.app')

@section('title') Главная страница @endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      @include('layout.alert')
    </div>
  </div>
  <div class="row">
    <div class="col">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quasi deleniti cupiditate atque eligendi dolores ad praesentium cum voluptatem amet magni harum temporibus debitis nesciunt id, est animi. Voluptatum, fuga?
    </div>
  </div>
</div>

@endsection
