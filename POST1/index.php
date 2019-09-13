<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>post</title>
</head>
<body>
    
    <div class="post">
        <div class="post-box">
            <form action="post1.php" method="post" enctype="multipart/form-data">
            <hr>
               <h2>Post here and fill up this box</h2>
               <hr>
               <input type="text" name="user_name" placeholder="Name">
               <input type="email" name="email" id="" placeholder="Email">
               <input type="file" name="file" id="">
               <textarea name="post" id="" cols="30" rows="5" placeholder="Type here"></textarea>
               <hr>
               <input type="submit" value="post here">
            </form>
        </div>
    </div>

    <?php 
    
    $conn = mysqli_connect('localhost','root','','post1');

    $data = mysqli_query($conn , "SELECT * FROM postbox ORDER BY ID desc");
    
    while ($tokra = mysqli_fetch_array($data)){ ?>
        

        <div class="post">
        <div class="post-box">
            <div class="img">
                <img src="profile/<?php echo $tokra['p_img'];?>" alt="">
            </div>
            <div class="name">
                <h2><?php echo $tokra['p_name'];?></h2>
                <p><?php echo $tokra['p_post'];?></p>
            </div>
        </div>
    </div>

   <?php }


    
    ?>



   

</body>
</html>