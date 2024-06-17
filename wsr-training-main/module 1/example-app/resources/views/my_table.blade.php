<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($models as $model)
        <p>{{ $model->caption }}<p>
        <p>{{ $model->big_text }}<p>
        <p>{{ $model->flag }}<p>
        <p>{{ $model->my_date }}<p>
    @endforeach
</body>
</html>