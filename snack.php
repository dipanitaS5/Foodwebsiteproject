<?php

session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: http://localhost/Food-Ordering/FOOD-ORDER/index.php");
    exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Page</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;       
        }
        .container{
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        header{
            background-color: rgb(246, 252, 142);
            color: #da985e;
            padding: 20px;
            text-align: center;
        }
        #snack{
            padding: 40px 0;
            background-color: rgb(246, 252, 142);
            background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(../Website/images/pizza.jpg);
            background-repeat: no-repeat;
            background-size: cover; 
        }
        .snack-item{
            background-color: #f7f7a3;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin-bottom: 30px;
        }
        .snack-item:hover{
         box-shadow: 0 0 20px #333;
         transform: translateY(-5px);
         
       }
        .snack-item img{
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
        }
        .snack-item h2{
            font-size: 24px;
            margin-bottom: 10px;
        }
        .snack-item p{
            margin-bottom: 10px;
        }
        .snack-item .price{
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .snack-item button{
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .snack-item button:hover{
            background-color: #fff;
            color: #333;
        }
        footer{
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Snack</h1>
    </header>
    
    <section id="snack">
        <div class="container">
            <div class="snack-item">
                <img src="images/cheeseburger.jpg" alt="Snack Item">
                <h2>Cheeseburger</h2>
                <p>Description of the snack goes here. From this section you can
                    add your favorite snack to your cart as many as you like</p>
                    <p class="price">190 tk</p>
                    <button>Add to cart</button>
            </div>
            <div class="snack-item">
                <img src="images/pancake.jpg" alt="Snack Item">
                <h2>Pancakes</h2>
                <p>Description of the snack goes here. From this section you can
                    add your favorite snack to your cart as many as you like</p>
                    <p class="price">120 tk</p>
                    <button>Add to cart</button> 
            </div>
            <div class="snack-item">
                <img src="images/muffin.jpg" alt="Snack Item">
                <h2>Muffin</h2>
                <p>Description of the snack goes here. From this section you can
                    add your favorite snack to your cart as many as you like</p>
                    <p class="price">190 tk</p>
                    <button>Add to cart</button>
            </div>
            <div class="snack-item">
                <img src="images/anotherpizza.jpg" alt="Snack Item">
                <h2>Pizza</h2>
                <p>Description of the snack goes here. From this section you can
                    add your favorite snack to your cart as many as you like</p>
                    <p class="price">190 tk</p>
                    <button>Add to cart</button>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 Snack Company</p>
    </footer>
</body>
</html>