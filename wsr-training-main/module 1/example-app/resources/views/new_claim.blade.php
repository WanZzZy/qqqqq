@extends('user.app')

@section('title') Новая заявка @endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="mt-3">Новое заявление</h1>
            <hr class="divider">
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form method="POST" action="{{ route('add_new_claim') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Номер автомобиля</label>
                    <input type="text" name="autonumber" maxlength="10" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Описание</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                {{-- <div class="mb-3">
                    <label class="form-label">Статус</label>
                    <input type="text" class="form-control" disabled value="Новое">
                </div> --}}
                {{-- <div class="mb-3">
                    <label class="form-label">Дата подачи заявки</label>
                    <input type="datetime" name="claim_date"  class="form-control">
                </div> --}}
                <input type="submit" class="btn btn-primary" value="Создать заявку">
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>

<script type="text/javascript">
    var claim_date_input = document.getElementsByName("claim_date")[0];

    now_date = new Date();

    claim_date_input.setAttribute('value', now_date.toISOString());
</script>

@endsection
