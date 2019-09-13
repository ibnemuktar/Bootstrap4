<?php
 
  $conn = mysqli_connect('localhost','root','','test');

   $name = $_POST['name'];
  echo  $email = $_POST['email'];
   $pass = $_POST['pass'];
   $phone = $_POST['phone'];
   $file = $_FILES['image']['name'];
   $file_temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($file_temp ,'upload/'. $file);

    mysqli_query( $conn ,"INSERT INTO user_info (fb_name,fb_email,fb_password,fb_phone,fb_image) VALUES ('$name','$name',' $pass','$phone','$file')");

  $email_data =  mysqli_query($conn ,"SELECT * FROM user_info where fb_email='$email'");

    $email_num = mysqli_num_rows($email_data);

    if ($email_num == 1) {
        header("location:signup.php?res=exists");
    }else{

            
    if($name && $pass && $phone && $file){

        mysqli_query( $conn ,"INSERT INTO user_info (fb_name,fb_email,fb_password,fb_phone,fb_image) VALUES ('$name','$name',' $pass','$phone','$file')");

        header("location:signup.php?res=ok");

    }else{

        header("location:signup.php?res=problem");

    }

    }


?>