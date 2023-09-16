<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name= $_POST["name"];
    $hospital = $_POST["hospital"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $vaccine = $_POST["vaccineSelect"];
    $con= mysqli_connect("localhost","root","","responses");
    $sql="INSERT INTO forms(name, hospital, date, time, vaccine) VALUES ('$name','$hospital','$date','$time', '$vaccine')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
    header('Location: /user_login.html');
    }
    else{
        echo"not succesful";
    }
}
?>