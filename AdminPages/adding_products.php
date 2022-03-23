<?php

$noNavUser='';
include('../init.php');

    session_start();
    // if(!($_SESSION['userId']==0)){
    //     header("Location:login.php");
    // }  
    require($includes.'connect.php');
    $errors=[
        'generalError'=>'',
        'productName'=>'',
        'productAuthor'=>'',
        'productpublisherName'=>'',
        'productDescription'=>'',
        'productCategory'=>'',
        'productCode'=>'',
        'productPrice'=>'',
        'productQuantity'=>'',
        
    ];
    $values=[
        'productName'=>'',
        'productAuthor'=>'',
        'productpublisherName'=>'',
        'productDescription'=>'',
        'productCategory'=>'',
        'productCode'=>'',
        'productPrice'=>'',
        'productQuantity'=>'',
    ];
    
    if(isset($_POST['addProduct'])){
        if(empty($_POST['productName'])){
            $errors['productName']='Required';
        }else{
            $values['productName']=$_POST['productName'];
        }
        
        if(empty($_POST['productAuthor'])){
            $errors['productAuthor']='Required';
        }else{
            $values['productAuthor']=$_POST['productAuthor'];
        }

        if(empty($_POST['productpublisherName'])){
            $errors['productpublisherName']='Required';
        }else{
            $values['productpublisherName']=$_POST['productpublisherName'];
        }

        if(empty($_POST['productDescription'])){
            $errors['productDescription']='Required';
        }else{
            $values['productDescription']=$_POST['productDescription'];
        }

        if(empty($_POST['productCategory'])){
            $errors['productCategory']='Required';
        }else{
            $values['productCategory']=$_POST['productCategory'];
        }

        if(empty($_POST['productCode'])){
            $errors['productCode']='Required';
        }else{
            $values['productCode']=$_POST['productCode'];
        }

        if(empty($_POST['productPrice'])){
            $errors['productPrice']='Required';
        }else{
            $values['productPrice']=$_POST['productPrice'];
        }

        if(empty($_POST['productQuantity'])){
            $errors['productQuantity']='Required';
        }else{
            $values['productQuantity']=$_POST['productQuantity'];
        }

        if(!(empty($values['productName'])||empty($values['productAuthor'])
        ||empty($values['productpublisherName'])||empty($values['productDescription'])
        ||empty($values['productCategory'])||empty($values['productCode'])
        ||empty($values['productPrice'])||empty($values['productQuantity']))){
            try{
                
                $prepareCheck=$con->prepare('SELECT * FROM books WHERE name=?');
                $prepareCheck->execute(array($values['productName']));
                $checkedCount=$prepareCheck->rowcount();
                

                if($checkedCount >0){
                    $errors['generalError']='This book is exist';
                }else{
                    $prepareInsert=$con->prepare('INSERT INTO books(name,authorName,publisherName,description,category,code,price,stock) VALUES(?,?,?,?,?,?,?,?)');
                    $prepareInsert->execute(array($values['productName'],$values['productAuthor'],$values['productpublisherName']
                    ,$values['productDescription'],$values['productCategory'],$values['productCode'],$values['productPrice'],$values['productQuantity'],));
                    $errors['generalError']='Done';
                }


            }catch(PDOException $e){

            }
        }

    }
    if(isset($_POST['deleteProduct'])){
        
            try{
                
                $deletePrepare=$con->prepare('delete from books where bookId=?');
                $deletePrepare->execute(array($_POST['hiddenId']));
            
                }catch(PDOEception $e){
            
                }
        
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href=<?php echo $css."admin_style.css"?>>
    <link rel="stylesheet" href="<link rel=" preconnect " href=" https://fonts.googleapis.com ">
    <link rel=" preconnect " href=" https://fonts.gstatic.com " crossorigin>
    <title>Document</title>
</head>

<body>
    
        <section>
            <h2>Add Products</h2>
            <div class=" container ">
    <form action=" <?php $_SERVER[ 'PHP_SELF' ]?>" method="post">
    <span class="error">
        <?php echo $errors['generalError']?>
    </span>
    <input type="text" name="productName" placeholder="Product Name">
    <span class="error">
        <?php echo $errors['productName']?>
    </span>
    <input type="text" name="productAuthor" placeholder="Product Author">
    <span class="error">
        <?php echo $errors['productAuthor']?>
    </span>
    <input type="text" name="productpublisherName" placeholder="Product publisher Name">
    <span class="error">
        <?php echo $errors['productpublisherName']?>
    </span>
    <input type="text" name="productDescription" placeholder="Product Description">
    <span class="error">
        <?php echo $errors['productDescription']?>
    </span>
    <input type="text" name="productCategory" placeholder="Product Category">
    <span class="error">
        <?php echo $errors['productCategory']?>
    </span>
    <input type="text" name="productCode" placeholder="Product Code">
    <span class="error">
        <?php echo $errors['productCode']?>
    </span>
    <input type="text" name="productPrice" placeholder="Product Price">
    <span class="error">
        <?php echo $errors['productPrice']?>
    </span>
    <input type="text" name="productQuantity" placeholder="Product Quantity">
    <span class="error">
        <?php echo $errors['productQuantity']?>
    </span>

    <input type="submit" name="addProduct" value="Add Product" class="btn">
    </form>
    </div>
    </section>
    <section>
        <h2>Added Products</h2>
        <div class="container">
            <?php 
            try{
                $prepareCheck=$con->prepare('SELECT * FROM books');
                $prepareCheck->execute();
                $result = $prepareCheck->fetchAll(PDO::FETCH_ASSOC);
                if(count($result)>0){
                    foreach($result as $book){
                        echo('<div class="box">
                        <img src="../images/01.png" alt="productImage"data-id="'.$book['bookId'].'">
                        <span class="productName" data-id="'.$book['bookId'].'">'.$book['name'].'</span>
                        <span class="productPrice"data-id="'.$book['bookId'].'">'.$book['price'].'<span>/$</span></span>
                        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            <input type="hidden" name="hiddenId" value="'.$book['bookId'].'">
            <input type="submit" name="deleteProduct" value="Delete" class="delete-btn">
            </form>

            <span class="update-btn btn">Update</span>
        </div>'); } } }catch(PDOException $e){ } ?>


        </div>
    </section>

    </body>

</html>