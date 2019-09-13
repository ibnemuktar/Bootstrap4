<?php 
   $con = mysqli_connect('localhost','root','','post');
   
    $name =$_POST['name'];
    $post =$_POST['POSTT'];
 echo  $image =$_FILES['image']['name'];
echo $image_temp =$_FILES['image']['tmp_name'];

move_uploaded_file($image_temp,'profile/'. $image);

if($name &&  $image && $post){
	
	  mysqli_query($con,"INSERT INTO post1 (name,images,post) VALUES ('$name','$image','$post') ");

header("location:index.php");
	
}else{
	
	header("location: index.php");
	
}




?>

