<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Помилка</title>
</head>
<body>
    <h1>Сталася помилка</h1>
    <p><b>Код помилки:</b><?= $errno ?></p>
    <p><b>Текст помилки:</b><?= $errstr ?></p>
    <p><b>Файл, в якому сталася помилка:</b><?= $errfile ?></p>
    <p><b>Рядок, в якому сталася помилка:</b><?= $errline ?></p>
</body>
</html>