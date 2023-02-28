<?php
session_start();
$conn = mysqli_connect("localhost","root","","foodorder");

if(mysqli_connect_error()){
    echo "<script>
            alert('can not connect to database');
            window.location.href= 'mycart.php';
            </script>";
            exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        echo "DONE";

    }
}


?>