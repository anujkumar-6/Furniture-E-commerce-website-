<?php
include('../includes/connect.php');
include('../functions/common_function.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
     <!-- bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
     integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />

     <style>
        body{
            overflow:hidden;
        }
     </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Registration</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <img src="../images/admin1.jpg" alt="Admin Registration" class="img-fluid">
            </div>

            <div class="col-lg-6 col-xl-4">
                <form action="" method="POST">
                    <div class="form-outline mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter Your username" 
                        required="required" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Your email" 
                        required="required" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Your password" 
                        required="required" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="confirm_password" class="form-label">Confirm_password</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter Your confirm_password" 
                        required="required" class="form-control">
                    </div>

                    <div>
                        <input type="submit" class="bg-info py-2 px-3 border-0 btn btn-rounded" 
                        name="admin_registration" value="Register">

                        <p class="small fw-bold mt-2 pt-1">Do you already have an account? 
                        <a href="admin_login.php" class="link-danger">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>



<!-- php code -->

<?php

// if(isset($_POST['admin_tabel'])){
//     $admin_name = $_POST['admin_name'];
//     $admin_email = $_POST['admin_email'];
//     $admin_password = $_POST['admin_password'];
//     $hash_password = password_hash($admin_password,PASSWORD_DEFAULT);
//     $confirm_password = $_POST['confirm_password'];

//     // select query

//     $select_query = "SELECT * FROM `admin_tabel` WHERE admin_name = '$admin_name' or email= '$admin_email' ";
//     $result = mysqli_query($con, $select_query);
//     $rows_count =  mysqli_num_rows($result);

//     if($rows_count>0){
//         echo "<script>alert('Username and Email already exist')</script>";
//     }else if($admin_password!=$confirm_password){
//         echo "<script>alert('Passwords do not match')</script>";
//     }
    
//     else{
//             // insert_query
//     $insert_query = "insert into `admin_tabel` (admin_name, admin_email, admin_password) 
//     values ('$admin_name', '$admin_email', '$hash_password')";
//     $sql_execute = mysqli_query($con, $insert_query);

//     // if($sql_execute){
//     //     echo "<script>alert('Data inserted successfully')</script>";
//     // }else{
//     //     die(mysqli_error($con));
//     // }


//     }
// }


?>