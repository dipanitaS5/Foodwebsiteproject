<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meals Page</title>
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
            background-color: rgb(165, 141, 136);
            color: #ffcfa4;
            padding: 20px;
            text-align: center;
            
        }
   
        #meals{
            padding: 40px 0;
            background-color: rgb(184, 162, 156);
            /* background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(../Website/images/steak.jpg); */
            background-image: url("images/steakonfire.jpg");
            background-repeat: no-repeat;
            background-size: cover; 
        }
        .meals-item{
            background-color: #f9cbae;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin-bottom: 30px;
        }
        .meals-item:hover{
         box-shadow: 0 0 20px #333;
         transform: translateY(-5px);
       }
        .meals-item img{
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
        }
        .meals-item h2{
            font-size: 24px;
            margin-bottom: 10px;
        }
        .meals-item p{
            margin-bottom: 10px;
        }
        .meals-item .price{
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .meals-item button{
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .meals-item button:hover{
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
        <h1>Meals</h1>
    </header>
    
    <section id="meals">
        <div class="container">
            <div class="meals-item">
                <img src="images/cashewnut.jpeg" alt="Meals Item">
                <h2>Cashew Nut Salad</h2>
                <p>Description of the meals goes here. From this section you can
                    add your favorite meals to your cart as many as you like</p>
                    <p class="price">190 tk</p>
                    <button>Add to cart</button>
            </div>
            <div class="meals-item">
                <img src="images/biriyani.jpg" alt="Meals Item">
                <h2>Biriyani</h2>
                <p>Description of the meals goes here. From this section you can
                    add your favorite meals to your cart as many as you like</p>
                    <p class="price">120 tk</p>
                    <button>Add to cart</button> 
            </div>
            <div class="meals-item">
                <img src="images/steakwithfries.jpg" alt="Meals Item">
                <h2>Steak</h2>
                <p>Description of the meals goes here. From this section you can
                    add your favorite meals to your cart as many as you like</p>
                    <p class="price">120 tk</p>
                    <button>Add to cart</button> 
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 meals Company</p>
    </footer>
</body>
</html>