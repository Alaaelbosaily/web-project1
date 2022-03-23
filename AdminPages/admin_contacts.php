<?php
$noNavUser='';
include('../init.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>messages</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href=<?php echo $css.'admin_style.css'?>>

</head>

<body>



    <section class="messages">

        <h1 class="title"> messages </h1>

        <div class="box-container">

            <div class="box">
                <p> user id : <span>

                    </span> </p>
                <p> name : <span>

                    </span> </p>
                <p> number : <span>

                    </span> </p>
                <p> email : <span>

                    </span> </p>
                <p> message : <span>

                    </span> </p>
                <a href="admin_contacts.html?delete>" class="delete-btn">delete message</a>
            </div>

        </div>
        <h1 class="title"> messages </h1>

        <div class="box-container">

            <div class="box">
                <p> user id : <span>

                    </span> </p>
                <p> name : <span>

                    </span> </p>
                <p> number : <span>

                    </span> </p>
                <p> email : <span>

                    </span> </p>
                <p> message : <span>

                    </span> </p>
                <a href="admin_contacts.html?delete>" class="delete-btn">delete message</a>
            </div>

        </div>


    </section>









    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>