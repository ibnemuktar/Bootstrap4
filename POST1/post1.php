<?php 

$con = mysqli_connect('localhost','root','','post1');


echo $name = $_POST['user_name'];
echo $email = $_POST['email'];
echo $post = $_POST['post'];

echo $img = $_FILES['file']['name'];
echo $img_temp = $_FILES['file']['tmp_name'];

move_uploaded_file($img_temp,'profile/'. $img);

if( $name &&  $email ){
    mysqli_query($con , "INSERT INTO postbox (p_name,p_email,p_img,p_post) VALUES ('$name','$email','$img','$post') ");

    header("location:index.php");

}else{

    header("location:index.php");
    
}






?>