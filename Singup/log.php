<?php 

  $conn = mysqli_connect('localhost','root','','signup');

 $email = $_POST['email'];
 $pass = $_POST['pass'];

 $email_data =  mysqli_query($conn ,"SELECT * FROM user_info where s_email='$email' ");
   
 $email_rowss = mysqli_num_rows($email_data);


if($email_rowss == 1 ){

    header("location:login.php?res=exists");

}else{


    if($email &&  $pass){
    
        mysqli_query($conn ,"INSERT INTO user_info (s_email,s_password) VALUES ('$email',' $pass') ");
        header("location:login.php?res=ok-data");
    
    }else{
    
        header("location:login.php?res=problem");
    }
    
}
 


?>