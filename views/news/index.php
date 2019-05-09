<?php
require ROOT . "/views/template/header.php";
?>
    <div class="body-content container">
        <h3 class="home-title">News from DataBases</h3>
        <div class="row">
            <div class="col-md-8">
                <!--news-->
                <?php foreach($newsList as $item):?>
                <div class="wrap-news">
                    <h3 class="title-new"><?=$item['h1']?></h3>
                    <p class="content-min">
                        <?=$item['short_content']?>
                    </p>
                    <p class="date"><?=$item['date']?></p>
                    <a href="/news/<?=$item['id']?>" class="back-user"><i class="fas fa-angle-right"></i> Детальніше...</a>
                </div>
                    <hr>
                <?php endforeach;?>
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