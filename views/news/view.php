<?php
require ROOT . "/views/template/header.php";
?>
<div class="body-content container">

    <h3 class="home-title">Views one new</h3>
    <div class="row">
        <div class="col-md-8">
            <!--news-->
                <div class="wrap-news">
                    <h3 class="title-new"><?=$newsItem->h1?></h3>
                    <p class="content-min">
                        <?=$newsItem->content?>
                    </p>
                    <p class="date"><?=$newsItem->date?></p>
                    <a href="/news/" class="back-user">Повернутись назад... <i class="fas fa-angle-left"></i> </a>
                </div>
                <hr>
            <!--news-->
        </div>
        <div class="col-md-4">
                <p>Тестові новини, що були скопійовані з інформаційних сайтів</p>
        </div>
    </div>
</div>

<?php
require ROOT . "/views/template/footer.php";
?>