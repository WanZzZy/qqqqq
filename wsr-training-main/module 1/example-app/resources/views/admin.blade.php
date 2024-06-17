@extends('admin.app')

@section('title') Панель администратора @endsection

@section('content')

<div class="container">
    <div class="row">
        @include('layout.alert')
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h1 class="mt-3">Все заявления</h1>
            <hr class="divider">
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">ФИО пользователя</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Номер авто</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Дата заявления</th>
                    <th scope="col">Удалить</th>
                    <th scope="col">Изменить статус</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($claims as $claim)
                        <tr>
                            <th>{{ $loop->index+1 }}</th>
                            <td>{{ $claim->getAuthor()->second_name . " " . $claim->getAuthor()->first_name }}</td>
                            <td>{{ $claim->description }}</td>
                            <td>{{ $claim->autonumber }}</td>
                            <td>{{ $claim->getStatus() }}</td>
                            <td>{{ $claim->claim_date }}</td>
                            <td>
                                <form method="POST" action="{{ route('delete_claim', $claim->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <input type="hidden" name="claim_id" value="{{ $claim->id }}"> --}}
                                    <button type="submit" class="btn btn-outline-danger">Удалить</button>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('change_claim_status') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <select class="form-control" name="new_status" id="">
                                            <option value="1">новое</option>
                                            <option value="2">подтверждено</option>
                                            <option value="3">отклонено</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="claim_id" value="{{ $claim->id }}">
                                    <button type="submit" class="btn btn-outline-warning">Сохранить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
</div>

@endsection
