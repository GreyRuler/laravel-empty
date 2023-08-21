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
<table>
<thead>
    <tr>
        <td>Название</td>
        <td>Описание</td>
    </tr>
</thead>
<tbody>
@foreach($todos as $todo)
    <tr>
        <td>{{$todo->title}}</td>
        <td>{{$todo->description}}</td>
    </tr>
@endforeach
</tbody>
</table>
<a href="/todo/create">Добавить задачу</a>
</body>
</html>
