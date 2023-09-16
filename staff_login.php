<?php
if(!isset($_POST['submit'])) 
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 $con=mysqli_connect("localhost","root","","staff_login");
 $sql="SELECT * FROM entries Where username='$username' AND password ='$password'";
 
 $result=mysqli_query($con,$sql);
 $resultcheck=mysqli_num_rows($result); 
 if($resultcheck>0)
 {
  header ('Location: \check_slot.html');
 }
 else
{
 echo'<script type="text/JavaScript"> 
 prompt("Incorrect username/password");
 </script>';
 echo '<a href ="staff_login.html">Click here to go back</a>';
} 
} 
?>
