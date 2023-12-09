<!-- Tạo một tệp mới có tên là search.php -->
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Search Results</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

  

<body class="search-results">

  <?php include('header.php'); ?>
    <section class="search-results">
    <div class="container">
        <div class="title text-xs-center m-b-30">
            <h2>Search Results</h2>
        </div>
        <div class="row">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $dish_name = $_GET["dish_name"];
                 $dish_price = $_GET["dish_price"];
                // Query để lấy các món ăn có tên chứa từ khóa tìm kiếm
                $query = "SELECT * FROM dishes WHERE title LIKE '%$dish_name%'";
                 // $query = "SELECT * FROM dishes WHERE title '%$dish_name%'";
                 // $query = "SELECT * FROM dishes WHERE title LIKE '%$dish_name%' OR price <= '$dish_price'";
                 // $query = "SELECT * FROM dishes WHERE price <= '$dish_price'";
                $result = mysqli_query($db, $query);

                // Hiển thị kết quả
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-md-3 mb-4">
                                <div class="food-item-wrap">
                                    <div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/' . $row['img'] . '"></div>
                                    <div class="content">
                                        <h5><a href="dishes.php?res_id=' . $row['rs_id'] . '">' . $row['title'] . '</a></h5>
                                        <div class="product-name">' . $row['slogan'] . '</div>
                                        <div class="price-btn-block">
                                            <span class="price">' . $row['price'] . 'đ</span>
                                            <a href="dishes.php?res_id=' . $row['rs_id'] . '" class="btn theme-btn-dash pull-right">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo '<div class="col-md-12">
                            <p>No dishes found.</p>
                        </div>';
                }
            }
            ?>
        </div>
    </div>
</section>

    <?php include('footer.php'); ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>
