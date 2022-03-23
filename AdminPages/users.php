<?php
$noNavUser='';
include('../init.php');
require($includes.'connect.php');

    try{
        $fetchPrepare=$con->prepare('SELECT userId,userName,email,CONCAT(firstName ," ", lastName) AS fullName FROM users WHERE userGroup=?');
        $fetchPrepare->execute(array(1));
        $result = $fetchPrepare->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo  $css."admin_style.css"?>>
    <title>Document</title>
</head>

<body>



    <section class="admins">
        <h2>Admins</h2>
        <div class="titles">
            <span>user Id</span>
            <span>user Name</span>
            <span>user Email</span>
            <span>user Full Name</span>
        </div>
        <div class="all-users">
            <?php 
        if(count($result)>0){
            foreach($result as $value){
                echo' <div class="users-data titles">
                <span> '.htmlspecialchars( $value['userId']).'</span>
            <span>'.htmlspecialchars( $value['userName']).'</span>
            <span>'. htmlspecialchars($value['email']).'</span>
            <span>'. htmlspecialchars($value['fullName']).'</span>
    
            </div>';
            }
            }
    
            ?>
        </div>
        <form action="<?php $_SERVER['PHP_SELF']?>" class="btn-container">
            <input type="submit" name="addNewUser" value="Add New" class="addNewUser btn">
        </form>

    </section>
    <section class="admins">
        <h2>Admins</h2>
        <div class="titles">
            <span>user Id</span>
            <span>user Name</span>
            <span>user Email</span>
            <span>user Full Name</span>
        </div>
        <div class="all-users">
            <?php 
        if(count($result)>0){
            foreach($result as $value){
                echo' <div class="users-data titles">
                <span> '.htmlspecialchars( $value['userId']).'</span>
            <span>'.htmlspecialchars( $value['userName']).'</span>
            <span>'. htmlspecialchars($value['email']).'</span>
            <span>'. htmlspecialchars($value['fullName']).'</span>
    
            </div>';
            }
            }
    
            ?>
        </div>
        <form action="<?php $_SERVER['PHP_SELF']?>" class="btn-container">
            <input type="submit" name="addNewUser" value="Add New" class="addNewUser btn">
        </form>

    </section>
</body>

</html>