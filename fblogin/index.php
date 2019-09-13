<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div id="form" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                     <form action="" method="post">
                        <h2>Log in here</h2>
                        <p class="lead">Please fill up this box</p>
                        <div class="form-group">
                          <label for="">User Name</label>
                          <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          <label for="">Email</label>
                          <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId"><br>
                            <input type="submit" value="Log in">
                          <small id="helpId" class="text-muted">Log in here now</small>
                        </div>
                        </form>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>


<?php 
    $username = $_POST['username'];
    $email = $_POST['email'];

   $con=mysqli_connect('localhost','root','','facebook');
   mysqli_query($con,"INSERT INTO login (user_name,email) VALUES ('$username','$email') ");
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>