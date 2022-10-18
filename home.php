<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
    include('Common/AllLinks.php')
  ?>
  <title>PG Life</title>
</head>

<body>
  <!-- Navigation Bar -->
  <?php
  include('Common/header.php');
  ?>
  
  <!-- Sectoin one  -->
  <div class="bg">

    <div class="heading">
      <p>Happiness Per Square Foot</p>
    </div>
    <form id="search-form" action="property_list.php" method="GET">
      <div class="searchbar">
        <div class="search">
          <input type="text" class="input-search" name="city" id="city" placeholder="Enter your city to search for PGs">
          <button class="btn" type="submit"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>

  <div class="major"> 
    <div class="major-heading">
      <p>Major Cities</p>
    </div>

    <div class="cities">
      <div class="circle">
        <a href="property_list.php?city=Delhi">
          <div class="city">
            <img src="img/delhi.png" alt="Delhi">
          </div>
        </a>
      </div>
      
      <div class="circle">
        <a href="property_list.php?city=Mumbai">
          <div class="city">
            <img src="img/mumbai.png" alt="Delhi">
          </div>
        </a>
      </div>

      <div class="circle">
        <a href="property_list.php?city=Bengaluru">
          <div class="city">
            <img src="img/bangalore.png" alt="Delhi">
          </div>
        </a>
      </div>

      <div class="circle">
        <a href="property_list.php?city=Hyderabad">
          <div class="city">
            <img src="img/hyderabad.png" alt="Delhi">
          </div>
        </a>
      </div>

    </div>
  </div>
  <!-- Footer -->
  <?php
  include("Common/footer.php")
  ?>
</body>
</html>
