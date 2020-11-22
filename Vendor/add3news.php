<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    /*.container{ width:50%; height:80%;}*/
  </style>

  <title>Add news</title>
</head>

<body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <div class="container-fluid">
    <h4 class="display-4 mb-4">Add in 3 News</h4>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="sel1">Select Category:</label>
        <select class="form-control" name="sel1" id="sel1">
          <option value="Entertainment">Entertainment</option>
          <option value="Start-ups">Start-ups</option>
          <option value="Health And Technology">Health And Technology</option>
          <option value="Fashion And Lifestyle">Fashion And Lifestyle</option>
          <option value="Politics">Politics</option>
          <option value="Education And Sports">Education And Sports</option>
          <option value="Advice">Advice</option>
          <option value="Success Stories">Success Stories</option>
          <option value="Others">Others</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Choose Image:</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Select Date:</label><br>
        <input type="date" id="exampleFormControlFile1" name="date">
      </div>
      
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Author Name:</label>
        <input type="text" textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="author"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Headline:</label>
        <input type="text" textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="headline"></textarea>
      </div>

      <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
      <button type="reset" class="btn btn-dark ml-3" name="submit1">Reset</button>
    </form>
  </div>
  <?php

  session_start();
  $msg = "";
  if (isset($_POST['submit'])) {
    $target = "../cart/upload/" . basename($_FILES['image']['name']);
    require "connection.php";

    $category=$_POST['sel1'];
    $image = $_FILES['image']['name'];
    $uploadon=$_POST['date'];
    $uploadon=date_format(date_create($uploadon),"Y-m-d");
    $author=$_POST['author'];
    $headline = $_POST['headline'];

    // $tablename = "vendor_".$_SESSION['id'];
    // echo $tablename;

    $sql = "INSERT INTO top3 (headline,image,uploadon,category,author)VALUES('$headline','$image','$uploadon','$category','$author')";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
      echo "<script>alert('Your News is added successfully!!');</script>";
    } else {
      echo "<script>alert('Try Again');</script>";
    }

    //   if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    //     $msg="Uploaded Succefully";
    //   }
    //   else{
    //     $msg="There was a problem";
    //   }
  }
  ?>

</body>

</html>