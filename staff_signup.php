<?php

if(!isset($_POST['submit']))
{
    $fn=$_POST['username'];
    $ln=$_POST['password'];
  
 
    $con= mysqli_connect("localhost","root","","staff_login");
    $sql="INSERT INTO entries(username, password) VALUES ('$fn','$ln')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
    header('Location: \check_slot.html');
    }
    else{
        echo"not succesful";
    }
}
?>