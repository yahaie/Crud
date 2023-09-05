<?php
include('conncet.php');
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$email=$row['email'];
$mobil=$row['mobile'];
$password=$row['password'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="update `crud` set id=$id,name='$name',
    email='$email',mobile=$mobile,password='$password' where id=$id";
    $res=mysqli_query($conn,$sql);
    if($res){
   // echo 'Update successfull';
        header('location:display.php');
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
    <input type="text"  class="form-control" name="name"  placeholder="Enter Name" value=<?php echo $name?>>
  </div>
  <div class="form-group">
    <label>Email</label><br>
    <input type="email"  class="form-control" name="email"  placeholder="Enter Email" value=<?php echo $email?>>
  </div>
  <div class="form-group">
    <label>Mobile</label><br>
    <input type="text"  class="form-control" name="mobile"  placeholder="Enter Mobile" value=<?php echo $mobile?>>
  </div>
  <div class="form-group">
    <label>Password</label><br>
    <input type="password"  class="form-control" name="password"  placeholder="Enter Name" value=<?php echo $password?>>
  </div>
  <br>
  <button  type="submit" name="submit" class="btn btn-primary">Update</button>
</form>

    </div>
    
</body>
</html>