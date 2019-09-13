<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Signup form</title>
</head>
<body>
    <div class="signup-box">

    <?php 

    if(isset($_GET['res'])){

        if($_GET['res']== 'ok'){

            echo "<h2 style='font-size:15px;font-family:sans sarif;color:green;'>complite your singing form</h2>";
     
           }elseif ($_GET['res']== 'problem') {
             echo "<h2 style='font-size:15px;font-family:sans sarif;color:red;'>Please singup at first</h2>";
           }elseif($_GET['res']== 'exists'){

            echo "<h2 style='font-size:15px;font-family:sans sarif;color:orange;'>This email is already exists plese input new email</h2>";
           }elseif ($_GET['res']== 'reg') {
            echo "<h2 style='font-size:15px;font-family:sans sarif;color:red;'>please at first singing and then log in please</h2>";
           }
     
    }

    




    ?>

        <div class="signup">
            <h2>Please sign up now and enter your account</h2>
            <form action="res.php" method="POST" enctype="multipart/form-data">
                <label for="">User Name</label><br>
                <input type="text" name="name"><br>
                <label for="">Email</label><br>
                <input type="email" name="email" placeholder="Email"><br>
                <label for="">Password</label><br>
                <input type="password" name="pass"><br>
                <label for="">Phone no.</label><br>
                <input type="number" name="phone"><br>
                <label for="">Take your file</label><br>
                <input type="file" name="image"><br><br>
                <input type="submit" value="Sign up"><br>
                <hr>
                <a href="login.php">log in here.have an account</a>
                <hr>
            </form>
        </div>
    </div>
</body>
</html>