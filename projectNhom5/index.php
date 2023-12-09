<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>

    <body class="home">

        <?php include('header.php'); ?>


        <?php include('banner.php'); ?>

        <!-- ================== -->


        <!-- Tim kiếm -->
        <!-- Thêm sau phần "Featured Restaurants" -->
<section class="search-dish mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="search-form">
                    <form action="search.php" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for dishes..." name="dish_name">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

        <!--  -->
       <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>Popular Dishes</h2>
                    <p class="lead">Easiest way to order your favourite food among these dishes</p>
                </div>
                <div class="row">

                    <div class="container">
            <?php
            $records_per_page = 12;

// Xác định trang hiện tại
            $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Xác định vị trí bắt đầu của mỗi trang trong cơ sở dữ liệu
            $start_from = ($page - 1) * $records_per_page;

            $query_res = mysqli_query($db, "SELECT * FROM dishes LIMIT $start_from, $records_per_page");
            $count = 0;

                        while ($r = mysqli_fetch_array($query_res)) {
                            if ($count % 4 == 0) {
            // Bắt đầu một hàng mới mỗi khi đếm đạt đến 4 (4 cột trên mỗi hàng)
                                if ($count > 0) {
                echo '</div>'; // Đóng hàng trước
            }
            echo '<div class="row">';
        }

        echo '<div class="col-md-3 food-item">
        <div class="food-item-wrap">
        <div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/' . $r['img'] . '"></div>
        <div class="content">
        <h5><a href="dishes.php?res_id=' . $r['rs_id'] . '">' . $r['title'] . '</a></h5>
        <div class="product-name">' . $r['slogan'] . '</div>
        <div class="price-btn-block">
        <span class="price">' . $r['price'] . 'đ</span>
        <a href="dishes.php?res_id=' . $r['rs_id'] . '" class="btn theme-btn-dash pull-right">Order Now</a>
        </div>
        </div>
        </div>
        </div>';
        $count++;
    }
    echo '</div>'; // Đóng hàng cuối cùng

    // Pagination
    $page_query = mysqli_query($db, "SELECT COUNT(*) FROM dishes");
    $total_records = mysqli_fetch_array($page_query)[0];
    $total_pages = ceil($total_records / $records_per_page);

    // echo '<div class="text-center pagination">';
    // for ($i = 1; $i <= $total_pages; $i++) {
    //     echo '<a href="?page=' . $i . '">' . $i . '</a> ';
    // }
    // echo '</div>';
    echo '<div  align="center">';

    $prev_page = $page - 1;
    $next_page = $page + 1;

    if ($prev_page > 0) {
        echo '<a href="?page=' . $prev_page . '" class="mr-2">&laquo; Previous</a>';
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        echo '<a href="?page=' . $i . '" class="mr-2">' . $i . '</a>';
    }

    if ($next_page <= $total_pages) {
        echo '<a href="?page=' . $next_page . '" class="ml-2">Next &raquo;</a>';
    }

    echo '</div>';

    ?>
</div>


</div>


</div>
</div>
</section>


<!-- ================================= -->
<?php include('banner.php'); ?>
<!-- ======================= -->

<section class="featured-restaurants">
    <div class="container" >
        <div class="row">
            <div class="col-sm-4">
                <div class="title-block pull-left">
                    <h4>Featured Restaurants</h4> </div>
                </div>
                <div class="col-sm-8">
                    <div class="restaurants-filter pull-right">
                        <nav class="primary pull-left">
                            <ul>
                                <li><a href="#" class="selected" data-filter="*">all</a> </li>
                                <?php 
                                $res= mysqli_query($db,"select * from res_category");
                                while($row=mysqli_fetch_array($res))
                                {
                                   echo '<li><a href="#" data-filter=".'.$row['c_name'].'"> '.$row['c_name'].'</a> </li>';
                               }
                               ?>

                           </ul>
                       </nav>
                   </div>

               </div>
           </div>

           <div class="row">
            <div class="restaurant-listing">


              <?php  
              $ress= mysqli_query($db,"select * from restaurant");  
              while($rows=mysqli_fetch_array($ress))
              {

                 $query= mysqli_query($db,"select * from res_category where c_id='".$rows['c_id']."' ");
                 $rowss=mysqli_fetch_array($query);

                 echo 

                 ' 
                 <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant all '.$rowss['c_name'].'">
                 <div class="restaurant-wrap">
                 <div class="row">
                 <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
                 <a class="restaurant-logo" href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Restaurant logo"> </a>
                 </div>

                 <div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
                 <h5><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>
                 </div>

                 </div>
                 </div>

                 </div>';

             }

             ?>                                                 

         </div>
     </div> 



     <!-- ================== -->

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