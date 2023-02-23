<?php

session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: http://localhost/Food-Ordering/FOOD-ORDER/student-login/login.php");
    exit;
    }

?>
<table border="1">
        <tr>
            <th>s_name</th>
            <th>s_email</th>
            <th>total_price</th>
        </tr>

<?php

$connect = mysqli_connect("localhost","root","","foodorder") or die("connection failed");

$s_id = $s_email = $p_amount = "";
$err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
     if(empty(trim($_POST['s_id'])) || empty(trim($_POST['s_email'])) || empty(trim($_POST['p_amount'])))
     {
        $err = "please enter proper user name and email and amount";
        echo $err;
     }

     else{
        $s_id = trim($_POST['s_id']);
        $s_email = trim($_POST['s_email']);
        $p_amount = trim($_POST['p_amount']);
        
     }

     if(empty($err)){
        $sql = "SELECT  std.*,orm.total_price FROM student std,order_main orm WHERE std.s_id = orm.s_id AND std.s_id = $s_id AND orm.total_price = $p_amount";
        $stmt = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_assoc($stmt)){
            ?>
                <tr>
                <td><?php echo $row['s_name']?></td>
                <td><?php echo $row['s_email']?></td>
                <td><?php echo $row['total_price']?></td>
                </tr>
            <?php

            echo '<script>alert("Thank you for your information. Payment will be received by the delivery boy")</script>';

        }
       
// //execute the statement
//         if(mysqli_stmt_execute($stmt)){
//             mysqli_stmt_store_result($stmt);
//                 if(mysqli_stmt_num_rows($stmt) == 1){
//                     mysqli_stmt_bind_result($stmt,$s_id,$s_name,$s_email,$p_amount);
//                     if(mysqli_stmt_fetch($stmt)){
//                             //this means user is allowed to login
//                             session_start();
//                             $_SESSION["s_name"] = $s_name;
//                             $_SESSION["s_email"] = $s_email;
//                             $_SESSION["loggedin"] = true;
//                             echo "payment is successful";
//                     }
//                 }
//      }
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
            <form action = "#" method = "POST">
                <label for="s_id">Student Id:</label>
                <input type="number" id="s_id" name="s_id" placeholder="Enter your student ID" required>
                <label for="s_email">Email:</label>
                <input type="email" id="s_email" name="s_email" placeholder="Enter your email" required>
                <label for="p_amount">Amount:</label>
                <input type="number" id="p_amount" name="p_amount" placeholder="Total amount" required>

                <label for="payment_method">Payment Method:</label>
                <select name="payment_method" id="payment_method">
                    <option value="Cash On Delivery">Cash On Delivery</option>
                    <!-- <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option> -->
                </select>
                <input type="submit" value="SubmitPayment">
            </form>
        </div>

    </div>
    
</body>
</html>