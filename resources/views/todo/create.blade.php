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
<form action="/todo" method="post">
    @csrf
    <label for="title">Введите название задачи</label>
    <input type="text" name="title" id="title">
    <label for="description">Введите описание задачи</label>
    <input type="text" name="description" id="description">
    <button type="submit">Добавить</button>
</form>
</body>
</html>
