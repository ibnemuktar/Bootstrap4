<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title><h2><?php echo $_SESSION['name'];?></h2></title>
</head>
<body>

<div class="signup">
            <img src="upload/<?php echo $_SESSION['image'];?>" alt="">
            <h2><?php echo $_SESSION['name'];?></h2>
            <p><?php echo $_SESSION['phone'];?></p>
            <a href="#">Log out</a>
        </div>
    </div>
</body>
</html>