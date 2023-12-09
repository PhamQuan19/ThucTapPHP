<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<style type="text/css">
    .navbar-nav .nav-link {
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-item.active .nav-link {
        background-color: #FE6D4C;
        transform: scale(1.1);
        border-radius: 5px;
    }
</style>

<header id="header" class="header-scroll top-header headrom">
    <nav class="navbar navbar-dark">
        <div class="container">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
            <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/icn.png" alt=""> </a>
            <div class="collapse navbar-toggleable-md float-lg-right" id="mainNavbarCollapse">
                <ul class="nav navbar-nav">
                   
                   

                    <?php
                    $other_pages = ['index.php','login.php', 'registration.php', 'contact.php'];

                    foreach ($other_pages as $page) {
                        echo '<li class="nav-item ' . (($current_page == $page) ? 'active' : '') . '"><a href="' . $page . '" class="nav-link">' . ucfirst(str_replace('.php', '', $page)) . '</a></li>';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
</header>
