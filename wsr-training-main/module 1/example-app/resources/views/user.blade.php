@extends('user.app')

@section('title') Мой аккаунт @endsection

@section('content')

<div class="container">
  <div class="row">
      @include('layout.alert')
  </div>
  <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
          <h1 class="mt-3">Ваши заявления</h1>
          <hr class="divider">
      </div>
      <div class="col-3"></div>
  </div>
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        @if(count($claims) > 0)
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Номер авто</th>
                <th scope="col">Описание</th>
                <th scope="col">Статус</th>
                <th scope="col">Дата заявления</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($claims as $claim)
                <tr>
                  <th>{{ $loop->index+1 }}</th>
                  <td>{{ $claim->autonumber }}</td>
                  <td>{{ $claim->description }}</td>
                  <td>{{ $claim->getStatus() }}</td>
                  <td>{{ $claim->claim_date }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <h3>Здесь пока ничего нет</h3>
        @endif
    </div>
    <div class="col-3"></div>
  </div>
</div>

@endsection
