<?php 

    mysql_connect();
    mysql_select_db('php_login');


    echo $name = $_POST['name'];
    echo $pass = $_POST['pass'];


   $data = mysql_query(" SELECT * FROM user_info where name='$name' and password='$pass' ");

    echo mysql_num_rows($data);

?>