<?php

//include_once ROOT. '/models/News.php';
include_once 'models/Users.php';

class UsersController {

    public function actionIndex() {

        $usersList = array();
        $usersList = Users::getUsersList();
        /*     var_dump($usersList);
          exit();
         */


        //	require_once(ROOT . '/views/news/index.php');
        require_once( 'views/users/index.php');

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
