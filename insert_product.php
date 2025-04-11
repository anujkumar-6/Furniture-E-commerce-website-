<?php

include('../includes/connect.php');
if(isset($_POST['insert_product'])){

    $product_title = $_POST['product_title'];
    $description = $_POST['description'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';
    
    //accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    //accessing image temprory
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];


    //check condition
    if($product_title == '' || $description == '' ||  $product_category == ''
    || $product_brands == '' || $product_price == '' || $product_image1== '' || $product_image2 == '' || 
    $product_image3 ==''){
        echo "<script>alert('please fill all the availabe fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");


        //insert the product query

        $insert_products = "insert into `products` (product_title, product_description, category_id,
        brand_id, product_image1, product_image2, product_image3, product_price, date, status) values
        ('$product_title', '$description', '$product_category', '$product_brands', '$product_image1', '$product_image2', '$product_image3', '$product_price',
        NOW(), '$product_status')";

        $result_query = mysqli_query($con, $insert_products);
        
        if($result_query){
            echo "<script>alert('Successfully inserted the products')</script>";
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
     <!-- bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
     integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->

    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-2">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <lavel for="product_title" class="form-label">Product title</lavel>
                <input type="text" name="product_title" id="product_title" class="form-control" 
                placeholder="Enter product title" autocomplete="off" required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <lavel for="description" class="form-label">Product description</lavel>
                <input type="text" name="description" id="description" class="form-control" 
                placeholder="Enter product description" autocomplete="off" required="required">
            </div>

            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_category" id="" class="form-select">
                <option value="">Select Category</option>
                <?php
                    $select_query = "SELECT * FROM `categories`";
                    $result_query = mysqli_query($con, $select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                ?>
             
               </select>
            </div>


             <!-- Brands -->
             <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_brands" id="" class="form-select">
                <option value="">Select Brands</option>
                <?php
                    $select_query = "SELECT * FROM `brands`";
                    $result_query = mysqli_query($con, $select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";

                    }
                
                ?>
               </select>
            </div>

            <!-- image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <lavel for="product_image1" class="form-label">Product image 1</lavel>
                <input type="file" name="product_image1" id="product_image1" class="form-control" 
                required="required">
            </div>


             <!-- image 2 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <lavel for="product_image2" class="form-label">Product image 2</lavel>
                <input type="file" name="product_image2" id="product_image2" class="form-control" 
                required="required">
            </div>


            
             <!-- image 3 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <lavel for="product_image3" class="form-label">Product image 3</lavel>
                <input type="file" name="product_image3" id="product_image3" class="form-control" 
                required="required">
            </div>


              <!-- Price -->
              <div class="form-outline mb-4 w-50 m-auto">
                <lavel for="product_price" class="form-label">Product_price</lavel>
                <input type="text" name="product_price" id="product_price" class="form-control" 
                placeholder="Enter product price" autocomplete="off" required="required">
            </div>

             <!-- input-->
             <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>

        </form>
    </div>
</body>
</html>