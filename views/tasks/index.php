<?php
include_once 'config/config.php';
//   session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Tasks</title>
        <style>
            body {
                background: gold;
            }
            table {
                margin: auto;
            }

            ul {
                list-style: none; /*убираем маркеры списка*/
                margin: 0; /*убираем верхнее и нижнее поле, равное 1em*/
                padding-left: 0; /*убираем левый отступ, равный 40px*/
            }
            a {
                text-decoration: none; /*убираем подчеркивание текста ссылок*/
            }
            div#menu   ul li {
                float: left;
                font-size: 1.3rem;
                margin-right: 2rem;
            }

            tr, td {
                border: 2px solid black;
            }
        </style>
    </head>
    <body>
        <div id="menu-wrapper">
            <div id="menu">
                <ul>
                    <li class="current_page_item"><a href="#">Homepage</a></li>
                    <li><a href="#">Users</a></li>                  
                    <li><a href="#">About</a></li>

                </ul>
            </div>  
        </div>
        <p><a href="<?php echo $main_url ?>create_task" > Создать навое задание </a> </p>


        <?php
        /*
          echo $_SESSION['NowLang'];
          echo '<pre>';
          var_dump($_SESSION);
          var_dump($_COOKIE['message']);
          echo '</pre>';

         */

        if (isset($_SESSION['message'])):
            ?>
            <div class="msg">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>


        <style type="text/css">
            table {
                max-width: 90%;
                text-align: center;
            }

        </style>

    <center>      <h1>List of tasks</h1> </center>
    <table>
        <thead> 
            <tr>
                <td><h3>id   </h3> </td>
                <td><h3>  Задача  </h3> </td>
                <td><h3> Ответственный   </h3> </td>
                <td><h3>дата  </h3> </td>
                <td><h3>статус </h3> </td> 
                <td><h3>редактировать </h3> </td> 
                <td><h3>удалить </h3> </td> 
            </tr>

        </thead>
        <?php $id = 0; ?>
        <?php foreach ($tasksList as $tasksItem): ?>
            <tr>
                <td><?php echo $tasksItem['id']; ?></td>  <?php $id = $tasksItem['id']; ?>
                <td><?php echo $tasksItem['task']; ?></td>           
                <td> <?php echo $tasksItem['manager']; ?> </td>
                <td><?php echo $tasksItem['data']; ?></td>
                <td><?php echo $tasksItem['status']; ?></td>  
                <td><a href = "<?php echo $main_url ?>edit_task/<?php echo $id ?>" > edit</a><?php ?></td>
                <td><a href = "<?php echo $main_url ?>task_destroy/<?php echo $id ?>" > delete</a><?php ?></td>
            </tr>
            <br>



        <?php endforeach; ?>

    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>