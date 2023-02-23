<?php

session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: http://localhost/Food-Ordering/FOOD-ORDER/index.php");
    exit;
    }

?>
<?php

require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Categories</title>
      <!-- bootstrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <!-- <script src="https://kit.fontawesome.com/b94379aac3.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="styles/categories.css">
</head>
<body>
    <header>
        <h1> Food Categories </h1>
    </header>
     <nav>
        <ul>
            <li>
                <!-- <a href="#meals">Meals</a> -->
                <a href="http://localhost/Food-Ordering/food-order/meals.php">

                    <button style="color: antiquewhite;" class="ms-5 btn btn-outline-success" type="consultation">Meals</button>
                    </a> 
            </li>
            <li>
                <a href="http://localhost/Food-Ordering/food-order/snack.php">

                    <button style="color: antiquewhite;" class="ms-5 btn btn-outline-success" type="consultation">Snack</button>
                    </a> 
            </li>
            <li>
                <a href="http://localhost/Food-Ordering/food-order/beverage.php">

                    <button style="color: antiquewhite;" class="ms-5 btn btn-outline-success" type="consultation">Beverage</button>
                    </a> 
            </li>
            
        </ul>
    </nav>

    <main>
        <section id="meals">
            <h2>Meals</h2>
            <p>Here is information about various types of meals and you can choose as your liking.</p>
        </section>
        <section id="snack">
            <h2>Snack</h2>
            <p>Here is information about various types of snacks and their you can choose as your liking.</p>
        </section>
        <section id="beverage">
            <h2>Dairy</h2>
            <p>Here is information about various types of beverages and you can choose as your liking.</p>
        </section>
    </main>
    <footer>
        <p>Copyrights and &copy; 2023 Food Categories</p>
    </footer>
     <!-- bootstrap js -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>