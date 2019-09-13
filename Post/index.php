<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post in php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="post">
        <form action="post.php" method="POST" enctype="multipart/form-data">
        <div class="post-box">
            <hr>
            <h2>Post here If you wise</h2>
            <hr>
            <input type="text" name="name" placeholder="Your name">
            <input type="file" name="image" id="">
            <hr>
            <textarea name="POSTT" id="" cols="40" rows="5"></textarea>
            <hr>
            <input type="submit" value="POST">
        </div>
        </form>
    </div>
	
	<?php
		$conn = mysqli_connect('localhost','root','','post');
	    $post =	mysqli_query($conn , "SELECT * FROM post1  ORDER BY ID desc");
	
		
		
		
		
		while ($data = mysqli_fetch_array($post)){ ?>
			
			
			  <div class="post">
				<div class="upic">
					<img src="profile/<?php echo $data['images'];?>" alt="">
				</div>
				<div class="post-text">
					<h2><?php echo $data ['name'];?></h2>
					<hr>
					<p><?php echo $data['post'];?></p>
				</div>
			</div>
		
	<?php   }	
	?>

  

</body>
</html>