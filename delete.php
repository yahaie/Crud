<?php
include('conncet.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `crud` where id=$id";
    $res=mysqli_query($conn,$sql);
if($res){
    //echo 'delete successfull';
    header('location:display.php');
}else{
    die(mysqli_error($conn));

}
}
?>