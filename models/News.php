<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-05-02
 * Time: 15:01
 */

namespace models;

class News {

    public static function getNewsById($id){


        $db = \models\Db::getConnect();

        $result = $db->query("SELECT * FROM news WHERE id='$id'");

        $newList = $result->fetch();

        return $newList;

    }

    public static function getNewsList(){


        $db = \models\Db::getConnect();

        $newsList = [];

        $result = $db->query('
               SELECT id, h1, date, short_content '
            . 'FROM news '
            . 'ORDER BY date DESC '
            . 'LIMIT 10 '
        );

        $i = 0;


        while($row = $result->fetch()){
            $newsList[$i]['id'] = $row->id;
            $newsList[$i]['h1'] = $row->h1;
            $newsList[$i]['date'] = $row->date;
            $newsList[$i]['short_content'] = $row->short_content;
            $i++;
        }



        return $newsList;

    }

}