
<?php 
      session_start();

       $conn = mysqli_connect('localhost','root','','test');


        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $email_data =  mysqli_query($conn ,"SELECT * FROM user_info where fb_email = '$email' and fb_password = '$pass'");

        $email_num = mysqli_num_rows($email_data);

       



           
        if( $email_num == 1){
           
          $tokra = mysqli_fetch_array($email_data);

          echo $_SESSION['name'] = $tokra['fb_name'];
          echo $_SESSION['phone'] = $tokra['fb_phone'];
          echo $_SESSION['image'] = $tokra['fb_image'];



        header("location:profile.php?res=ok");
       }else {

         header("location:signup.php?res=reg");
        }

?>