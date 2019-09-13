<?php 
   // session_start();

  $conn = mysqli_connect('localhost','root','','test');

     $email = $_POST['email'];
     $pass = $_POST['pass'];

     $email_data =  mysqli_query($conn ,"SELECT * FROM user_info where fb_email = '$email'");

     $email_num = mysqli_num_rows($email_data);

     if($email_num == 1){
/*
        $arr = mysqli_fetch_array($email_data);

        $_SESSION['name'] =  $arr['fb_name'];
        $_SESSION['image'] =  $arr['fb_image'];
        $_SESSION['phone'] =  $arr['fb_phone'];

*/

        header("location:profile.php?res=ok");
     }else{
        header("location:signup.php?res=reg");
     }
?>