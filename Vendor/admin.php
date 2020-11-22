<?php
	require "connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Vendor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../vendor/css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">

<h4 style="font-size: 15px;" class="font-weight-bold"><a href="#a" style="color: white;"><img src="../vendor/vendor.png" class="rounded-circle m-3" style="height:45px;width:45px;">Welcome <?php
      session_start();
      // $sql="SELECT name FROM users";
      // $query_run=mysqli_query($conn,$sql);
      
			echo $_SESSION['user_name']; 
			?></a></h4>

				<!-- <h1><a href="index.html" class="">VN</a></h1> -->
        <ul class="list-unstyled components mt-4 mb-5">

          <li class="active">
            <a href="addnews.php" target="frame"><span class="fa fa-shopping-cart"></span> Add news</a>
          </li>
          <li>
              <a href="add3news.php" target="frame"><span class="fa fa-user"></span>Add top 3 News</a>
          </li>
          <li>
            <a href="../vendor/frame/announcments.html" target="frame"><span class="material-icons">&#xe0c9;</span> Announcements</a>
          </li>
        </ul>

       
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-2">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Messages</a>
                </li>
              </ul>
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item ml-2">
                    <a class="nav-link" href="#">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
         <div>
           <h2 class="mb-2">Home Page Content</h2>
           <p>Click on side navbar to enable frame accordingly.</p>
             <div class="embed-responsive embed-responsive-16by9">
               <iframe class="embed-responsive-item" name="frame" allowfullscreen></iframe>
              </div>
          </div>
      </div>
		</div>

    <script src="../vendor/js/jquery.min.js"></script>
    <script src="../vendor/js/popper.js"></script>
    <script src="../vendor/js/bootstrap.min.js"></script>
    <script src="../vendor/js/main.js"></script>
  </body>
</html>