<!DOCTYPE>
<html>
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="test tasks" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>users</title>
        <222link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
        <222link href="template/css/style.css" rel="stylesheet" type="text/css" media="screen" />

        <!-- Только CSS -->
        <222link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                // display: inline !important;
            }

        </style>
        <?php
        include getcwd() . '/config/config.php';
        //  "C:\xampp\htdocs\mvc2\config\config.php"
        ?>
        <link rel="stylesheet" type="text/css"
              href="<?php echo $main_url . '/template/css/style.css' ?> ">  

    </head>
    <body>
        <style type="text/css">

        </style>
        <div id="menu-wrapper">
            <div id="menu">
                <ul>
                    <li class="current_page_item"><a href="#">Homepage</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Tascs</a></li>
                    <li><a href="#">About</a></li>

                </ul>
            </div>
            <!-- end #menu -->
        </div>

        <div id="wrapper">
            <style type="text/css">
                tr, td {
                    border: 2px solid black;
                }

            </style>



            <table>
                <thead> 
                    <tr>
                        <td><h3>id   </h3> </td>
                        <td><h3>  имя </h3> </td>
                        <td><h3> фамилия   </h3> </td>


                    </tr>

                </thead>
                <?php foreach ($usersList as $usersItem): ?>

                    <tr><td><?php echo $usersItem['id']; ?></td>   
                        <td> <?php echo $usersItem['first_name']; ?> </td> 

                        <td><?php echo $usersItem['last_name']; ?></td>


                    </tr>
                    <br>


                    </div>
                <?php endforeach; ?>

            </table>











        </div>
        <div id="footer">
            <p> <a href="https://www.youtube.com/channel/UCyBeFkIseVXxvu3ck9PQCPQ/videos">Alex Hubin</a> </a></p>
        </div>
        <!-- end #footer -->
    </body>
</html>
