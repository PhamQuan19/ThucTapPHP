
 <!DOCTYPE html>
<html lang="en">

<?php
// $error="";
// $success="";
include("connection/connect.php"); 
error_reporting(0);
session_start();

if(isset($_POST['submit']))          
{

	if(empty($_POST['name'])||empty($_POST['email']) ||empty($_POST['message']))
	{	
		$error = '<div class="alert alert-danger alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>All fields Must be Fillup!</strong>
		</div>';

	}
	else
	{

		// Lấy dữ liệu từ biểu mẫu
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $message = $_POST['message'];                  


		$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
			mysqli_query($db, $sql); 
			

		 if (mysqli_query($db, $sql)) {
        $success = true;
		 	
        } else {
            $error = true;

        }
	}

}

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
    <link href="css/style.css" rel="stylesheet">


		
</head>
	<style type="text/css">
		/* CSS mới để căn giữa nội dung trong section.popular */
section.popular.center-content {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh; /* Tùy chỉnh chiều cao theo nhu cầu */
}

#notification {
    width: 100%;
    max-width: 600px; /* Tùy chỉnh chiều rộng theo nhu cầu */
    margin: 0 auto;
}

.container-fluid {
    width: 100%;
    max-width: 600px; /* Tùy chỉnh chiều rộng theo nhu cầu */
}

.col-sm-6 {
    width: 100%;
}

	</style>
    <body class="home">

        <?php include('header.php'); ?>
        <?php include('banner.php'); ?>



<!-- ================== -->

<section class="popular">
	 <div id="notification">
        <?php if (isset($success)) { ?>
            <div class="alert alert-success">
                Message Submitted Successfully.
            </div>
        <?php } ?>

        <?php if (isset($error)) { ?>
            <div class="alert alert-danger">
                Error: <?php echo $error; ?>
            </div>
        <?php } ?>
    </div>

	<div class="container-fluid" >
		
		<!-- <div class="row"> -->

			<div class="col-sm-6 col-sm-offset-3">
				<!-- <h3>Send me a message</h3> -->
				<form id="contactForm" method="Post">
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="name" class="h4">Name</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group col-sm-6">
							<label for="email" class="h4">Email</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="h4 ">Message</label>
						<textarea id="message" name="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
						<div class="help-block with-errors"></div>
					</div>
					<button type="submit" id="form-submit" name="submit" class="btn btn-success btn-lg pull-right ">Submit</button>

				</form>
			</div>

		</div>
	<!-- </div> -->

</section>
<!-- ================== -->

	
	
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