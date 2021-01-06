<?php
include_once('connection.php');
$query="SELECT * FROM products WHERE featured=1";
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Welcome to our webshop!</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark boja">
        <a class="navbar-brand" href="#">ShopIT</a>
      

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="about.html">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html"> CONTACT </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#shop"> PRODUCTS </a>
          </li>
      

            
        </ul>
      </nav>



      <div class="wrapper"></div>

      <div class="naslov">
          <h1>ShopIT</h1>
          <span>Newest technology at the grasp of your hand!</span>
          <br>
          <a href="#shop"><button class="btn btn-light mt-4">See products</button></a>
      </div>


    <div class="mt-3 text-center">
        <h1>Featured products:</h1>
    </div>

    <div class="container-fluid" id="shop">
    <div class="mt-5">
    <div class="text-center  ">
    <div class="row">
    <?php 
      while($rows=mysqli_fetch_assoc($result)){
        ?>
        <div class="col-md-4">
        <div class="mt-2 mb-3 border">
                      <h4> <?php echo $rows['title'];?></h4>
                      <img src="<?php echo $rows['image'];?>" alt="" srcset="" id="image">
                      <p class="list-price text-danger">Price: <s>$<?php echo $rows['list_price'];?></s></p>
                      <p class="price">Current price: $<?php echo $rows['price']; ?></p>
                      <button type="button" class="btn btn-dark mb-2" data-toggle="modal" data-target="#details-<?php echo $rows['id'] ?>">Details</button>

        </div>
        </div>


                
        <?php
      }
    ?> 
    </div>
    </div>
    </div>
    </div>
 



    <?php 
    include 'details-modal-Blackwidow.php';
    include 'details-modal-Deathadder.php';
    include 'details-modal-AsusPredator.php';
    include 'details-modal-Nzxt.php';
    include 'details-modal-Samsung.php';
    include 'details-modal-Dummy.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>