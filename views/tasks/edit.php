<?php
include_once('config/config.php');
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body {
            background: gold;
        }
        form {
            background: aquamarine;
            border: 2px solid red;
            width: 80vw;
        }

        form input {
            width: 60vw;
        }
    </style>
</head>
<body>
<h1>Редактировать задачу</h1>


<center>
    <form action="<?php   echo $main_url ?>task_update"  method="POST">
        <input type="hidden" name="id" value="<?php echo $taskItem['id']?>" >
        Задача   <input type="text" name="task" value="<?php echo $taskItem['task']?>"> <br>
        Меенджер      <input type="text" name="manager" value="<?php echo $taskItem['manager'] ?>" >  <br>
        Дата    <input type="date" name="data" value="<?php echo $taskItem['data'] ?>" > <br>
        Статус      <input type="status" name="status" value="<?php echo $taskItem['status'] ?>" > <br>
        <button type="submit">Сохранить данные</button> <br>
    </form>
</center>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

