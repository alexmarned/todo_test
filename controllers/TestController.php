<?php

include_once 'models/Users.php';

class TestController {
    /*
      public function actionIndex()
      {
      echo 'index contreoller';
      return true;
      }

     */

    public function actionIndex() {

        $newsList = array();
        $newsList = Users::getUsersList();

        //	require_once(ROOT . '/views/news/index.php');

        exit();
        require_once( 'views/news/index.php');

        return true;
    }

}
