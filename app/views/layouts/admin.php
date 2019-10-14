<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php \vendor\core\base\View::getMeta(); ?>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/main.css">

</head>
<body>
<div class="container">
    <?php if(!empty($menu)): ?>
        <ul class="nav nav-tabs nav-fill">
            <?php foreach ($menu as $item) : ?>
                <li class="nav-item">
                    <a href="/Page/about">About</a>
                </li>
                <li class="nav-item">
                    <a href="category/<?= $item['id'] ?>"><?= $item['title'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <h1>ADMINKA</h1>

    <?=$content?>

    <?php //debug(vendor\core\Db::$countSql)?>
    <?php //debug(vendor\core\Db::$queries)?>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="/public/bootstrap/js/bootstrap.min.js"></script>
<!--<script>
    $(function () {
        $('#send').click(function () {
            $.ajax({
                url: '/main/test',
                type: 'post',
                data: {'id':2},
                success: function(res) {
                    // var data = JSON.parse(res);
                    // $('#answer').html('<p>Відповідь: ' + data.answer + ' | Код: ' +data.code + '</p>');
                    $('#answer').html(res);
                },
                error: function () {
                    alert('Error!');
                }
            });
        });
    });
</script>-->
</body>
</html>