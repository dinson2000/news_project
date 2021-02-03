<!--  -->
<?php 
require "connection.php";
require "function.php";
if(isset($_GET['type']) && $_GET['type']!=''){
  $type=get_post($conn,$_GET['type']);
  if($type=='delete'){
  $id=get_post($conn,$_GET['id']);
  $delete_sql="DELETE from headlines where id='$id'";
  mysqli_query($conn,$delete_sql);
  }


}

// $sql="SELECT product.*,categories.categories FROM product,categories where product.categories_id=categories.id order by product.id desc";
$sql="SELECT * FROM headlines";
$result=mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SR NO.</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Headline</th>
      <th scope="col">Description</th>
      <th scope="col">Uploaded On</th>
      <th scope="col">Author</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
  while($row=mysqli_fetch_assoc($result)){ 
  ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><img style="height:40px;width:40px;" src="<?php echo "images/".$row['image'];?>"></td>
      <td><?php echo $row['category']; ?></td>
      <td><?php echo $row['headline']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo $row['uploadon']; ?></td>
      <td><?php echo $row['author']; ?></td>
      <td>
      <?php
       
        echo "&nbsp&nbsp<span class='btn btn-sm btn-primary'><a style='text-decoration:none;color:black;' href='addnews.php?id=".$row['id']."'>Edit</a></span>";
        echo "&nbsp&nbsp<span class='btn btn-sm btn-danger'><a style='text-decoration:none;color:black;' href='?type=delete&id=".$row['id']."'>Delete</a></span>";
        // echo "&nbsp&nbsp<a style='text-decoration:none;' href='?type=edit&id=".$row['id']."'>Edit</a>";

      ?>
      </td>
    </tr>
    <?php $i++; } ?>
  </tbody>
</table>
</body>
</html>