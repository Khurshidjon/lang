<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Отправитель: <b>{{ $data['question']->full_name }}</b>
    <br>
    Место работы заявителя: <b>{{ $data['question']->company_name }}</b>
    <br>
    Номер телефона отправителя: <b>{{$data['question']->phone }}</b>
    <br>
    Email отправителя: <b>{{ $data['question']->email }}</b>
    <br>
    <p>Текст: {{$data['question']->text }}</p>
    <br>
        @foreach($data['links'] as $file)
            <p>Вы можете скачать файлы через <a href="{{ asset('storage') .'/'. $file}}">Скачать файл</a></p>
        @endforeach
</body>
</html>
