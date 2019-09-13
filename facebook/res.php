<?php 

$con = mysqli_connect('localhost','root','','facebook');


 $name = $_POST['fname'];
 $surname = $_POST['surname'];
 $email = $_POST['email'];
 $reemail = $_POST['reemail'];
 $password = $_POST['pass'];

mysqli_query($con,"INSERT INTO fb (name , surname,email ,reemail , password) VALUES ('$name','$surname','$email','$reemail','$password')  ");

?> 
