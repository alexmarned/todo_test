<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<?php

//include_once ROOT. '/models/News.php';
include_once 'models/Tasks.php';

class TaskController
{
    public function __construct()
    {
      // session_start();
  //      include_once 'config/config.php';
     //   echo $main_url;
    }

    public function actionIndex()
    {
        $tasksList = array();
        $tasksList = Tasks::getTasksList();
        /*     var_dump($usersList);
          exit();
         */
        //	require_once(ROOT . '/views/news/index.php');
        require_once('views/tasks/index.php');
        // return true;
    }


    public function actionCreate()
    {
     //   echo 'create';
        //  exit();
        header('Location:' . 'views/tasks/create.php');
        //  return true;
    }

    public function actionEdit($id)
    {
      //  echo 'контролллер едит подключен' ;
     //   echo $id ;
            $taskItem = Tasks::edit($id);
         //   echo $id ;
         //   exit();
            require_once('views/tasks/edit.php');
        }

    /**
     *  update task date
     * return message
     */
    public function actionUpdate()
    {
        Tasks::Update();
        $success = ' Данные успешно обновлены';
        $_SESSION['message'] =  $success;

     //   setcookie("message", $success);
        header('Location: '. 'tasks');

    }

    /**
     *
     */
    public function actionStore()
    {
        echo 'контроллер запущен . store';
      //  exit();
        Tasks::store();
        $success = ' Данные успешно сохранены';
        $_SESSION['message'] =  $success;
        header('Location: '. 'tasks');

    }


    /**
     * @param $id
     */
    public function actiondestroy($id)
    {
        echo 'controller';
        die($id);
        include_once 'config/config.php';

// die($main_url);
        Tasks::destroy($id);
        header('Location: '. $main_url .  'tasks');
    }

}
