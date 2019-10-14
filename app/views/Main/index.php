<div class="container">
    <div id="answer"></div>
    <button class="btn btn-danger" id="send">Кнопка</button>
    <br>
    <?php new \vendor\widgets\menu\Menu([
//        'tpl' => WWW . '/menu/my_menu.php',
        'tpl' => WWW . '/menu/select.php',
        'container' => 'select',
        'menu' => 'my-select',
        'table' => 'categories',
        'cache' => 60,
        'cacheKey' => 'menu_select'
    ]); ?>

    <?php new \vendor\widgets\menu\Menu([
        //        'tpl' => WWW . '/menu/my_menu.php',
        'tpl' => WWW . '/menu/my_menu.php',
        'container' => 'ul',
        'menu' => 'my-menu',
        'table' => 'categories',
        'cache' => 60,
        'cacheKey' => 'menu_ul'
    ]); ?>



    <?php if(!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $post['title'] ?></h5>
                    <p class="card-text"><?= $post['excerpt'] ?></p>
                    <p class="card-text"><?= $post['text'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<!--<script src="/public/js/test.js"></script>-->
<!--<script>-->
<!--    $(function () {-->
<!--        $('#send').click(function () {-->
<!--            $.ajax({-->
<!--                url: '/main/test',-->
<!--                type: 'post',-->
<!--                data: {'id':2},-->
<!--                success: function(res) {-->
<!--                    // var data = JSON.parse(res);-->
<!--                    // $('#answer').html('<p>Відповідь: ' + data.answer + ' | Код: ' +data.code + '</p>');-->
<!--                    $('#answer').html(res);-->
<!--                },-->
<!--                error: function () {-->
<!--                    alert('Error!');-->
<!--                }-->
<!--            });-->
<!--        });-->
<!--    });-->
<!--</script>-->