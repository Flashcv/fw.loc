<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DEFAULT | <?=$title?> </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/main.css">

</head>
<body>
<div class="container">
    тут немає меню
    <h1>HELLO WORLD</h1>

    <?=$content?>

    <?php //debug(vendor\core\Db::$countSql)?>
    <?php //debug(vendor\core\Db::$queries)?>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="/public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>