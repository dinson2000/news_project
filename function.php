<?php
function pr($arr){
  echo '<pre>';
  print_r($arr);
}
function prx($arr){
  echo '<pre>';
  print_r($arr);
  die();
}
function get_post($connection,$value){
  if($value!=''){

    $value=trim($value);
    $a=mysqli_real_escape_string($connection,$value);
    return $a;
  }
}

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