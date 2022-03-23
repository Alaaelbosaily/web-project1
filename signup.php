<?php

$noNavAdmin='';
$noNavUser='';
    require('init.php');
    require($includes.'connect.php');
    
    $errors=array(
        'userName'=>'',
        'firstName'=>'',
        'lastName'=>'',
        'email'=>'',
        'password'=>'',
        'confirmPassword'=>'',
        'general'=>''
    );
    $values=array(
        'userName'=>null,
        'firstName'=>null,
        'lastName'=>null,
        'email'=>null,
        'password'=>null,
        'confirmPassword'=>null,
    );
    
    if(isset($_POST['submit'])){

        if(empty($_POST['userName'])){
            $errors['userName']='Required*';
        }else{
            $values['userName']=htmlspecialchars( $_POST['userName']);
        }

        if(empty($_POST['firstName'])){
            $errors['firstName']='Required*';
        }else{
            $values['firstName']=htmlspecialchars($_POST['firstName']);
        }

        if(empty($_POST['lastName'])){
            $errors['lastName']='Required*';
        }else{
            $values['lastName']=htmlspecialchars($_POST['lastName']);
        }

        if(empty($_POST['email'])){
            $errors['email']='Required*';
        }else{
            $values['email']=htmlspecialchars($_POST['email']);
        }

        if(empty($_POST['password'])){
            $errors['password']='Required*';
        }else{
            $values['password']=htmlspecialchars($_POST['password']);
        }

        if(empty($_POST['confirmPassword'])){
            $errors['confirmPassword']='Required*';
        }else{
            $values['confirmPassword']=htmlspecialchars($_POST['confirmPassword']);
        }

        if(!(empty($values['userName'])||empty($values['firstName'])||empty($values['lastName'])
        ||empty($values['email'])||empty($values['password'])||empty($values['confirmPassword']))){
            
            if($values['password']===$values['confirmPassword']){
                try{
                    $prepare=$con->prepare("SELECT * FROM users WHERE email=? ");
                    $prepare->execute(array($values['email']));
                    $count=$prepare->rowCount();
                    
                    $prepareUserName=$con->prepare("SELECT * FROM users WHERE userName=? ");
                    $prepareUserName->execute(array($values['userName']));
                    $countUserName=$prepareUserName->rowCount();
                    if($countUserName>0){
                        $errors['userName']='This user name is exist';
                    }
                    if($count>0){
                        $errors['email']='This email is exist';
                    }

                    if(!($count>0||$countUserName>0)){
                        try{
                            $prepare=$con->prepare('INSERT INTO users(userName,firstName,lastName,email,password) VALUES(?,?,?,?,sha1(?))');
                            $prepare->execute(array($values['userName'],$values['firstName'],$values['lastName'],$values['email'],$values['password']));
                            
                            header("Location:login.php"); 
                            exit();
                        }catch(PDOException $e){
            
                        }
                    }
    
                }catch(PDOExceptio $e){
    
                }
            }else{
                $errors['confirmPassword']='not matched';
            }            
            
        }else{
            $errors['general']= 'Fill All Fields';
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href=<?php echo $css."admin_style.css"?>>
</head>

<body>
    <div class="form-container">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" autocomplete="off">
            <h3>register now</h3>
            <input type="text" name="userName" placeholder="User Name" class="box" autocomplete="off">
            <span class="error-span">
                <?php echo $errors['userName']?>
            </span>
            <input type="text" name="firstName" placeholder="FirstName" class="box" autocomplete="off">
            <span class="error-span">
                <?php echo $errors['firstName']?>
            </span>
            <input type="text" name="lastName" placeholder="LastName" class="box" autocomplete="off">
            <span class="error-span">
                <?php echo $errors['lastName']?>
            </span>
            <input type="email" name="email" placeholder="Email" class="box" autocomplete="off">
            <span class="error-span">
                <?php echo $errors['email']?>
            </span>
            <input type="password" name="password" placeholder="Password" class="box" autocomplete="off">
            <span class="error-span">
                <?php echo $errors['password']?>
            </span>
            <input type="password" name="confirmPassword" placeholder="Confirm Password" class="box" autocomplete="off">
            <span class="error-span">
                <?php echo $errors['confirmPassword']?>
            </span>

            <input type="submit" name="submit" value="register now" class="btn">
            <p>already have an account? <a href="login.html">login now</a> </p>
        </form>
    </div>
</body>

</html>