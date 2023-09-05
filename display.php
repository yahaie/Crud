<?php 
include('conncet.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    <title>Crud Operation</title>
</head>
<body>
    <div class="container">
<button class="btn btn-primary" >
    <a href="user.php" class="text-light">Add user</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>

    </tr>
  </thead>
  <tbody>
 <?php
 $sql="select *from `crud`";
 $res=mysqli_query($conn,$sql);
 if($res){
    while($row=mysqli_fetch_assoc($res)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>  
        <td>
    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" >Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
</td>      
        </tr>';

 }
}
?>

  </tbody>
</table>
    </div>
</body>
</html>