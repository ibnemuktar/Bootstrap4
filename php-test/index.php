<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php test</title>
</head>
<body>
    <?php 
        $ibne = $_POST['test'];
    ?>
    <h2>we love in the programming language <?php echo $ibne; ?></h2>

    <div class="form">
        <form action="" method="POST">
            <input type="text" name="test">
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>