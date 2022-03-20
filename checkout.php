<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <link rel="stylesheet" href="CSS/styleUser.css">
</head>

<body>
    <?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

    <header class="header">

        <div class="header-1">
            <div class="flex">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <p> new <a href="login.php">login</a> | <a href="register.php">register</a> </p>
            </div>
        </div>

        <div class="header-2">
            <div class="flex">
                <a href="home.php" class="logo">Bookly.</a>

                <nav class="navbar">
                    <a href="home.php">home</a>
                    <a href="about.php">about</a>
                    <a href="shop.php">shop</a>
                    <a href="contact.php">contact</a>
                    <a href="orders.php">orders</a>
                </nav>

                <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>
                    <a href="search_page.php" class="fas fa-search"></a>
                    <div id="user-btn" class="fas fa-user"></div>
                    <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
                    <a href="cart.php"> <i class="fas fa-shopping-cart"></i>
                        <span>(<?php echo $cart_rows_number; ?>)</span> </a>
                </div>

                <div class="user-box">
                    <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                    <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
                    <a href="logout.php" class="delete-btn">logout</a>
                </div>
            </div>
        </div>

    </header>
    <div class="heading">
        <h3>checkout</h3>
        <p><a href="home.php">home</a> / checkout</p>
    </div>

    <section class="display-order"></section>

    <section class="checkout">

        <form action="" method="post">
            <h3>place your order</h3>
            <div class="flex">
                <div class="inputBox">
                    <span>your name :</span>
                    <input type="text" name="name" required placeholder="enter your name">
                </div>
                <div class="inputBox">
                    <span>your number :</span>
                    <input type="text" name="number" required placeholder="enter your number">
                </div>
                <div class="inputBox">
                    <span>your email :</span>
                    <input type="text" name="email" required placeholder="enter your email">
                </div>
                <div class="inputBox">
                    <span>payment method :</span>
                    <select class="method">
                        <option value="cash on delivery">cash on delivery</option>
                        <option value="credit card">credit card</option>
                        <option value="paypal">paypal</option>
                        <option value="paytm">paytm</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>address line 01 :</span>
                    <input type="number" name="flat" required placeholder="e.g. flat no.">
                </div>
                <div class="inputBox">
                    <span>address line 01 :</span>
                    <input type="text" name="street" required placeholder="e.g. street name.">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" required placeholder="e.g. Suez.">
                </div>
                <div class="inputBox">
                    <span>state :</span>
                    <input type="text" name="state" required placeholder="e.g. Suez.">
                </div>
                <div class="inputBox">
                    <span>country :</span>
                    <input type="text" name="country" required placeholder="e.g. Egypt.">
                </div>
                <div class="inputBox">
                    <span>pin code :</span>
                    <input type="number" min="0" name="pin_code" required placeholder="e.g. 123456.">
                </div>
            </div>
            <input type="submit" value="order now" class="btn" name="order_btn">

        </form>
    </section>
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php">home</a>
                <a href="about.php">about</a>
                <a href="shop.php">shop</a>
                <a href="contact.php">contact</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="login.php">login</a>
                <a href="register.php">register</a>
                <a href="cart.php">cart</a>
                <a href="orders.php">orders</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
                <p> <i class="fas fa-phone"></i> +111-222-3333 </p>
                <p> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </p>
                <p> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </p>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <p class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr. web designer</span> </p>

    </section>
</body>

</html>