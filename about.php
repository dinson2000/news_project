<?php
require "connection.php"
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>About</title>
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
<link rel="stylesheet" href="assets/css/responsive.css">
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
  .m1{
    margin-left:50px;
  }
    @media screen and (max-width:767px){

  li .k1{
        display:none;
    }
    .m1{
      margin-left: 0px;
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
(function(){for(var g="function"==typeof Object.defineProperties?Object.defineProperty:function(b,c,a){if(a.get||a.set)throw new TypeError("ES3 does not support getters and setters.");b!=Array.prototype&&b!=Object.prototype&&(b[c]=a.value)},h="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,k=["String","prototype","repeat"],l=0;l<k.length-1;l++){var m=k[l];m in h||(h[m]={});h=h[m]}var n=k[k.length-1],p=h[n],q=p?p:function(b){var c;if(null==this)throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");c=this+"";if(0>b||1342177279<b)throw new RangeError("Invalid count value");b|=0;for(var a="";b;)if(b&1&&(a+=c),b>>>=1)c+=c;return a};q!=p&&null!=q&&g(h,n,{configurable:!0,writable:!0,value:q});var t=this;function u(b,c){var a=b.split("."),d=t;a[0]in d||!d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===c?d[e]?d=d[e]:d=d[e]={}:d[e]=c};function v(b){var c=b.length;if(0<c){for(var a=Array(c),d=0;d<c;d++)a[d]=b[d];return a}return[]};function w(b){var c=window;if(c.addEventListener)c.addEventListener("load",b,!1);else if(c.attachEvent)c.attachEvent("onload",b);else{var a=c.onload;c.onload=function(){b.call(this);a&&a.call(this)}}};var x;function y(b,c,a,d,e){this.h=b;this.j=c;this.l=a;this.f=e;this.g={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.i=d;this.b={};this.a=[];this.c={}}function z(b,c){var a,d,e=c.getAttribute("data-pagespeed-url-hash");if(a=e&&!(e in b.c))if(0>=c.offsetWidth&&0>=c.offsetHeight)a=!1;else{d=c.getBoundingClientRect();var f=document.body;a=d.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);d=d.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+d;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.g.height&&d<=b.g.width)}a&&(b.a.push(e),b.c[e]=!0)}y.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&z(this,b)};u("pagespeed.CriticalImages.checkImageForCriticality",function(b){x.checkImageForCriticality(b)});u("pagespeed.CriticalImages.checkCriticalImages",function(){A(x)});function A(b){b.b={};for(var c=["IMG","INPUT"],a=[],d=0;d<c.length;++d)a=a.concat(v(document.getElementsByTagName(c[d])));if(a.length&&a[0].getBoundingClientRect){for(d=0;c=a[d];++d)z(b,c);a="oh="+b.l;b.f&&(a+="&n="+b.f);if(c=!!b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),d=1;d<b.a.length;++d){var e=","+encodeURIComponent(b.a[d]);131072>=a.length+e.length&&(a+=e)}b.i&&(e="&rd="+encodeURIComponent(JSON.stringify(B())),131072>=a.length+e.length&&(a+=e),c=!0);C=a;if(c){d=b.h;b=b.j;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(r){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(D){}}f&&(f.open("POST",d+(-1==d.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}}function B(){var b={},c;c=document.getElementsByTagName("IMG");if(!c.length)return{};var a=c[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var d=0;a=c[d];++d){var e=a.getAttribute("data-pagespeed-url-hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].o&&a.height>=b[e].m)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b}var C="";u("pagespeed.CriticalImages.getBeaconData",function(){return C});u("pagespeed.CriticalImages.Run",function(b,c,a,d,e,f){var r=new y(b,c,a,e,f);x=r;d&&w(function(){window.setTimeout(function(){A(r)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','https://preview.colorlib.com/theme/news/about.html','oJcOUTg7z9',true,false,'kZHF8xGWucg');
//]]></script><img src="assets/img/logo/newlogo.png" alt="" data-pagespeed-url-hash="4238934543" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
</div>
</div>
</div>
<!-- Preloader Start -->
<header>
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
    <li><a class="" id="nav-Entertainment-tab" data-toggle="tab" href="#nav-Entertainment" role="tab" aria-controls="nav-Entertainment" aria-selected="true">Entertainment</a></li>
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
<div class="about-details section-padding30">
<div class="container">
<div class="row">

<div class=" col-lg-8">
<div class="about-details-cap mb-50">
<h4>Intro</h4>
<p>Truthteller is a leading news platform where one can find all the latest news and
     information related to various topics.
      Our ultimate goal is to "provide legit information to our 
      readers and keep them updated with everything happening with
      in and beyond the boundaries". </p><p>One can find information on interest like politics, Entertainment, Sports , Health and Technology, Fashion and Lifestyle, Education, Real Estate world, Business, Startups, Automobile, City news and many more. We believe that one language should never be the only priority and to break this barrier we bring news in both Hindi and English language to readers. Along with latest news , we cover Feature News, Interview, Public opinion Polls and also a special new seried series like "The one in 1.37 billion, On this Day, Hidden Truth, etc".
</p></div>

<div class="about-details-cap mb-50">
<h4>Note</h4>
<p>With Truthteller you will experience every aspect of news and information. As our every news story in based on various research, Sources, etc. Everyday you will get something new from us.
</p><p>Let's discover for truth together.</p>
</div>
</div>
<!-- <div class=" col-lg-4">
      
</div> -->
</div>
</div>
</div>
<!--? About Area Start-->

<!-- About Area End-->
<!-- Team Start -->
<!-- banner-last End -->
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
<h4><a href="article.php?table=top3&id=<?php echo $row3['id'] ?>"><?php echo $row3['headline'];?></a></h4>
<p>by <?php echo $row3['author']; ?> - <?php $date1=$row3['uploadon']; echo date_format(date_create($date1),"M d,Y"); ?></p>
</div>
</div>

<?php
$x++;
}
?>

</div>
</div>
   
            <div style="" class="col-md-4">
            <div class="single-footer-caption mb-50">
            <div class="single-footer-caption mb-30">
            <!-- logo -->
            <div id="l1" class="m1 footer-logo"><h4 class="text-white">Navigation</h4>
            <div style=""> 

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
<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
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
<!-- Breaking New Pluging -->
<script src="./assets/js/jquery.ticker.js"></script>
<script src="./assets/js/site.js"></script>
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