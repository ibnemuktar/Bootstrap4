<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>logn in</title>
</head>
<body>


     <div class="signup-box"> 
     <?php 
         
       
     ?>
             <div class="signup">
                 <h2>Log in here</h2>
                 <form action="log.php" method="post" enctype="multipart/form-data">
                    <label for="">Email</label><br>
                   <input type="email" name="email" placeholder="Email"><br>
                   <label for="">Password</label><br>
                   <input type="password" name="pass"><br><br>
                   <input type="submit" value="Sign up"><br>
                  <hr>
                  <a href="signup.php">Sign up now</a>
                  <hr>
               </form>
          </div>
     </div>

</body>
</html>