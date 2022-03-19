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
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="<link rel=" preconnect " href=" https://fonts.googleapis.com ">
  <link rel=" preconnect " href=" https://fonts.gstatic.com " crossorigin>
  <header class=" header1 ">
    <div class=" flex ">
      <p class=" logo ">admin <span>panel</span></p>
      <nav class=" navbar ">
        <a class=" aa " href=" # ">home</a>
        <a class=" bb " href=" # ">products</a>
        <a class=" cc " href=" # ">orders</a>
        <a class=" dd " href=" # ">users</a>
        <a class=" ff " href=" # ">contact us</a>
      </nav>
      <div class=" icons ">
        <i class=" fa-solid fa-bars "></i>
        <div id=" user-btn " class=" fas fa-user "></div>

      </div>
      <div class=" account-box ">
        <p>usermame: <span>admin01</span></p>
        <p>email: <span>admin01@gmail.com</span> </p>
        <div>
          <a class=" logout-btn " href=" # ">logout</a>
        </div>
      </div>
    </div>
  </header>
  <section class=" admin-container ">
    <div class=" dashboard ">
      <p>DASHBOARD</p>
    </div>
    <br><br><br>
    <div class=" boxs1 ">
      <div class=" boxone ">
        <div>
          <h3>0</h3>
        </div>
        <div class=" m ">
          <p> total pending </p>
        </div>
      </div>

      <div class=" box2 ">
        <div class=" gg ">
          <h3>0</h3>
        </div>
        <div class=" m ">
          <p>completed payments</p>
        </div>
      </div>
      <div class=" box3 ">
        <div>
          <h3>0</h3>
        </div>
        <div class=" m ">
          <p>porder placed </p>
        </div>
      </div>
      <div class=" box4 ">
        <div>
          <h3>0 </h3>
        </div>
        <div class=" m ">
          <p>products added</p>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <div class=" boxs2 ">
      <div class=" box5 ">
        <div>
          <h3> <?php echo $totalNormals?></h3>
        </div>
        <div class=" m ">
          <p>normal users</p>
        </div>
      </div>
      <div class=" box6 ">
        <div>
          <h3><?php echo $totalAdmins?></h3>
        </div>
        <div class=" m ">
          <p>admin users</p>
        </div>
      </div>
      <div class=" box7 ">
        <div>
          <h3><?php echo $totalUsers?></h3>
        </div>
        <div class=" m ">
          <p>total users</p>
        </div>
      </div>
      <div class=" box8 ">
        <div>
          <h3>0</h3>
        </div>
        <div class=" m ">
          <p> new message</p>
        </div>
      </div>
    </div>
  </section>
  </body>

</html>