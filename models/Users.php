<?php

class Users {

    /** Returns single news items with specified id
     * @rapam integer &id
     */
    public static function getNewsItemByID($id) {
        $id = intval($id);

        if ($id) {
            /* 			$host = 'localhost';
              $dbname = 'php_base';
              $user = 'root';
              $password = '';
              $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password); */
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM news WHERE id=' . $id);

            /* $result->setFetchMode(PDO::FETCH_NUM); */
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    /**
     * Returns an array of news items
     */
    public static function getUsersList() {
        /* 		$host = 'localhost';
          $dbname = 'php_base';
          $user = 'root';
          $password = '';
          $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password); */

        $db = Db::getConnection();
        $usersList = array();

        $result = $db->query('SELECT * FROM users ORDER BY id ASC ');
        /*
          var_dump($result);
          exit();
         */

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['first_name'] = $row['first_name'];
            $newsList[$i]['last_name'] = $row['last_name'];

            $i++;
        }

        return $newsList;
    }

}
