<?php
if(!isset($_POST['submit'])) 
{
 $name=$_POST['name'];
 $vaccine=$_POST['vaccine'];
 $date=$_POST['date'];
 $con=mysqli_connect("localhost","root","","responses");
 $sql="SELECT * FROM forms Where name='$name' AND vaccine ='$vaccine' AND date = '$date'";
 
 $result=mysqli_query($con,$sql);
 $resultcheck=mysqli_num_rows($result); 
 if($resultcheck>0)
 {
  echo'<script type="text/JavaScript"> 
  prompt("SLOT CHECKED");
  </script>';
}
 else
{
 echo'<script type="text/JavaScript"> 
 prompt("INcorrect username/password");
 </script>';
//  echo '<a href ="check_slot.html">Click here to go back</a>';
header ('Location: \check_slot.html');
} 
} 




?>
