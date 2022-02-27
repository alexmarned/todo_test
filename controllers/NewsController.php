<?php

//include_once ROOT. '/models/News.php';
include_once 'models/News.php';

class NewsController {

    public function actionIndex() {

        $newsList = array();
        $newsList = News::getNewsList();

        //	require_once(ROOT . '/views/news/index.php');
        require_once( 'views/news/index.php');

        return true;
    }

    public function actionView($id) {
        if ($id) {
            $newsItem = News::getNewsItemByID($id);

            //require_once(ROOT . '/views/news/view.php');
            require_once( 'views/news/view.php');

            /* 			echo 'actionView'; */
        }

        return true;
    }

}
