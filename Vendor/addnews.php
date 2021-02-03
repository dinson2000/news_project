  <?php
    require "connection.php";
    require "function.php";
    // $sql = "INSERT INTO headlines (image,headline,description,category,uploadon,author)VALUES('$image','$headline','$description','$category','$uploadon','$author')";
    // $uploadon=$_POST['date'];
    // $uploadon=date_format(date_create($uploadon),"Y-m-d");

// $name = '';
$image = '';
$headline = '';
$description = '';
$category = '';
$uploadon = '';
$author = '';
$msg = "";
// $msg1 = "";
if (isset($_GET['id']) && $_GET['id'] != '') {
  $id = get_post($conn, $_GET['id']);
  $result = mysqli_query($conn, "SELECT * FROM headlines where id='$id'");
  $check = mysqli_num_rows($result);
  if ($check > 0) {
    $row = mysqli_fetch_assoc($result);
    $image = $row['image'];
    $headline = $row['headline'];
    $description = $row['description'];
    $category = $row['category'];
    $uploadon = $row['uploadon'];
    $author = $row['author'];
  } else {
    header('location:news.php');
    die();
  }
}

if (isset($_POST['submit'])) {

  $headline = get_post($conn, $_POST['headline']);
  $description = get_post($conn, $_POST['description']);
  $category = get_post($conn, $_POST['category']);
  // $uploadon = get_post($conn, $_POST['uploadon']);
  $uploadon=get_post($conn,$_POST['date']);
    $uploadon=date_format(date_create($uploadon),"Y-m-d");
  $author = get_post($conn, $_POST['author']);

  $image = $_FILES['image']['name'];
  $image_temp = $_FILES['image']['tmp_name'];

  if ($_FILES['image']['type'] != '' && ($_FILES['image']['type'] != 'image/jpg' || $_FILES['image']['type'] != 'image/png' || $_FILES['image']['type'] != 'image/jpeg' || $_FILES['image']['type'] != 'image/JPG' || $_FILES['image']['type'] != 'image/PNG' || $_FILES['image']['type'] != 'image/JPEG')) {
    $msg1="Please select jpg,png,jpeg and JPG,PNG,JPEG format";
  }
// prx($_FILES);
  if ($msg == '') {
    if (isset($_GET['id']) && $_GET['id'] != '') {
      if ($_FILES['image']['name'] != '') {

        $image = $_FILES['image']['name'];
        move_uploaded_file($image_temp, "images/" . $image);
        $update_sql = "UPDATE headlines set image='$image',headline='$headline',description='$description',category='$category',author='$author' where id='$id'";
      } else {
        $update_sql = "UPDATE headlines set headline='$headline',description='$description',category='$category',author='$author' where id='$id'";

       }
      mysqli_query($conn, $update_sql);
    } else {
      $image_temp = $_FILES['image']['tmp_name'];
      $image = $_FILES['image']['name'];
      $target = "images/" . basename($image);
      move_uploaded_file($image_temp, "images/" . $image);
    

      mysqli_query($conn, "INSERT INTO headlines (image,headline,description,category,uploadon,author)VALUES('$image','$headline','$description','$category','$uploadon','$author')");
    }
    echo "<script>alert('Submitted !!');</script>";
    header('location:news.php');
    die();
  }
}

   ?>
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
    <h4 class="display-4 mb-4">Add News</h4>
    <form action="" method="POST" enctype="multipart/form-data">
    <p class="text-danger mt-2"> <?php echo $msg; ?></p>

      <div class="form-group">
        <label for="category">Select Category:</label>
        <?php 
          if(isset($row['category'])){
            $required='';
            $required1="<option selected value='$row[category]'>" . $row['category'] . "</option>";
          }
          else{
              $required="required";
              $required1="";
            }
        ?>
        <select class="form-control" name="category" id="category" <?php echo $required ?>>
          <option value="">Select Category:</option>
       <?php echo $required1; ?>
          <option value="Entertainment">Entertainment</option>
          <option value="Start-ups">Start-ups</option>
          <option value="Health">Health</option>
          <option value="Technology">Technology</option>
          <option value="Fashion And Lifestyle">Fashion And Lifestyle</option>
          <option value="Politics">Politics</option>
          <option value="Education">Education</option>
          <option value="Sports">Sports</option>
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
        <input type="date" id="exampleFormControlFile1" value="<?php echo $uploadon; ?>" name="date" required>
      </div>
      
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Author Name:</label>
        <input type="text" textarea class="form-control" id="exampleFormControlTextarea1" value="<?php echo $author; ?>" rows="1" name="author" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Headline:</label>
        <input type="text" textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?php echo $headline; ?>" name="headline" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Description:</label>
        <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required><?php echo $description; ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
      <button type="reset" class="btn btn-dark ml-3" name="submit1">Reset</button>
    </form>
  </div>

</body>

</html>