<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-05-02
 * Time: 00:04
 */

require_once ROOT . "/models/News.php";

class NewsController{

    public function actionIndex(){

        $newsList = array();
        $newsList = \models\News::getNewsList();



        require_once ROOT . "/views/news/index.php";

        return true;
    }

    public function actionView($id){



        if ($id){
            $newsItem = \models\News::getNewsById($id);

            require_once ROOT . "/views/news/view.php";
        }

        return true;
    }

}