<?php


$conn = mysqli_connect('localhost','root','','facebook');

mysqli_query($conn,"INSERT INTO login-box (name,email,post) VALUES ('$name','$email','$post') ");


echo $name = $_POST['name'];
echo $email = $_POST['email'];
echo $post = $_POST['post'];





?>