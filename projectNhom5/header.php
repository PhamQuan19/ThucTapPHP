<!-- <style type="text/css">
    .navbar-nav .nav-link:hover {
    background-color: #FE6D4C; 
    transition: background-color 0.3s ease; 
}
</style>

 -->
<style type="text/css">
    .navbar-nav .nav-link {
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        background-color: #FE6D4C;
        transform: scale(1.1);
        border-radius: 5px;
    }

    
   /*  .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      background-color: #FE6D4C;
      transform: scale(1.1);
      navbar navbar-expand-lg bg-body-tertiary
    } */
</style>

 <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark bg-body-tertiary">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/icn.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active " href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active " href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active " href="contact.php">Contact <span class="sr-only"></span></a> </li>
                            

                            <?php
						if(empty($_SESSION["user_id"])) // if user is not login
                     {
                        echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                        <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
                    }
                    else
                    {


                       echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
                       echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                   }

                   ?>

               </ul>

           </div>
       </div>
   </nav>

</header>
