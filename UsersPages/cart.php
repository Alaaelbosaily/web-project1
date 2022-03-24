<?php 
$noNavAdmin='';
$noNavUser='';
include('../init.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/styleUser.css">

</head>

<body>



    <div class="heading">
        <h3>shopping cart</h3>
        <p> <a href="home.html">home</a> / cart </p>
    </div>

    <section class="shopping-cart">

        <h1 class="title">products added</h1>

        <div class="box-container">



            <div class="box">
                <a href="cart.html?delete" class="fas fa-times"></a>
                <img src="../images/darknet.jpg" alt="">
                <div class="content8">
                    <h1>title book</h1>
                    <div class="price8">
                        <h2>$12.99</h2>
                    </div>
                </div>


                <form action="" method="post">
                    <input type="hidden" name="cart_id" value=">">
                    <input type="number" min="1" name="cart_quantity" value=">">
                    <input type="submit" name="update_cart" value="update" class="option-btn">
                </form>
                <div class="sub-total"> sub total : <span>

                    </span> </div>
            </div>

        </div>

        <div style="margin-top: 2rem; text-align:center;">
            <a href="cart.html?delete_all" class="delete-btn >">delete
                all</a>
        </div>

        <div class="cart-total">
            <p>grand total : <span>

                </span></p>
            <div class="flex">
                <a href="shop.html" class="option-btn">continue shopping</a>
                <a href="checkout.php" class="btn >">proceed to
                    checkout</a>
            </div>
        </div>

    </section>

    <script src="js/script.js"></script>

</body>

</html>