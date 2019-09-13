
    


 $conn = mysqli_connect('localhost','root','','signup');
   
  

   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   $number = $_POST['phone'];
   $files = $_FILES['image']['name'];
   $files_temp = $_FILES['image']['tmp_name'];
   move_uploaded_file($files_temp, 'upload/'. $files);
 
 
 //  $email_data =  mysqli_query($conn ,"SELECT * FROM sign where s_email='$email' ");
    
  // mysqli_num_rows($email_data);
 
     if($name && $email && $pass && $files){
 
         mysqli_query($conn,"INSERT INTO sign (s_name,s_email,s_pass,numb,image) VALUES ('$name',' $email','$pass',' $number','$files') ");
     
     header("location:signup.php?res=ok");
     
     }else{
     
         header("location:signup.php?res=problem");
     }
     
 
 
 



?>