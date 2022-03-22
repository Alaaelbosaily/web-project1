<?php
  session_start();

  require('connect.php');
 
  if(isset($_SESSION['userName'])){
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
  }else{
    exit();
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
    <link rel="stylesheet" href="css/admin_style.css">
    <link rel="stylesheet" href="<link rel=" preconnect " href=" https://fonts.googleapis.com ">
  <link rel=" preconnect " href=" https://fonts.gstatic.com " crossorigin>
  </head>
  <body>
      
    <?php include('inline_header.php')?>
    
    <section>
      <h2>Dashboard</h2>
      <div class=" container ">
        <div class=" box ">
          <span><?php echo $totalAdmins?></span>
          <span class=" text-container ">Total Admins</span>
        </div>
        <div class=" box ">
          <span><?php echo $totalNormals?></span>
          <span class=" text-container ">Total Normals</span>
        </div>
        <div class=" box ">
          <span><?php echo $totalUsers?></span>
          <span class=" text-container ">Total Users</span>
        </div>
        <div class=" box ">
          <span>0</span>
          <span class=" text-container ">Pending Orders</span>
        </div>
        <div class=" box ">
          <span>0</span>
          <span class=" text-container ">Accepted Orders</span>
        </div>
        <div class=" box ">
          <span>0</span>
          <span class=" text-container ">Canceled Orders</span>
        </div>
        <div class=" box ">
          <span>0</span>
          <span class=" text-container ">Total Orders</span>
        </div>
        <div class=" box ">
          <span>0</span>
          <span class=" text-container ">Total Users</span>
        </div>


      </div>
    </section>


  </body>

</html>