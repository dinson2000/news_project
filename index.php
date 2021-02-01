<?php
require "connection.php"
?>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Home</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="site.webmanifest">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<!-- CSS here -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/ticker-style.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/slicknav.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/style.css">
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
<style>
  #blue1 a.blue_hover:hover{
    color:blue;
  }
.image-height{
  width:100%;
  height:30vw;
}
  .top3-image{
    height: 46vw;
    width:100%;
  }
  
  .top2-image{
    height: 22vw;
    /* width:100%; */
  }
  
  .m1{
    margin-left:50px;
  }
  
    @media screen and (max-width:767px){
  .image-height{
  width:100%;
  height:50vw;
    }
  li .k1{
        display:none;
    }
    .m1{
      margin-left: 0px;
    }

    }
@media screen and (max-width:425px){
  .image-height{
  width:100%;
  height:60vw;
}
.top3-image{
  height: 59vw;
  width:100%;
}
.top2-image{
    /* height: 100%; */
    height:59vw;
  }
}
</style>
</head>
<body onload="startTime()">
<!-- Preloader Start -->
<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle"></div>
<div class="preloader-img pere-text">
<script data-pagespeed-no-defer>//<![CDATA[
(function(){for(var g="function"==typeof Object.defineProperties?Object.defineProperty:function(b,c,a){if(a.get||a.set)throw new TypeError("ES3 does not support getters and setters.");b!=Array.prototype&&b!=Object.prototype&&(b[c]=a.value)},h="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,k=["String","prototype","repeat"],l=0;l<k.length-1;l++){var m=k[l];m in h||(h[m]={});h=h[m]}var n=k[k.length-1],p=h[n],q=p?p:function(b){var c;if(null==this)throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");c=this+"";if(0>b||1342177279<b)throw new RangeError("Invalid count value");b|=0;for(var a="";b;)if(b&1&&(a+=c),b>>>=1)c+=c;return a};q!=p&&null!=q&&g(h,n,{configurable:!0,writable:!0,value:q});var t=this;function u(b,c){var a=b.split("."),d=t;a[0]in d||!d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===c?d[e]?d=d[e]:d=d[e]={}:d[e]=c};function v(b){var c=b.length;if(0<c){for(var a=Array(c),d=0;d<c;d++)a[d]=b[d];return a}return[]};function w(b){var c=window;if(c.addEventListener)c.addEventListener("load",b,!1);else if(c.attachEvent)c.attachEvent("onload",b);else{var a=c.onload;c.onload=function(){b.call(this);a&&a.call(this)}}};var x;function y(b,c,a,d,e){this.h=b;this.j=c;this.l=a;this.f=e;this.g={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.i=d;this.b={};this.a=[];this.c={}}function z(b,c){var a,d,e=c.getAttribute("data-pagespeed-url-hash");if(a=e&&!(e in b.c))if(0>=c.offsetWidth&&0>=c.offsetHeight)a=!1;else{d=c.getBoundingClientRect();var f=document.body;a=d.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);d=d.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+d;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.g.height&&d<=b.g.width)}a&&(b.a.push(e),b.c[e]=!0)}y.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&z(this,b)};u("pagespeed.CriticalImages.checkImageForCriticality",function(b){x.checkImageForCriticality(b)});u("pagespeed.CriticalImages.checkCriticalImages",function(){A(x)});function A(b){b.b={};for(var c=["IMG","INPUT"],a=[],d=0;d<c.length;++d)a=a.concat(v(document.getElementsByTagName(c[d])));if(a.length&&a[0].getBoundingClientRect){for(d=0;c=a[d];++d)z(b,c);a="oh="+b.l;b.f&&(a+="&n="+b.f);if(c=!!b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),d=1;d<b.a.length;++d){var e=","+encodeURIComponent(b.a[d]);131072>=a.length+e.length&&(a+=e)}b.i&&(e="&rd="+encodeURIComponent(JSON.stringify(B())),131072>=a.length+e.length&&(a+=e),c=!0);C=a;if(c){d=b.h;b=b.j;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(r){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(D){}}f&&(f.open("POST",d+(-1==d.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}}function B(){var b={},c;c=document.getElementsByTagName("IMG");if(!c.length)return{};var a=c[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var d=0;a=c[d];++d){var e=a.getAttribute("data-pagespeed-url-hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].o&&a.height>=b[e].m)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b}var C="";u("pagespeed.CriticalImages.getBeaconData",function(){return C});u("pagespeed.CriticalImages.Run",function(b,c,a,d,e,f){var r=new y(b,c,a,e,f);x=r;d&&w(function(){window.setTimeout(function(){A(r)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','https://preview.colorlib.com/theme/news/','oJcOUTg7z9',true,false,'NUmGieHVXQo');
//]]></script><img  src="assets/img/logo/newlogo.png" alt="" data-pagespeed-url-hash="4238934543" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
</div>
</div>
</div>
<!-- Preloader Start -->
<header>
<!-- Header Start -->
<div class="header-area">
<div class="main-header ">

<!-- <div class="header-mid gray-bg"> -->
<div class="container">
<div class="row d-flex align-items-center">
<div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
<div class="logo">
<a href="index.php"><img style="height:150px;width:140px;" src="assets/img/logo/newlogo.png" alt="" data-pagespeed-url-hash="4238934543" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
</div>
</div>

</div>
</div>
<!-- </div> -->
<div style="background-color: #4287f5;" class="header-bottom header-sticky">
<div class="container">
<div class="row align-items-center">
<div  class="col-xl-12 col-lg-12 col-md-12 header-flex">
<!-- sticky -->
<div class="sticky-logo">
<!-- <a href="index.php"><img style="height:50px;width:150px;" src="assets/img/logo/newlogo.png" alt="" data-pagespeed-url-hash="4238934543" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a> -->
<a href="index.php" style="font-size:30px;"><img src="newheader.png" style="height: 55px;width:180px;" alt=""></a>
</div>
<!-- Main-menu -->
<div class="main-menu d-none d-md-block">
<nav>
    
    <!-- <div class="nav nav-tabs" id="nav-tab" role="tablist">   -->
<ul class="nav nav-tabs" id="navigation"  role="tablist">
    
    <!-- <li>-->
      
    <!-- <a class="" href="index.php">Home</a>

    <a class="" href="about.php">About Us</a>
    <a class="" href="contact.php">Contact Us</a>
    <a class="" id="nav-Entertainment-tab" data-toggle="tab" href="#nav-Entertainment" role="tab" aria-controls="nav-Entertainment" aria-selected="true">Entertainment</a>
    <a class="" id="nav-Start-ups-tab" data-toggle="tab" href="#nav-Start-ups" role="tab" aria-controls="nav-Start-ups" aria-selected="false">Start-ups</a>
    <a class="" id="nav-Politics-tab" data-toggle="tab" href="#nav-Politics" role="tab" aria-controls="nav-Politics" aria-selected="false">Politics</a>
    <a class="" id="nav-Advice-tab" data-toggle="tab" href="#nav-Advice" role="tab" aria-controls="nav-Advice" aria-selected="false">Advice</a>
    -->
    <!-- <li><a class="" href="index.php">Home</a></li>
    <li><a class="" href="about.php">About Us</a></li>
    <li><a class="" href="contact.php">Contact Us</a></li> -->
    <li ><a class="" id="nav-Entertainment-tab" data-toggle="tab" href="#nav-Entertainment" role="tab" aria-controls="nav-Entertainment" aria-selected="true">Entertainment</a></li>
  <li>  <a class="" id="nav-Education-tab"  data-toggle="tab" href="#nav-Education" role="tab" aria-controls="nav-Education" aria-selected="false">Education</a></li>
  <li>  <a class="" id="nav-Sports-tab"  data-toggle="tab" href="#nav-Sports" role="tab" aria-controls="nav-Sports" aria-selected="false">Sports</a></li>
  <li>  <a class="" id="nav-Health-tab" data-toggle="tab" href="#nav-Health" role="tab" aria-controls="nav-Health" aria-selected="false">Health</a></li>
  <li><a class="" id="nav-Politics-tab" data-toggle="tab" href="#nav-Politics" role="tab" aria-controls="nav-Politics" aria-selected="false">Politics</a></li>
   
  <!-- <li><a class="ml-1 mr-1" id="nav-Advice-tab" data-toggle="tab" href="#nav-Advice" role="tab" aria-controls="nav-Advice" aria-selected="false">Advice</a></li>
    -->

    <li><a href="#">More</a>
        <ul class="submenu nav nav-tabs" id="nav-tab" role="tablist" >
        <!-- <div class="nav nav-tabs" id="nav-tab" role="tablist"> -->
    <li>  <a class="" id="nav-Success_Stories-tab" style="color:#4287f5;" data-toggle="tab" href="#nav-Success_Stories" role="tab" aria-controls="nav-Success_Stories" aria-selected="false">Success Stories</a></li>
    <li><a class="" id="nav-Start-ups-tab" style="color:#4287f5;" data-toggle="tab" href="#nav-Start-ups" role="tab" aria-controls="nav-Start-ups" aria-selected="false">Start-ups</a></li>

  <li>  <a class="" id="nav-Technology-tab" style="color:#4287f5;" data-toggle="tab" href="#nav-Technology" role="tab" aria-controls="nav-Technology" aria-selected="false">Technology</a></li>
  <li>  <a class="" id="nav-Fashion_And_Lifestyle-tab" style="color:#4287f5;" data-toggle="tab" href="#nav-Fashion_And_Lifestyle" role="tab" aria-controls="nav-Fashion_And_Lifestyle" aria-selected="false">Fashion and lifestyle</a></li>
  <li>  <a class="" id="nav-Others-tab" style="color:#4287f5;" data-toggle="tab" href="#nav-Others" role="tab" aria-controls="nav-Others" aria-selected="false">Others</a></li>

  <!-- <a class="" id="nav-Success_Stories-tab" style="color:#4287f5;" data-toggle="tab" href="#nav-Success_Stories" role="tab" aria-controls="nav-Success_Stories" aria-selected="false">Success Stories</a>
    <a class="" id="nav-Health_And_Technology-tab" style="color:#4287f5;" data-toggle="tab" href="#nav-Health_And_Technology" role="tab" aria-controls="nav-Health_And_Technology" aria-selected="false">Health and Technology</a>
    <a class="" id="nav-Fashion_And_Lifestyle-tab" style="color:#4287f5;" data-toggle="tab" href="#nav-Fashion_And_Lifestyle" role="tab" aria-controls="nav-Fashion_And_Lifestyle" aria-selected="false">Fashion and lifestyle</a>
   <a class="" id="nav-Education_And_Sports-tab" style="color:#4287f5;" data-toggle="tab" href="#nav-Education_And_Sports" role="tab" aria-controls="nav-Education_And_Sports" aria-selected="false">Education and Sports</a>
   <a class="" id="nav-Others-tab" style="color:#4287f5;" data-toggle="tab" href="#nav-Others" role="tab" aria-controls="nav-Others" aria-selected="false">Others</a> -->

<!-- </div> -->
</ul>
<li><a class="" href="contact.php">Mail Us</a></li>
<li class="k1" ><a class="pl-3 k1 pr-3" href="https://www.fb.com/"><i  class="fab fa-facebook-f"></i></a></li>
<li class="k1"  ><a class="pl-3 k1 pr-3" href="#"><i  class="fab fa-twitter"></i></a></li>
<li class="k1" ><a class="pl-3 k1 pr-3" href="#"><i  class="fab fa-instagram"></i></a></li>
<li ><a class="pl-3 pr-3" style="color:blue;" href="#"><?php echo date("d-m-y"); ?></a></li>
<li><a class="pl-3 " style="color: blue;" href="#"><div id="txt"></div></a></li>


    </ul>
 <!-- </div> -->
<!--</li> -->
</nav>
</div>
</div>



<!-- Mobile Menu -->
<div class="col-12">
<div class="mobile_menu d-block d-md-none"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Header End -->
</header>
<main>
<!-- Trending Area Start -->
<div class="trending-area fix pt-25 gray-bg">
<div class="container">
<div class="trending-main">
<div class="row">
<div class="col-lg-8">
<!-- Trending Top -->
<div class="slider-active">
<!-- Single -->
<?php 

            $sql1="SELECT * FROM top3";
            $result1=mysqli_query($conn,$sql1);
    
            while ($row1=mysqli_fetch_array($result1)) {
 
 ?>

<div class="single-slider">
<div class="trending-top mb-30">
<div class="trend-top-img">
<img class="top3-image" src="./Vendor/images/<?php echo $row1['image']; ?>" alt="" data-pagespeed-url-hash="870328723" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
<div class="trend-top-cap">
<span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms"><?php echo $row1['category'];?></span>
<h2><a href="article.php?table=top3&id=<?php echo $row1['id'];?>" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms"><?php echo $row1['headline'];?></a></h2>
<p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by <?php echo $row1['author']; ?> - <?php $date1=$row1['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></p>
</div>
</div>
</div>
</div>

<?php
}
?>
</div>
</div>
<!-- Right content -->
<div class="col-lg-4">
<!-- Trending Top -->



<div class="row">

<?php
$x = 1;

$sql2="SELECT * FROM top3";
$result2=mysqli_query($conn,$sql2);

while($x <= 2) {
    $row2=mysqli_fetch_array($result2);

?>

<div class="col-lg-12 col-md-6 col-sm-6">
<div class="trending-top mb-30">
<div class="trend-top-img">
<img class="top2-image" src="./Vendor/images/<?php echo $row2['image']; ?>" alt="" data-pagespeed-url-hash="1164828644" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
<div class="trend-top-cap trend-top-cap2">
<span class="bgb"><?php echo $row2['category'];?></span>
<h2><a href="article.php?table=top3&id=<?php echo $row2['id']; ?>"><?php echo $row2['headline'];?></a></h2>
<p>by <?php echo $row2['author']; ?> - <?php $date1=$row2['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></p>
</div>
</div>
</div>
</div>

<?php
$x++;
}
?>


<!-- <div class="col-lg-12 col-md-6 col-sm-6">
<div class="trending-top mb-30">
<div class="trend-top-img">
<img src="assets/img/trending/trending_top4.jpg" alt="" data-pagespeed-url-hash="1459328565" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
<div class="trend-top-cap trend-top-cap2">
<span class="bgg">TECH </span>
<h2><a href="latest_news.html">Secretart for Economic Air plane that looks like</a></h2>
<p>by Alice cloe - Jun 19, 2020</p>
</div>
</div>
</div>
</div> -->


</div>
</div>
</div>
</div>
</div>
</div>

<!-- <iframe src="categori.php" frameborder="0"></iframe> -->
<div class="about-area2 gray-bg pt-60 pb-60">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="whats-news-wrapper">
    <!-- Heading & Nav Button -->
    <div class="row justify-content-between align-items-end mb-15">
    <!-- <div class="col-xl-4">
    <div class="section-tittle mb-30">
    <h3>Whats New</h3>
    </div>
    </div> -->
    <div class="">
    <div class="properties__button">
    <!--Nav Button  -->
    <nav>
    

    </nav>
    <!--End Nav Button  -->
    </div>
    </div>
    </div>
    <!-- Tab content -->
    <div class="row">
    <div class="col-12">
    <!-- Nav Card -->
    <div class="tab-content" id="nav-tabContent">
      <?php
      function custom_echo($x, $length,$y1)
      {
        if(strlen($x)<=$length)
        {
          echo $x;
        }
        else
        {
          $y=substr($x,0,$length) . '<a style="color:#FF2143;" href="article.php?table=headlines&id='.$y1.'"> [More...]</a>';
          echo $y;
        }
      }
      ?>
    <!-- card one -->
    <div class="tab-pane fade show active" id="nav-Entertainment" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="row">
    
    <?php 
    $sql="SELECT * FROM headlines where category='Entertainment'";
    $result=mysqli_query($conn,$sql);
    ?>

   <?php
      
    while ($row=mysqli_fetch_array($result)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row['id'];?>">
    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img">
    <img class="image-height" style="" src="./Vendor/images/<?php echo $row['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row['id'];?>"><?php echo $row['headline'];?> </a></h4>
    <span>by <?php echo $row['author']; ?> - <?php $date1=$row['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row['description'], 60,$row['id']) ?></p>
    </div>
    </div>
    </div>
    </a>

    <?php
    }
    ?>
    </div>
    </div>
    <!-- Card two -->
    <div class="tab-pane fade" id="nav-Start-ups" role="tabpanel" aria-labelledby="nav-Start-ups">
    <div class="row">
   
    <?php 
    $sql1="SELECT * FROM headlines where category='Start-ups'";
    $result1=mysqli_query($conn,$sql1);
    ?>

   <?php
    while ($row1=mysqli_fetch_array($result1)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row1['id'];?>">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img">
    <img class="image-height" src="./Vendor/images/<?php echo $row1['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row1['id'] ?>"><?php echo $row1['headline'];?> </a></h4>
    <span>by <?php echo $row1['author']; ?> - <?php $date1=$row1['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row1['description'], 60,$row1['id']) ?></p>

    </div>
    </div>
    </div>
    </a>
    <?php
    }
    ?>
    </div>
    </div>
    <!-- Card three -->
    
    <!-- card fure -->
    <div class="tab-pane fade" id="nav-Fashion_And_Lifestyle" role="tabpanel" aria-labelledby="nav-Fashion_And_Lifestyle">
    <div class="row">
   
    <?php 
    $sql3="SELECT * FROM headlines where category='Fashion And Lifestyle'";
    $result3=mysqli_query($conn,$sql3);
    ?>

   <?php
    while ($row3=mysqli_fetch_array($result3)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row3['id'];?>">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img">
    <img class="image-height" src="./Vendor/images/<?php echo $row3['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row3['id'] ?>"><?php echo $row3['headline'];?> </a></h4>
    <span>by <?php echo $row3['author']; ?> - <?php $date1=$row3['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row3['description'], 60,$row3['id']) ?></p>

    </div>
    </div>
    </div>
    </a>
    <?php
    }
    ?>
    </div>
    </div>
    <!-- card Five -->
    <div class="tab-pane fade" id="nav-Politics" role="tabpanel" aria-labelledby="nav-Politics">
    <div class="row">
    
    <?php 
    $sql4="SELECT * FROM headlines where category='Politics'";
    $result4=mysqli_query($conn,$sql4);
    ?>

   <?php
    while ($row4=mysqli_fetch_array($result4)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row4['id'];?>">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img">
    <img class="image-height" src="./Vendor/images/<?php echo $row4['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row4['id'] ?>"><?php echo $row4['headline'];?> </a></h4>
    <span>by <?php echo $row4['author']; ?> - <?php $date1=$row4['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row4['description'], 60,$row4['id']) ?></p>

    </div>
    </div>
    </div>
    </a>
    <?php
    }
    ?>
    </div>
    </div>
    <!-- Card Six -->
    <div class="tab-pane fade" id="nav-Education_And_Sports" role="tabpanel" aria-labelledby="nav-Education_And_Sports">
    <div class="row">
    
    <?php 
    $sql5="SELECT * FROM headlines where category='Education And Sports'";
    $result5=mysqli_query($conn,$sql5);
    ?>

   <?php
    while ($row5=mysqli_fetch_array($result5)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row5['id'];?>">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img ">
    <img class="image-height" src="./Vendor/images/<?php echo $row5['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row5['id'] ?>"><?php echo $row5['headline'];?> </a></h4>
    <span>by <?php echo $row5['author']; ?> - <?php $date1=$row5['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row5['description'], 60,$row5['id']) ?></p>

    </div>
    </div>
    </div>
    </a>
    <?php
    }
    ?>
    </div>
    </div>
    <!-- Card seven  -->
    <div class="tab-pane fade" id="nav-Advice" role="tabpanel" aria-labelledby="nav-Advice">
    <div class="row">
    
    <?php 
    $sql6="SELECT * FROM headlines where category='Advice'";
    $result6=mysqli_query($conn,$sql6);
    ?>

   <?php
    while ($row6=mysqli_fetch_array($result6)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row6['id'];?>">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img ">
    <img class="image-height" src="./Vendor/images/<?php echo $row6['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row6['id'] ?>"><?php echo $row6['headline'];?> </a></h4>
    <span>by <?php echo $row6['author']; ?> - <?php $date1=$row6['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row6['description'], 60,$row6['id']) ?></p>

    </div>
    </div>
    </div>
    </a>
    <?php
    }
    ?>
    </div>
    </div>
    <!-- Card eight -->
    <div class="tab-pane fade" id="nav-Success_Stories" role="tabpanel" aria-labelledby="nav-Success_Stories">
    <div class="row">
    
    <?php 
    $sql7="SELECT * FROM headlines where category='Success Stories'";
    $result7=mysqli_query($conn,$sql7);
    ?>

   <?php
    while ($row7=mysqli_fetch_array($result7)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row7['id'];?>">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img ">
    <img class="image-height" src="./Vendor/images/<?php echo $row7['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row7['id'] ?>"><?php echo $row7['headline'];?> </a></h4>
    <span>by <?php echo $row7['author']; ?> - <?php $date1=$row7['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row7['description'], 60,$row7['id']) ?></p>

    </div>
    </div>
    </div>
    </a>
    <?php
    }
    ?>
    </div>
    </div>
    <!-- Card nine -->
    <div class="tab-pane fade" id="nav-Others" role="tabpanel" aria-labelledby="nav-Others">
    <div class="row">
    
    <?php 
    $sql8="SELECT * FROM headlines where category='Others'";
    $result8=mysqli_query($conn,$sql8);
    ?>

   <?php
    while ($row8=mysqli_fetch_array($result8)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row8['id'];?>">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img ">
    <img class="image-height" src="./Vendor/images/<?php echo $row8['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row8['id'] ?>"><?php echo $row8['headline'];?> </a></h4>
    <span>by <?php echo $row8['author']; ?> - <?php $date1=$row8['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row8['description'], 60,$row8['id']) ?></p>

    </div>
    </div>
    </div>
    </a>
    <?php
    }
    ?>
    </div>
    </div>
    <!-- Card ten -->
    <div class="tab-pane fade" id="nav-Education" role="tabpanel" aria-labelledby="nav-Education">
    <div class="row">
    
    <?php 
    $sql9="SELECT * FROM headlines where category='Education'";
    $result9=mysqli_query($conn,$sql9);
    ?>

   <?php
    while ($row9=mysqli_fetch_array($result9)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row9['id'];?>">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img ">
    <img class="image-height" src="./Vendor/images/<?php echo $row9['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row9['id'] ?>"><?php echo $row9['headline'];?> </a></h4>
    <span>by <?php echo $row9['author']; ?> - <?php $date1=$row9['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row9['description'], 60,$row9['id']) ?></p>

    </div>
    </div>
    </div>
    </a>
    <?php
    }
    ?>
    </div>
    </div>
    <!-- Card eleven -->
    <div class="tab-pane fade" id="nav-Sports" role="tabpanel" aria-labelledby="nav-Sports">
    <div class="row">
    
    <?php 
    $sql10="SELECT * FROM headlines where category='Sports'";
    $result10=mysqli_query($conn,$sql10);
    ?>

   <?php
    while ($row10=mysqli_fetch_array($result10)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row10['id'];?>">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img ">
    <img class="image-height" src="./Vendor/images/<?php echo $row10['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row10['id'] ?>"><?php echo $row10['headline'];?> </a></h4>
    <span>by <?php echo $row10['author']; ?> - <?php $date1=$row10['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row10['description'], 60,$row10['id']) ?></p>

    </div>
    </div>
    </div>
    </a>
    <?php
    }
    ?>
    </div>
    </div>
    <!-- Card twelve -->
    <div class="tab-pane fade" id="nav-Health" role="tabpanel" aria-labelledby="nav-Health">
    <div class="row">
    
    <?php 
    $sql11="SELECT * FROM headlines where category='Health'";
    $result11=mysqli_query($conn,$sql11);
    ?>

   <?php
    while ($row11=mysqli_fetch_array($result11)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row11['id'];?>">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img ">
    <img class="image-height" src="./Vendor/images/<?php echo $row11['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row11['id'] ?>"><?php echo $row11['headline'];?> </a></h4>
    <span>by <?php echo $row11['author']; ?> - <?php $date1=$row11['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row11['description'], 60,$row11['id']) ?></p>

    </div>
    </div>
    </div>
    </a>
    <?php
    }
    ?>
    </div>
    </div>
    <!-- Card thirteen -->
    <div class="tab-pane fade" id="nav-Technology" role="tabpanel" aria-labelledby="nav-Technology">
    <div class="row">
    
    <?php 
    $sql12="SELECT * FROM headlines where category='Technology'";
    $result12=mysqli_query($conn,$sql12);
    ?>

   <?php
    while ($row12=mysqli_fetch_array($result12)) {
   ?>
   <a href="article.php?table=headlines&id=<?php echo $row12['id'];?>">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="whats-news-single mb-40 mb-40">
    <div class="whates-img ">
    <img class="image-height" src="./Vendor/images/<?php echo $row12['image']; ?>" alt="" data-pagespeed-url-hash="45574907" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="whates-caption whates-caption2">
    <h4><a href="article.php?table=headlines&id=<?php echo $row12['id'] ?>"><?php echo $row12['headline'];?> </a></h4>
    <span>by <?php echo $row12['author']; ?> - <?php $date1=$row12['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></span>
    <p><?php custom_echo($row12['description'], 60,$row12['id']) ?></p>

    </div>
    </div>
    </div>
    </a>
    <?php
    }
    ?>
    </div>
    </div>

    </div>
    <!-- End Nav Card -->
    </div>
    </div>
    </div>
    </div>
   
    </div>
    </div>
    </div>
</main>
<footer>
<!-- Footer Start-->
<div class="footer-main footer-bg">
<div class="footer-area footer-padding">
<div class="container">
<div class="row d-flex justify-content-between">
<div class="col-md-4">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Popular post</h4>
</div>
<!-- Popular post -->

<?php
$x = 1;

$sql3="SELECT * FROM top3";
$result3=mysqli_query($conn,$sql3);

while($x <= 3) {
    $row3=mysqli_fetch_array($result3);

?>



<div class="whats-right-single mb-20">
<div class="whats-right-img">
<img style="height: 60px;width:60px;" src="./Vendor/images/<?php echo $row3['image']; ?>" alt="" data-pagespeed-url-hash="1446202644" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
<div class="whats-right-cap">
<h4><a href="article.php?table=top3&id=<?php echo $row3['id']; ?>"><?php echo $row3['headline'];?></a></h4>
<p>by <?php echo $row3['author']; ?> - <?php $date1=$row3['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></p>
</div>
</div>

<?php
$x++;
}
?>

</div>
</div>
   
            <div class="col-md-4">
            <div class="single-footer-caption mb-50">
            <div class="single-footer-caption mb-30">
            <!-- logo -->
            <div id="l1" class="m1 footer-logo"><h4 class="text-white">Navigation</h4>
            <div> 

              <a href="index.php"><p class="mt-4 text-white" style="font-size: 17px;">Home</p></a>
              <a href="article.php"><p class="text-white" style="font-size: 17px;">Articles</p></a>
              <a href="about.php"><p class="text-white" style="font-size: 17px;">About Us</p></a>
              <a href="contact.php"><p class="text-white" style="font-size: 17px;">Contact Us</p></a>
            </div>
            
        </div>

            </div>
            </div>
            </div>

            
            <div class="col-md-4">
        <p class="info1"><span style="font-size: 20px;" class="text-white font-wight-bold">About </span> - Truthteller is a one stop destination for all latest news and important information. Our goal is to provide "legit news, zero biasness" because you rightful information where truth is not hidden. Along with latest information on Entertainment, Health and Technology, Start-ups, Fashion and Lifestyle, Politics, Education and Sports, we believe that you deserve something extra and special that's why we have Truthteller Original, Advice, Success Stories, and Other things which will keep you entertained.
        Information is available in both written and video formats to keep things convenient to our readers.</p>
        
    </div>

</div>
<!-- footer-bottom aera -->

</div>
<!-- Footer End-->
<div style="text-align: center;align-items:center;" class="row ">
    <div class="col-12 mt-4">
      <p class="text-white font-weight-bold">Copyright ©2020 All rights reserved | Robobloggers Private Limited</p>
    </div>
  </div>
</footer>
<!-- Search model Begin -->
<div class="search-model-box">
<div class="d-flex align-items-center h-100 justify-content-center">
<div class="search-close-btn">+</div>
<form class="search-model-form">
<input type="text" id="search-input" placeholder="Searching key.....">
</form>
</div>
</div>
<!-- Search model end -->
<!-- JS here -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    

<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>
<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>
<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-23581568-13');</script>
</body>
</html>