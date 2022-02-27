<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<?php

class Test {

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
    /*
      public static function getUsersList() {
      /*		$host = 'localhost';
      $dbname = 'php_base';
      $user = 'root';
      $password = '';
      $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password); */
    /*
      $db = Db::getConnection();
      $usersList = array();

      $result = $db->query('SELECT * FROM users ORDER BY id ASC ');
      exit(var_dump($result));



      $i = 0;
      while($row = $result->fetch()) {
      $usersList[$i]['id'] = $row['id'];
      $usersList[$i]['title'] = $row['first_name'];
      $UsersList[$i]['date'] = $row['Last_name'];
      $i++;
      }

      return $newsList;

      } */
}
