<?php
$noNavAdmin='';
$noNavUser='';

include('init.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href=<?php echo $css."admin_style.css"?>>
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>login</h3>
            <input type="email" name="name" placeholder="enter your email" required class="box">
            <input type="password" name="name" placeholder="enter your password" required class="box">
            <input type="submit" name="submit" value="Login" class="btn">
            <p>don't have an account? <a href="index.php">register now</a> </p>

        </form>
    </div>
</body>

</html>