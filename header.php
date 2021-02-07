<?php
require "connection.php";
require "function.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>Header</title>
  <div class="">

  </div>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
  <link rel="stylesheet" type="text/css" href="./sidebar1.css">
  <link rel="stylesheet" type="text/css" href="./style.css">
  <link rel="stylesheet" type="text/css" href="./style3.css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>

.header_link {
        border-right: 1.5px solid white;
        font-size: 15px;
        font-weight: 600;
        line-height: 3px;

      }


      .display_hidden {
        display: block;
      }

      .display_logo {
        display: none;
      }
      
      .main_logo{
        display:block;
      }
      img{
        background:none;
      }
      @media screen and (max-width:768px) {
        .display_logo {
          display: block;
        }

        .display_hidden {
          display: none;
        }
       .main_logo{
          display:none;
        }
      }
      body{
        /* font-family: Arial, Helvetica, sans-serif; */
      }
      
  </style>


<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</head>

<body>

  <!-- <div class="wrapper"> -->

    <nav id="sidebar">
      <div id="dismiss">
        <i class="fas fa-arrow-left"></i>
      </div>

      <div class="sidebar-header">
        <img src="assets/img/logo/newlogo.png" class="d-inline-block" style="height:50px;width:40px;" alt="">
       <a href="index.php"> <h3 class="display-5 d-inline">TruthTeller</h3></a>
      </div>

      <ul class="list-unstyled components">
        <li class="active">
          <a class="color_change" href="index.php">Home</a>

        </li>
        <li>
          <a class="color_change" href="about.php">About</a></li>
      <li>
        
          <a class="color_change" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Categories</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
              <a href="index.php?category=Entertainment#Entertainment" class="">ENTERTAIMENT</a>
            <a href="index.php?category=Education#Education" class="">EDUCATION</a>
            <a href="index.php?category=Sports#Sports" class="">SPORTS</a>
            <a href="index.php?category=Health#Health" class="">HEALTH</a>
            <a href="index.php?category=Politics#Politics" class="">POLITICS</a>
            <a href="index.php?category=Success Stories#Success Stories">SUCCESS STORIES</a>
            <a href="index.php?category=Start-ups#Start-ups">START-UPS</a>
            <a href="index.php?category=Technology#Technology">TECHNOLOGY</a>
            <a href="index.php?category=Fashion and lifestyle#Fashion and lifestyle">FASHION AND LIFESTYLE</a>
            <a href="index.php?category=Others#Others">OTHERS</a>

            </li>
          </ul>
        </li>
        <li>
          <a class="color_change" href="contact.php">Contact Us</a>
        </li>
        <li>
          <a class="color_change"  href="#"><?php echo date("d-m-y"); ?></a>
        </li>
        <li>
              <a class="color_change" href="#"><div class="" id="txt"></div></a>

        </li> 
        <li class="">
        <a href="https://www.facebook.com" class="color_change px-3 d-inline-block"><span class="fab fa-facebook-f"></span></a>
            <a href="https://www.instagram.com" class="color_change px-3 d-inline-block"><span class="fab fa-instagram"></span></a>
            <a href="https://www.twitter.com" class="color_change px-3 d-inline-block"><span class="fab fa-twitter"></span></a>

        </li>
      </ul>
      <ul class="list-unstyled m-0 p-0 CTAs">
      <div style="text-align: center;align-items:center;" class="row ">
    <div class="col-12 mt-4">
      <p class="text-white font-weight-bold">Copyright ©2020 All rights reserved | Robobloggers Private Limited</p>
    </div>
  </div>
      </ul>
    </nav>
    <!-- <div id="content"> -->
    <!-- <div id="content"> -->
    <style>
     
    </style>
    <nav class="navbar navbar-expand-lg navbar-light main_logo" style="font-size:20px;">
    <ul class="navbar-nav ml-4">
      <a class="navbar-brand " href="index.php">
        <img src="assets/img/logo/newlogo.png" style="height: 150px;width:140px;" alt="">
      </ul>
      </a>
        
  </nav>
      
    <nav class="navbar navbar-expand-lg navbar-light" style="font-size:20px;position:sticky;left:0;top:0;z-index:1;background-color:#4287F5;width:100%;">
      <a class="navbar-brand mr-auto display_logo" href="index.php">
        <img src="newheader.png" style="background:none;height: 55px;width:180px;" alt="">
      </a>
      
      
      <ul class="navbar-nav mx-auto">
        <div class="container-fluid">
          <li class="nav-item display_hidden py-3">
            <a href="index.php?category=Entertainment#Entertainment" class="nav-link header_link text-white px-4">ENTERTAIMENT</a>
          </li>
          <li class="nav-item display_hidden py-3">
            <a href="index.php?category=Education#Education" class="nav-link header_link text-white px-4">EDUCATION</a>
          </li>
          <li class="nav-item display_hidden py-3">
            <a href="index.php?category=Sports#Sports" class="nav-link header_link text-white px-4">SPORTS</a>
          </li>
          <li class="nav-item display_hidden py-3">
            <a href="index.php?category=Health#Health" class="nav-link header_link text-white px-4">HEALTH</a>
          </li>
          <li class="nav-item display_hidden py-3">
            <a href="index.php?category=Politics#Politics" class="nav-link header_link text-white px-4">POLITICS</a>
          </li>
          
          <li class="nav-item display_hidden py-3 dropdown">
            <!-- <a href="#" class="nav-link header_link text-white px-4">MORE</a> -->
            <div class="">
  <a class="nav-link header_link text-white px-4" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
    MORE
    </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item font-weight-bold" style="font-family:Arial;color: #4287F5;" href="index.php?category=Success Stories#Success Stories">SUCESS STORIES</a></li>
    <li><a class="dropdown-item font-weight-bold" style="font-family:Arial;color: #4287F5;" href="index.php?category=Start-ups#Start-ups">START-UPS</a></li>
    <li><a class="dropdown-item font-weight-bold" style="font-family:Arial;color: #4287F5;" href="index.php?category=Technology#Technology">TECHNOLOGY</a></li>
    <li><a class="dropdown-item font-weight-bold" style="font-family:Arial;color: #4287F5;" href="index.php?category=Fashion and lifestyle#Fashion and lifestyle">FASHION AND LIFESTYLE</a></li>
    <li><a class="dropdown-item font-weight-bold" style="font-family:Arial;color: #4287F5;" href="index.php?category=Others#Others">OTHERS</a></li>
  </ul>
