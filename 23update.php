<?php
include '23conn.php';
$id=$_GET['updateid'];
$sql="select * from `curd` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="UPDATE `curd` SET `id`='$id',`name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password' where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Updated Successfully";
        // header('locaation:23display.php');

    }else{
die(mysqli_error($conn));

    }
    
}

// ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
<form method="post">
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="name" autocomplete="off" value=<?php echo $name; ?>>
    <div id="name" class="form-text">please Enter your name...</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" autocomplete="off" value=<?php echo $email; ?>>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form group mb-3">
  <label>Mobile</label>
  <input type="test" class="form-control"
  placeholder="Enter your mobile number"
  name="mobile" autocomplete="off" value=<?php echo $mobile; ?>/>
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" autocomplete="off" value=<?php echo $password; ?>>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</button>
</form>
</div>

  </body>
</html>