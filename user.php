<?php
include('conncet.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="insert into `crud`(name,email,mobile,password) value('$name','$email','$mobile','$password')";
    $res=mysqli_query($conn,$sql);
    if($res){
     header ('location:display.php');
    }else{
        die(mysqli_error($conn));
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>crud operation </title>
</head>
<body>
    <h1>CRUD</h1>
    <div class="container">
    <form method="POST">
  <div class="form-group">
    <label>Name</label><br>
    <input type="text"  class="form-control" name="name"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label>Email</label><br>
    <input type="email"  class="form-control" name="email"  placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label>Mobile</label><br>
    <input type="text"  class="form-control" name="mobile"  placeholder="Enter Mobile">
  </div>
  <div class="form-group">
    <label>Password</label><br>
    <input type="password"  class="form-control" name="password"  placeholder="Enter Name">
  </div>
  <br>
  <button  type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
    
</body>
</html>