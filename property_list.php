<?php
session_start();
require "Api/connection.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
$city_name = $_GET['city'];

$sql_1 = "SELECT * FROM cities WHERE name = '$city_name'";
$result_1 = mysqli_query($connection, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$city = mysqli_fetch_assoc($result_1);
if (!$city) {
    echo "Sorry! We do not have any PG listed in this city.";
    return;
}

$city_id = $city['id'];

$sql_2 = "SELECT * FROM properties WHERE city_id = $city_id";
$result_2 = mysqli_query($connection, $sql_2);
if(!$result_2){
    echo "Something went wrong!";
}

$properties = mysqli_fetch_all($result_2, MYSQLI_ASSOC);

$sql_3 = "SELECT * 
            FROM interested_users_properties iup
            INNER JOIN properties p ON iup.property_id = p.id
            WHERE p.city_id = $city_id";

$result_3 = mysqli_query($connection, $sql_3);
if (!$result_3) {
    echo "Something went wrong!";
    return;
}
$interested_users_properties = mysqli_fetch_all($result_3, MYSQLI_ASSOC);

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
  <title>Best PG's in Mumbai</title>
</head>

<body>
    <!-- ?\Header -->
    <?php
    include('Common/header.php')
    ?>

    <!-- breadcrumb -->

    <div class="breadcrumb">
        <ul>
            <li><a href="home.php">Home</a> / </li>
            <li>Mumbai</li>
        </ul>
    </div>

    <!-- section -->
        <div class="pop_filter">
            <div class="pop">
                
            </div>
        </div>
        <div class="box_city">
            <div class="box_content">
                <div class="filters">
                    <div class="High icon">
                        <img src="img/desc.png" alt="">
                        <p>Highest rent first</p>
                    </div>
                    <div class="filter icon">
                        <img src="img/filter.png" alt="">
                        <p>Filter</p>
                    </div>
                    <div class="low icon">
                        <img src="img/asc.png" alt="">
                        <p>Lowest rent first</p>
                    </div>
                </div>
                <?php

                // foreach($properties as $property){
                //     $property_images = glob("img/properties/" .$property['id' . "/*"]);
                // }
                ?>
                <div class="Prop">
                    <div class="prop1">
                        <div class="img">
                            <img src="img/properties/1/one.jpg" alt="pic">
                        </div>
                        <div class="prop_detail">
                            <div class="rating">
                                <div class="stars">
                                <i class='fa fa-star' style='color: red'></i>
                                <i class='fa fa-star' style='color: red'></i>
                                <i class='fa fa-star' style='color: red'></i>
                                <i class='fa fa-star' style='color: red'></i>
                                <i class='fa fa-star' style='color: red'></i>
                                </div>
                                <div class="heart"><i class="fa fa-heart-o" style="color:red;"></i>
                                    <p>7 interested</p></div>
                            </div>
                            <div class="prop_name">
                                <p class="name">Ac Zone Paying Guest</p>
                                <p class="address">44, Delta D block, Delta, Greator Noida, Noida 201301</p>
                                <img src="img/male.png" alt="">
                            </div>
                            <div class="price">
                                <div class="money">
                                    <h3>Rs 9,999/-</h3><p>per month</p>
                                </div>
                                <div class="view_btn">
                                    <a href="property_detail.php"><button >View</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Prop">
                    <div class="prop1">
                        <div class="img">
                            <img src="img/properties/1/Two.jpg" alt="pic">
                        </div>
                        <div class="prop_detail">
                            <div class="rating">
                                <div class="stars">
                                <i class='fa fa-star' style='color: red'></i>
                                <i class='fa fa-star' style='color: red'></i>
                                <i class='fa fa-star' style='color: red'></i>
                                <i class='fa fa-star-o' ></i>
                                <i class='fa fa-star-o' ></i>
                                </div>
                                <div class="heart"><i class="fa fa-heart-o" style="color:red;"></i>
                                    <p>3 interested</p></div>
                            </div>
                            <div class="prop_name">
                                <p class="name">OYO Paying Guest</p>
                                <p class="address">144, Gama B Block, Gama, Greator Noida, Noida 201301</p>
                                <img src="img/female.png" alt="">
                            </div>
                            <div class="price">
                                <div class="money">
                                    <h3>Rs 8,999/-</h3><p>per month</p>
                                </div>
                                <div class="view_btn">
                                    <button>View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Prop">
                    <div class="prop1">
                        <div class="img">
                            <img src="img/properties/1/Three.jpg" alt="pic">
                        </div>
                        <div class="prop_detail">
                            <div class="rating">
                                <div class="stars">
                                <i class='fa fa-star' style='color: red'></i>
                                <i class='fa fa-star' style='color: red'></i>
                                <i class='fa fa-star' style='color: red'></i>
                                <i class='fa fa-star' style='color: red'></i>
                                <i class='fa fa-star-o' ></i>
                                </div>
                                <div class="heart"><i class="fa fa-heart-o" style="color:red;"></i>
                                    <p>5 interested</p></div>
                            </div>
                            <div class="prop_name">
                                <p class="name">Hotel Sunrise Paying Guest</p>
                                <p class="address">69, Alfa B Block, Alfa, Greator Noida, Noida 201301</p>
                                <img src="img/male.png" alt="">
                            </div>
                            <div class="price">
                                <div class="money">
                                    <h3>Rs 9,969/-</h3><p>per month</p>
                                </div>
                                <div class="view_btn">
                                    <button>View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- footer -->
    <?php
    include('Common/footer.php')
    ?>
</body>
</html>