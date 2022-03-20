<?php
  require('connect.php');
  try{
    $prepareTotal=$con->prepare("SELECT * FROM users");
    $prepareTotal->execute();
    $totalUsers=$prepareTotal->rowCount();

    $prepareNoramls=$con->prepare("SELECT * FROM users WHERE userGroup=1");
    $prepareNoramls->execute();
    $totalNormals=$prepareNoramls->rowCount();

    $prepareAdmins=$con->prepare("SELECT * FROM users WHERE userGroup=2");
    $prepareAdmins->execute();
    $totalAdmins=$prepareAdmins->rowCount();

  }catch(PDOException $e){

  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="<link rel=" preconnect " href=" https://fonts.googleapis.com ">
  <link rel=" preconnect " href=" https://fonts.gstatic.com " crossorigin>
  </head>
  <body>
      
    <header class=" header1 ">
      
          <p class=" logo ">admin <span>panel</span></p>

          <nav class=" navbar ">
            <a class=" aa " href=" # ">home</a>
            <a class=" bb " href=" # ">products</a>
            <a class=" cc " href=" # ">orders</a>
            <a class=" dd " href=" # ">users</a>
            <a class=" ff " href=" # ">contact us</a>
          </nav>

          <div class=" icons ">
            <i class=" fa-solid fa-user user-icon "></i>
            <i class=" fa-solid fa-bars menu-icon "></i>
          </div>

      <div class=" account-box ">
        <p>usermame: <span>admin01</span></p>
        <p>email: <span>admin01@gmail.com</span> </p>
        <div>
          <a class=" logout-btn " href=" # ">logout</a>
        </div>
      </div>    
    </header>
    
    <section>
      <h2>Dashboard</h2>
      <div class=" container ">
        <div class=" box ">
          <span><?php echo $totalAdmins?></span>
          <span class=" text-container ">Total Users</span>
        </div>
        <div class=" box ">
          <span><?php echo $totalNormals?></span>
          <span class=" text-container ">Total Users</span>
        </div>
        <div class=" box ">
          <span>0</span>
          <span class=" text-container ">Total Users</span>
        </div>
        <div class=" box ">
          <span>0</span>
          <span class=" text-container ">Total Users</span>
        </div>
        <div class=" box ">
          <span>0</span>
          <span class=" text-container ">Total Users</span>
        </div>
        <div class=" box ">
          <span>0</span>
          <span class=" text-container ">Total Users</span>
        </div>
        <div class=" box ">
          <span>0</span>
          <span class=" text-container ">Total Users</span>
        </div>
        <div class=" box ">
          <span>0</span>
          <span class=" text-container ">Total Users</span>
        </div>


      </div>
    </section>


  </body>

</html>