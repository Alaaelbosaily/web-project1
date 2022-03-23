<?php 
$noNavAdmin='';
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
    <link rel="stylesheet" href=<?php echo $css."styleUser.css"?>>

</head>

<body>


    <div class="heading">
        <h3>shopping cart</h3>
        <p> <a href="home.html">home</a> / cart </p>
    </div>

    <section class="shopping-cart">

        <h1 class="title">products added</h1>

        <div class="box-container">
            <?php
         $grand_total = 0;
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){   
      ?>
                <div class="box">
                    <a href="cart.html?delete=<?php echo $fetch_cart['id']; ?>" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
                    <img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" alt="">
                    <div class="name">
                        <?php echo $fetch_cart['name']; ?>
                    </div>
                    <div class="price">$
                        <?php echo $fetch_cart['price']; ?>/-
                    </div>
                    <form action="" method="post">
                        <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                        <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                        <input type="submit" name="update_cart" value="update" class="option-btn">
                    </form>

                </div>
                <?php
      $grand_total += $sub_total;
         }
      }else{
         echo '<p class="empty">your cart is empty</p>';
      }
      ?>
        </div>

        <div style="margin-top: 2rem; text-align:center;">
            <a href="cart.html?delete_all" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>" onclick="return confirm('delete all from cart?');">delete all</a>
        </div>

        <div class="cart-total">

            <div class="flex">
                <a href="shop.html" class="option-btn">continue shopping</a>
                <a href="checkout.html" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">proceed to
                    checkout</a>
            </div>
        </div>

    </section>

    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>


</body>

</html>