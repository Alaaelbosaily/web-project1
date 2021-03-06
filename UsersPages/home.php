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
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href=<?php echo  $css."styleUser.css"?>>

</head>

<body>

    <section class="home">

        <div class="content">
            <h3>Hand Picked Book to your door.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quod? Reiciendis ut porro iste totam.
            </p>
            <a href="about.html" class="white-btn">discover more</a>
        </div>

    </section>


    <section class="products" id="products">
        <h1 class="title">latest products</h1>


        <div class="box-container">

            <div class="box">

                <div class="image">
                    <img src="../images/darknet.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>title book</h3>
                    <div class="price"> $12.99 <span>$15.99</span> </div>
                </div>
                <input type="number" min="1" name="product_quantity" value="1" class="qty">
                <input type="hidden" name="product_name" value=">">
                <input type="hidden" name="product_price" value=">">
                <input type="hidden" name="product_image" value=">">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </div>

            <div class="box">

                <div class="image">
                    <img src="../images/darknet.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>

                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>title book</h3>
                    <div class="price"> $12.99 <span>$15.99</span> </div>
                </div>
                <input type="number" min="1" name="product_quantity" value="1" class="qty">
                <input type="hidden" name="product_name" value=">">
                <input type="hidden" name="product_price" value=">">
                <input type="hidden" name="product_image" value=">">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </div>

            <div class="load-more" style="margin-top: 2rem; text-align:center">
                <a href="shop.html" class="option-btn">load more</a>
            </div>

    </section>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="../images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>about us</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta
                    officia
                    corporis ratione saepe sed adipisci?</p>
                <a href="about.html" class="btn">read more</a>
            </div>

        </div>

    </section>

    <section class="home-contact">

        <div class="content">
            <h3>have any questions?</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cumque exercitationem repellendus,
                amet
                ullam voluptatibus?</p>
            <a href="contact.html" class="white-btn">contact us</a>
        </div>

    </section>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>