</div>
          </li>
          <li class="nav-item display_hidden py-3">
            <a href="contact.php" class="nav-link header_link text-white px-4">MAIL US</a>
          </li>
          <li class="nav-item py-3 display_hidden">
            <a class="nav-link header_link text-white px-4" style="color:blue;" href="#"><?php echo date("d-m-y"); ?></a>
          </li>
          <li class="nav-item py-3 display_hidden">
            <a class="nav-link header_link text-white px-4" href="#">
              <div class="" id="txt"></div>
            </a>
          </li>
          <li class="nav-item display_hidden py-3">
            <a href="#" class="nav-link header_link text-white px-4">
              <span class="fab fa-facebook-f"></span>
            </a>
          </li>
          <li class="nav-item display_hidden py-3">
            <a href="#" class="nav-link header_link text-white px-4">
              <span class="fab fa-instagram"></span>
            </a>
          </li>
          <li class="nav-item display_hidden py-3">
            <a href="#" class="nav-link header_link text-white px-4">
              <span class="fab fa-twitter"></span>
            </a>
          </li>

        </div>
        <!-- </ul>
      <ul class="navbar-nav ml-auto"> -->

      </ul>
      <ul class="navbar-nav ml-auto" >

        <li class="nav-item py-2 ">
          <button type="button" id="sidebarCollapse" class="btn ba1 text-white" style="font-size:29px;">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <span class="fas fa-bars "></span>
          </button>


        </li>
      </ul>
    </nav>
    <!-- </div> -->
  <!-- </div> -->



  <div class="overlay"></div>
  <div style="margin-bottom:0px;visibility:hidden;">
    as
  </div>
  

  <!-- <div class="mx-3 categories">
      <div style="font-family: myFirstFont;font-size:20px;" class="flex-container">        
          <a style="color:black;border-bottom:2px solid #ff9933;" href="">
            <div class="align-items">
              hello
            </div>
          </a>
      </div>

    </div> -->


  <script src="js/jquery-3.5.1.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#sidebar").mCustomScrollbar({
        theme: "minimal"
      });

      $('#dismiss, .overlay').on('click', function() {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
      });

      $('#sidebarCollapse').on('click', function() {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });
  </script>
</body>

</html>