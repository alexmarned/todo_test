<?php


class Tasks
{

    public function __construct()
    {
      //  session_start();
    }


	/**
	* Returns an array of news items
	*/
	public static function getTasksList() {
		$db = Db::getConnection();
		$tasksList = array();
		$result = $db->query('SELECT * FROM tasks  ');
    		$i = 0;
		while($row = $result->fetch()) {         
			$tasksList[$i]['id'] = $row['id'];
			$tasksList[$i]['task'] = $row['task'];
			$tasksList[$i]['data'] = $row['data'];                 
			$tasksList[$i]['status'] = $row['status'];
			$tasksList[$i]['manager'] = $row['manager'];
			$i++;
		}
                    
		return $tasksList;
	
}
/**
 * clean enter value 
 * return the clean value
 * @return $value
 */
public static function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}


    /**
     * @param $id
     * @return mixed*
     *
     */
public static function edit($id){

    echo $id ;
  //  exit();

    $db = Db::getConnection();

    $result = $db->query('SELECT * FROM tasks WHERE id =' . $id);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $taskItem = $result->fetch();
//cho '<pre>';
   // var_dump($taskItem);
   // exit();
    return $taskItem;
}

    public static function Update()
    {
        /*
        echo $id();
        exit();
        */
        $edit_id = $_POST['id'];
        $edit_task = $_POST['task'] ?? '';
        $edit_data = $_POST['data'] ?? '';
        $edit_status = $_POST['status'] ?? '';
        $edit_manager = $_POST['manager'] ?? '';

        // $get_id = $_GET['id'] ?? '';
        $db = Db::getConnection();
        $sqll = "UPDATE tasks SET task=?, data=?, status=? , manager=? WHERE id=?";
        $querys = $db->prepare($sqll);
        $querys->execute([$edit_task, $edit_data, $edit_status, $edit_manager,  $edit_id]);
      //  echo 'попытка апдейта';
        //   exit();

        //header('Location: '. $_SERVER['HTTP_REFERER']);
        $success = 'успешно обновлены';
        $_SESSION['message'] =  $success;
    }


    public static function store()
    {
//die('model taskx/ storer');
        $store_task = $_POST['task'] ?? '';
        $store_data = $_POST['data'] ?? '';
        $store_status = $_POST['status'] ?? '';
        $store_manager = $_POST['manager'] ?? '';

        echo $store_data . '<br>';
        echo $store_manager . '<br>';
      //  exit();

        // $get_id = $_GET['id'] ?? '';
        $db = Db::getConnection();
        $sqll = "INSERT INTO tasks  (task, data, status , manager) VALUE (?,?,?,?)";
        $querys = $db->prepare($sqll);
        $querys->execute([$store_task, $store_data, $store_status, $store_manager ]);
    }



    public static function destroy($id)
    {
        $db = Db::getConnection();

        $sql = "DELETE FROM tasks WHERE id=?";
        $query = $db->prepare($sql);
        $query->execute([$id]);
        die($id);


    //    header('Location: '. 'tasks');


    }

}