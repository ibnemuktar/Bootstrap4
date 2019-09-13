<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $_SESSION['name'];?></title>
</head>
<body>
    <h2><?php echo $_SESSION['name'];?></h2>
    <p><?php echo $_SESSION['phone'];?></p>
    <img src="profile/<?php echo $_SESSION['image'];?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">

    <a href="logout.php">log out</a>
</body>
</html>