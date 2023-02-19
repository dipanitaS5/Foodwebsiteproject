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
    <title>Beverage Page</title>
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
            background-color: rgb(255, 251, 205);
            color: #ab2b2b;
            padding: 20px;
            text-align: center;
        }
        #beverage{
            padding: 40px 0;
            background-color: azure;
            background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(../Website/images/coffelatte.jpg);
            background-repeat: no-repeat;
            background-size: cover; 
        }
        .beverage-item{
            background-color: #fcf9b9;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin-bottom: 30px;
        }
        .beverage-item:hover{
         box-shadow: 0 0 20px #333;
         transform: translateY(-5px);
       }
        .beverage-item img{
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
        }
        .beverage-item h2{
            font-size: 24px;
            margin-bottom: 10px;
        }
        .beverage-item p{
            margin-bottom: 10px;
        }
        .beverage-item .price{
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .beverage-item button{
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .beverage-item button:hover{
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
        <h1>Beverage</h1>
    </header>
    
    <section id="beverage">
        <div class="container">
            <div class="beverage-item">
                <img src="images/Iatte.jpg" alt="Beverage Item">
                <h2>Latte</h2>
                <p>Description of the beverage goes here. From this section you can
                    add your favorite beverage to your cart as many as you like</p>
                    <p class="price">190 tk</p>
                    <button>Add to cart</button>
            </div>
            <div class="beverage-item">
                <img src="images/americanocoffe.jpg" alt="Beverage Item">
                <h2>Americano</h2>
                <p>Description of the beverage goes here. From this section you can
                    add your favorite beverage to your cart as many as you like</p>
                    <p class="price">170 tk</p>
                    <button>Add to cart</button> 
            </div>
            <div class="beverage-item">
                <img src="images/chocomilkshake.jpg" alt="Beverage Item">
                <h2>Choco Milk Shake</h2>
                <p>Description of the beverage goes here. From this section you can
                    add your favorite beverage to your cart as many as you like</p>
                    <p class="price">120 tk</p>
                    <button>Add to cart</button> 
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 Beverage Company</p>
    </footer>
</body>
</html>