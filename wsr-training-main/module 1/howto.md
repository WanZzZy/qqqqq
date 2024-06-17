

# 0. Создание проекта Laravel

```sh
composer create-project laravel/laravel:^9.0 module1
```

Начиная с пункта 1. можно повторять действия циклически, или отдельно. 

Т.е., либо сразу создать все миграции, все модели, все контроллеры. Либо раз за разом повторяя шаги.


# 1. База данных

Изучаем данную стрктуру базы данных. Например, даны таблицы:
- Users - пользователи
- UserType - тип пользователя
- Claims - заявки

# 2. Миграции

С помощью команды `php artisan make:migration` создаём, например, миграцию заявок

```sh
php artisan make:migration claims
```

Далее открываем миграцию по пути `database/migrations/*********_claims.php` (где ***** - какое-то своё название, которое дал Laravel).

В метод `up()` добавляем код

```php
Schema::create('claims', function (Blueprint $table) {
    $table->id();
    $table->integer('user_id');
    $table->string('autonumber');
    $table->text('description');
    $table->integer('status_id');
    $table->timestamp('claim_date');
    $table->timestamps();
});
```

В метод `down()` добавляем

```php
Schema::dropIfExists('claims');
```

# 3. Модели

Создадим для нашей миграции модель, которая позволит работать с таблицей. Делаем это с помощью команды `php artisan make:model`

```sh
php artisan make:model ClaimModel
```

Получим по следующему пути файл `app/Models/ClaimModel.php`, открываем его.

Затем вставляем в класс следующий код

```php
protected $table = 'claims'; // Указывает какую таблицу будет использовать модель
```

Там же, в классе, добавляем дополнительные методы и логику, которая необходима. Например, заявки имеют статус и хотелось бы получать текстовое представление вместо чисел. Тогда, добавим такой код:

```php
    public function getStatus()
    {
        switch ($this->status_id) {
            case 1:
                return 'Новое';
                break;
            case 2:
                return 'Подтверждено';
                break;
            case 3:
                return 'Отклонено';
                break;
            default:
                # code...
                break;
        }
    }
```

# 4. Контроллеры

Теперь создадим контроллер, для того чтобы можно было предоставить все операции (создание, чтение, обновление и удаление. Иначе CRUD). Делается это с помощью команды `php artisan make:controller`


```sh
php artisan make:controller ClaimsController --resource
```

где ClaimsController - название контроллера, а `--resource` создаст все методы.

Пример полученного кода

```php
class ClaimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
```


5. Маршруты

Это ссылки на нашем сайте, которые ведут либо на HTML страницы, либо определённые действия контроллеров (такие как добавление, удаление, изменение или что-то другое).

По пути `routes/web.php` можно увидеть следующий файл, содержащий маршруты.

```php

// Например, этот маршрут просто вернёт главную страницу
Route::get('/', [PageController::class, 'index'])->name('main');


// Например, этот маршрут вернёт HTML-страницу с формой регистрации
Route::get('/registration', [PageController::class, 'registration'])->name('registration');

// Например, этот маршрут вернёт HTML-страницу с формой входа
Route::get('/login', [PageController::class, 'login'])->name('login');


// Например, этот маршрут вернёт HTML-страницу с формой добавления новой заявки
Route::get('/new_claim', function () {
    return view('new_claim');
})->name('new_claim');
```


6. Представляения

Непосредственные HTML-страницы, но описываемые с помощью шаблонизатора blade.

Пример представления:

Это общий шаблон для всех страниц. app.blade.php

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
      <div class="row">
        @include('layout.menu')
      </div>
      <div class="row">
        @yield('content')
      </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
```

Это страница index.blade.php
```php
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
```


