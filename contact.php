<?php
    session_start();
  require "./connection.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Contact</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="site.webmanifest">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
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

</head>
<body>
<!-- Preloader Start -->
<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle"></div>
<div class="preloader-img pere-text">
<script data-pagespeed-no-defer>//<![CDATA[
(function(){for(var g="function"==typeof Object.defineProperties?Object.defineProperty:function(b,c,a){if(a.get||a.set)throw new TypeError("ES3 does not support getters and setters.");b!=Array.prototype&&b!=Object.prototype&&(b[c]=a.value)},h="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,k=["String","prototype","repeat"],l=0;l<k.length-1;l++){var m=k[l];m in h||(h[m]={});h=h[m]}var n=k[k.length-1],p=h[n],q=p?p:function(b){var c;if(null==this)throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");c=this+"";if(0>b||1342177279<b)throw new RangeError("Invalid count value");b|=0;for(var a="";b;)if(b&1&&(a+=c),b>>>=1)c+=c;return a};q!=p&&null!=q&&g(h,n,{configurable:!0,writable:!0,value:q});var t=this;function u(b,c){var a=b.split("."),d=t;a[0]in d||!d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===c?d[e]?d=d[e]:d=d[e]={}:d[e]=c};function v(b){var c=b.length;if(0<c){for(var a=Array(c),d=0;d<c;d++)a[d]=b[d];return a}return[]};function w(b){var c=window;if(c.addEventListener)c.addEventListener("load",b,!1);else if(c.attachEvent)c.attachEvent("onload",b);else{var a=c.onload;c.onload=function(){b.call(this);a&&a.call(this)}}};var x;function y(b,c,a,d,e){this.h=b;this.j=c;this.l=a;this.f=e;this.g={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.i=d;this.b={};this.a=[];this.c={}}function z(b,c){var a,d,e=c.getAttribute("data-pagespeed-url-hash");if(a=e&&!(e in b.c))if(0>=c.offsetWidth&&0>=c.offsetHeight)a=!1;else{d=c.getBoundingClientRect();var f=document.body;a=d.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);d=d.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+d;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.g.height&&d<=b.g.width)}a&&(b.a.push(e),b.c[e]=!0)}y.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&z(this,b)};u("pagespeed.CriticalImages.checkImageForCriticality",function(b){x.checkImageForCriticality(b)});u("pagespeed.CriticalImages.checkCriticalImages",function(){A(x)});function A(b){b.b={};for(var c=["IMG","INPUT"],a=[],d=0;d<c.length;++d)a=a.concat(v(document.getElementsByTagName(c[d])));if(a.length&&a[0].getBoundingClientRect){for(d=0;c=a[d];++d)z(b,c);a="oh="+b.l;b.f&&(a+="&n="+b.f);if(c=!!b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),d=1;d<b.a.length;++d){var e=","+encodeURIComponent(b.a[d]);131072>=a.length+e.length&&(a+=e)}b.i&&(e="&rd="+encodeURIComponent(JSON.stringify(B())),131072>=a.length+e.length&&(a+=e),c=!0);C=a;if(c){d=b.h;b=b.j;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(r){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(D){}}f&&(f.open("POST",d+(-1==d.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}}function B(){var b={},c;c=document.getElementsByTagName("IMG");if(!c.length)return{};var a=c[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var d=0;a=c[d];++d){var e=a.getAttribute("data-pagespeed-url-hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].o&&a.height>=b[e].m)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b}var C="";u("pagespeed.CriticalImages.getBeaconData",function(){return C});u("pagespeed.CriticalImages.Run",function(b,c,a,d,e,f){var r=new y(b,c,a,e,f);x=r;d&&w(function(){window.setTimeout(function(){A(r)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','https://preview.colorlib.com/theme/news/contact.html','oJcOUTg7z9',true,false,'Ngw4U-AOH60');
//]]></script><img src="data:image/webp;base64,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" alt="" data-pagespeed-url-hash="4238934543" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
</div>
</div>
</div>
<!-- Preloader Start -->
<header>
<!-- Header Start -->
<div class="header-area">
<div class="main-header ">

<div class="header-mid gray-bg">
<div class="container">
<div class="row d-flex align-items-center">
<!-- Logo -->
<div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
<div class="logo">
<a href="index.html"><img src="data:image/webp;base64,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" alt="" data-pagespeed-url-hash="4238934543" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-9">
<div class="header-banner f-right ">
<img src="assets/img/gallery/xheader_card.png.pagespeed.ic.km3KvJvPZR.webp" alt="" data-pagespeed-url-hash="3778432361" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
</div>
</div>
</div>
</div>
<div class="header-bottom header-sticky">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-8 col-lg-8 col-md-12 header-flex">
<!-- sticky -->
<div class="sticky-logo">
<a href="index.html"><img src="data:image/webp;base64,UklGRqYHAABXRUJQVlA4TJkHAAAvh4ANEFpR0LYNk/KH/TYIETEBAPIvF13btk3b1q9c27Zt27Zt27ZzRkZs27Yy94s5x5x7l71XvE5Z2dXL7PR9wC39YZRDIGnTv/M/4Uq2bdr6uGv7Ptu2bdu2/V5qK7VtI7oaUmsBQIDI3UkkBuAxgLtDt0aisYC7J5I2ba5dIySH5O6SuPsOJEmKlClvG22WG34gp7ZtVXtsLPVREAEkgKGOgghguN1/97lfqF/jvjAzdszMUBhkG0mj/jKP8hK7xGls265S1Kr7F/B1kp8MFo/P7BkJkCSZthW2bdu2bdu2bdu2bdu2bdvvfXMZuG2kaHqM6cHM7hdCH4BAIA1oBCaBLeAa+AAQ+AUegQNgDmgD8oGIMEkB0oFR4J4OvgPWgGogPEw6gBCgDjikF8Ab0AEkhckFUAVc0OSKBztsWGbEJC2GqzZYuXEazddvo3knnHnJyjQCfAMtySQAkoF5kuQrNttt6KNIISZpCAhkJddKkrWmPPKDJAmcADlhsgAUGvXx76na5KWnTjKQ6CrHSedIEvgHNAGBYVIANP5E8jmLOXpko6RepCXURZabXpAksAREvc9XwgN0keR++0rz5H4l/PRK40jyGxAfJjxAJ0kuNiQ9MY2F9tI98YsksJfwL4EGkq85DFRGY6QSP7e9IQmsAsFhQgNkA3/k951l0ZgpxsUNz0gC/e+zl7gAScAlycHKaRwoz9v7ngP4D5SGCQwwRXK5MRoXmoj1PQncALEJ/BnJI45kIBGf0Nl6kASGw0QFCAT2yZesyvOmcSI9kQ896avZedOq6JQXsw9/qAKTaxUZfLR9RCYbPsd0UU8Ekm9y8I59/3AF9V4gZAiUew6gDgzADy5gVRXgQBr8oQ5GYAXWYQ4GIR9cgQcgNQyBPQCf+ZeDihQLPygyeLgfJbkzbTQvQeS6Htusi+Vpy20SAHpdyDE4IC44oDw4QEgFYsiGDwCV4B4ygTIEUgHkfP3EIt/3PVZutn6Jo1ii5iWwbNUSiuSutoytgQebt4JlafWnFVxYggdVBQhYC3d/eg5ghH89BvSrYAff50hwHAJ977usgkzEiCJHjv+yXOSmYfs6YB953g31YP1GsCytVoXNMPNfVdBNb6/6gMbAAE6FmDkW2IfAOYB77RIzUqNgQlzePcPHkR+zTdiMUI1kRb48Ym93sHYkdIcZoFEFaNhNb99VBY6ggDYFjRVGuAJYIIWkPJAMqUIURXJVFGqHTV46bziQo9QxHHQpW+Sglb2QE25AQhXMC3Pw2EU8HPgPjH6E8xUC3AXqSRblTN1KIYlbqaqnnCO/MwzMfz9XtOIU/MINmKjX4HQWuqYCfzBAjYJsIMA/aABbUANtcIJCOJkT7gBBYIS85ol6KIWL71aq6grjyBueGQZ2f5vj3upXKxhBP4xBgAr25VMGYhXGegT4C9QKkYED3vYCPugCdwU2yR02qIdSyPU3t1J1kDLkGw6Zyaiq3tk72WKrxlZmCgJhDPIUEOC2jIcKEoEAxeV9oR9wLLR25DIjZKUjUuxiSRGtNRDFEhZi5rDYSlQFwjAG3Qoe5Th/KMz3BPAbSFUoSh74A8MQdAGgI4B3cpxGXkq7OnooVUtwQ7KJWKratlSywVb/W6GoAHl/doINARme6wCHIpVCpir41kzwAfWgCBCq72fDA5RSiY+u+MNHqblpkWwnjarmpVe1QDYbNoFlabWvavwT8CIEz1oQmakUfgCBKpDBrzkQrAG7SrKnfCrxqyvfka2Up8gkO8mkMnt2A8vSqkarn2Beh/f+BtDRXwkKM5VCvKqC5ygmfAcRBf5cD9bv7fueX12R6vUwsy6z3s3mcB+wLK0814wVXz609ld6EpkBBiKVwidgx0cI9vB1NMAZwAw3p9rln+q4/6E+H6d6KPXzHAhkgSGSRHBAuKnrEAM3I8LhaV3LEZn8K1RQs1jUJ9m/HkoF64EpGBdQBhyfAL0IBUjgBH8YrW53dZi37FzXKJjmpnF59yIDW+nRby34ADlavbdybyWtCjIDvyCi8FlzPIhjv+VdAAks4CmQwG+Yx+3qqK7r/K+qRz++5zvkWJZW/qpAW9uFfhX2Sg64A2RVfQof8A7R2SSD/GACo6xrTqUxsjiUHuPa/X1yRSsZVYCvA7hUGBjU0F6QsAYB65APDqALamACRZHoJpApj/NCnV/4QYYJh9I9zhfmJHLRClNVeJiFoF0VyioOuAS4uBr8mCvolcrzHqEODKmC4UJI8qsRscx71m0Ay9LqVFVhsbAE/4FJFaJnIbCLOWSvMsJPYFZ7HuhUqqqRxEd50AGfeeD2ncCytGpSVWguPEGtDqo9HEcBewu/VxjhLxiojnnx1i+xlULvIStjmBfv7wniSIWUwlP/B4BSYRJMYw5q8GU8wg1I6bCfkOIs/1/lYvFYJ3goFVzTFJQ4aIRO2AXICAEDPGAK/pVLcA1BgDzoN8UB57rJUymQgHoomjSAmBzAYKlboAwBUPMK5mAdFmEQKsAZeG+eZv3IVkdnZr86OPYZAmPfJTD2oYJjXy4w9ikDY982MPaxA2NfPyjOOQLj3CcozsGS8lwQeEjOc8HAOCcVAA==" alt="" data-pagespeed-url-hash="4238934543" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
</div>
<!-- Main-menu -->
<div class="main-menu d-none d-md-block">
<nav>
<ul id="navigation">
<li><a href="index.php">Home</a></li>
<li><a href="about.php">about</a></li>
<li><a href="categori.php">Category</a></li>

<li><a href="contact.php">Contact</a></li>
</ul>
</nav>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4">
<div class="header-right f-right d-none d-lg-block">
<!-- Heder social -->
<ul class="header-social">
<li><a href="https://www.fb.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
<li> <a href="#"><i class="fab fa-youtube"></i></a></li>
</ul>
<!-- Search Nav -->
<div class="nav-search search-switch">
<i class="fa fa-search"></i>
</div>
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
<!-- ================ contact section start ================= -->
<section class="contact-section">
<div class="container">

<div class="row">
<div class="col-12">
<h2 class="contact-title">Get in Touch</h2>
</div>
<div class="col-lg-8">
<form class="form-contact contact_form" action=""  method="POST" id="contactForm" novalidate>
<div class="row">
<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="message"  cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="number" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Number'" placeholder="Enter Number">
</div>
</div>
</div>
<!-- <div class="form-group mt-3">
<button type="submit" name="submit" class="button button-contactForm boxed-btn">Send</button>
</div> -->
<button class="btn btn-primary" name="submit">Submit</button>

</form>
</div>

<?php

  if (isset($_POST['submit'])) {

    $message=$_POST['message'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number = $_POST['number'];

    // $tablename = "vendor_".$_SESSION['id'];
    // echo $tablename;

    $sql = "INSERT INTO contact (message,name,email,number)VALUES('$message','$name','$email','$number')";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
        echo "<script>alert('Sent successfully!!');</script>";
      }
    }

  ?>



<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-home"></i></span>
<div class="media-body">
<h3> Jaipur, Rajasthan</h3>
<p>India</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-tablet"></i></span>
<div class="media-body">
<h3>+91 8955697797</h3>
<p>Mon to Fri 9am to 6pm</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-email"></i></span>
<div class="media-body">
<h3>abc@gmail.com</h3>
<p>Send us your query anytime!</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- ================ contact section end ================= -->
</main>
<footer>
<!-- Footer Start-->
<div class="footer-main footer-bg">
<div class="footer-area footer-padding">
<div class="container">
<div class="row d-flex justify-content-between">
<div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
<div class="single-footer-caption mb-50">
<div class="single-footer-caption mb-30">
<!-- logo -->
<div class="footer-logo">
<a href="index.html"><img src="assets/img/logo/xlogo2_footer.png.pagespeed.ic.G9rIsO0Iah.webp" alt="" data-pagespeed-url-hash="2538746903" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
</div>
<div class="footer-tittle">
<div class="footer-pera">
<p class="info1">Lorem ipsum dolor sit amet, nsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
<p class="info2">198 West 21th Street, Suite 721 New York,NY 10010</p>
<p class="info2">Phone: +95 (0) 123 456 789 Cell: +95 (0) 123 456 789</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Popular post</h4>
</div>
<!-- Popular post -->
<div class="whats-right-single mb-20">
<div class="whats-right-img">
<img src="assets/img/gallery/footer_post1.png" alt="" data-pagespeed-url-hash="1446202644" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
<div class="whats-right-cap">
<h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
<p>Jhon | 2 hours ago</p>
</div>
</div>
<!-- Popular post -->
<div class="whats-right-single mb-20">
<div class="whats-right-img">
<img src="assets/img/gallery/footer_post2.png" alt="" data-pagespeed-url-hash="1740702565" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
<div class="whats-right-cap">
<h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
<p>Jhon | 2 hours ago</p>
</div>
</div>
<!-- Popular post -->
<div class="whats-right-single mb-20">
<div class="whats-right-img">
<img src="assets/img/gallery/footer_post3.png" alt="" data-pagespeed-url-hash="2035202486" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
<div class="whats-right-cap">
<h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
<p>Jhon | 2 hours ago</p>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
<div class="single-footer-caption mb-50">
<div class="banner">
<img src="assets/img/gallery/xbody_card4.png.pagespeed.ic.ROJNJkUBZX.webp" alt="" data-pagespeed-url-hash="3029940342" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
</div>
</div>
</div>
</div>
</div>
<!-- footer-bottom aera -->

</div>
<!-- Footer End-->
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
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>
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