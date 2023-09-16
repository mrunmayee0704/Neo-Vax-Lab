<?php

if(!isset($_POST['submit']))
{
    $fn=$_POST['username'];
    $ln=$_POST['password'];
  
 
    $con= mysqli_connect("localhost","root","","login");
    $sql="INSERT INTO login_data(username, password) VALUES ('$fn','$ln')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
    header('Location: \user_login.html');
    }
    else{
        echo"not succesful";
    }
}
?>