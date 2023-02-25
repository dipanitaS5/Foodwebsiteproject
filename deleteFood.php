<?php

session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: http://localhost/Food-Ordering/FOOD-ORDER/index.php");
    exit;
    }
?>

<?php
include('./config.php');
require_once 'auth_check.php';

?>
<?php
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];


    $sql = "delete from `food` where food_id = $id";

    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted successfully";
        header("location: http://localhost/Food-Ordering/FOOD-ORDER/meals.php");
    }
    else{
        die(mysqli_error($conn));
    }
}

?>