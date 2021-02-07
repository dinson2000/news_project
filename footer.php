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

$sql3="SELECT * FROM headlines";
$result3=mysqli_query($conn,$sql3);

while($x <= 3) {
    $row3=mysqli_fetch_array($result3);

?>



<div class="whats-right-single mb-20">
<div class="whats-right-img">
<img style="height: 60px;width:90px;" src="./Vendor/images/<?php echo $row3['image']; ?>" alt="" data-pagespeed-url-hash="1446202644" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
<div class="whats-right-cap">
<h4><a href="article.php?table=headlines&id=<?php echo $row3['id']; ?>"><?php custom_echo($row3['headline'],50,$row3['id']);?></a></h4>
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
              <!-- <a href="article.php"><p class="text-white" style="font-size: 17px;">Articles</p></a> -->
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