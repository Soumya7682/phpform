 <?php
include '23conn.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO `curd`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Data entered Successfully";
        header('locaation:23display.php');

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
    <input type="text" class="form-control" name="name" aria-describedby="name" autocomplete="off">
    <div id="name" class="form-text">please Enter your name...</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" autocomplete="off">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form group mb-3">
  <label>Mobile</label>
  <input type="test" class="form-control"
  placeholder="Enter your mobile number"
  name="mobile" autocomplete="off"/>
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" autocomplete="off">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <button class="btn btn-success"><a href="23display.php" class="text-light">Show Data</a>


</form>
</div>

  </body>
</html>