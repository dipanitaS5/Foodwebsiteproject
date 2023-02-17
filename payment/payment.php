<?php
session_start();

// if(isset($_SESSION['s_email']))
// {
//     header("location: http://localhost/Food-Ordering/food-order/index.php");
//     exit;
// }

require_once "config.php";

$s_email = $s_name = "";
$err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
     if(empty(trim($_POST['p_email'])) || empty(trim($_POST['p_name'])))
     {
        $err = "please enter user email and name";
        echo $err;
     }

     else{
        $s_email = trim($_POST['p_email']);
        $s_name = trim($_POST['p_name']);
     }

     if(empty($err)){
        $sql = "SELECT  s_id,s_email,s_name FROM student WHERE s_email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt,"s",$param_s_email);
        $param_s_email = $s_email;
       
//execute the statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt,$s_id,$s_email,$s_name);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($s_email,$s_email)){
                            //this means user is allowed to login
                            session_start();
                            $_SESSION["s_id"] = $s_id;
                            $_SESSION["s_email"] = $s_email;
                            $_SESSION["s_name"] = $s_name;
                            $_SESSION["loggedin"] = true;
                            echo('Payment is successful');
                            //redirect user to homepage
                            // header("location: http://localhost/Food-Ordering/food-order/index.php");
                            

                        }
                    }
                }
     }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        .container{
            width: 500px;
            margin: 0 auto;
            text-align: center;
        }
        .payment-header{
            margin : 40px auto;
        }
        .form-container{
            background-color: #f2f2f2;
            padding: 30px;
            border-radius: 10px;
        }
        label{
            font-weight: bold;
            margin-right: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],

        select{
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"]{
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover{
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="payment-header">Payment Information</h1>
        <div class="form-container">
            <form action = "payment.php" method = "POST">
                <label for="p_name">Name:</label>
                <input type="text" id="p_name" name="p_name" required>
                <label for="p_email">Email:</label>
                <input type="email" id="p_email" name="p_email" required>
                <label for="p_amount">Amount:</label>
                <input type="number" id="p_amount" name="p_amount" required>

                <label for="payment_method">Payment Method:</label>
                <select name="payment_method" id="payment_method">
                    <option value="Cash On Delivery">Cash On Delivery</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                </select>
                <input type="submit" value="Submit Payment">
            </form>
        </div>

    </div>
    
</body>
</html>