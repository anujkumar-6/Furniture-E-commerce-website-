


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
        <h2 class="text-center mb-5">Admin Login</h2>
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
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Your password" 
                        required="required" class="form-control">
                    </div>

                    <div>
                        <input type="submit" class="bg-info py-2 px-3 border-0 btn btn-rounded" name="admin_login" value="login">
                        <p class="small fw-bold mt-2 pt-1">Don't you have an account? <a href="admin_registration.php" class="link-danger">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>



<?php 

// if(isset($_POST['admin_login'])){
//     $admin_name = $_POST['admin_name'];
//     $admin_password = $_POST['admin_password'];

//     $select_query = "SELECT * FROM `admin_tabel` WHERE 
//     admin_name = '$admin_name' ";
//     $result = mysqli_query($con, $select_query);
//     $row_count = mysqli_num_rows($result);
//     $row_data = mysqli_fetch_assoc($result);


//     // $select_query_cart = "SELECT * FROM `cart_details` WHERE 
//     // ip_address = '$user_ip'";
//     // $select_cart = mysqli_query($con, $select_query_cart);
//     // $row_count_cart = mysqli_num_rows($select_cart);
//     if($row_count>0){
//         $_SESSION['username'] = $user_username;
//         if(password_verify($user_password, $row_data['user_password'])){
//             // echo "<script>alert('Login successful')</script>";
//             echo "<script>alert('Login successful')</script>";
//             echo "<script>window.open('index.php','_self')</script>";
//         }else{
//             echo "<script>alert('Invalid Credentials')</script>";
//         }
//         }else{
//         echo "<script>alert('Invalid Credentials')</script>";
//     }
// }



?>