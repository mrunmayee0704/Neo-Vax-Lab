<?php
if(!isset($_POST['submit'])) 
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 $con=mysqli_connect("localhost","root","","login");
 $sql="SELECT * FROM login_data Where username='$username' AND password ='$password'";
 
 $result=mysqli_query($con,$sql);
 $resultcheck=mysqli_num_rows($result); 
 if($resultcheck>0)
 {
  header ('Location: \Book_slot.html');
 }
 else
{
 echo'<script type="text/JavaScript"> 
 prompt("INcorrect username/password");
 </script>';
 echo '<a href ="user_login.html">Click here to go back</a>';
} 
} 
?>
