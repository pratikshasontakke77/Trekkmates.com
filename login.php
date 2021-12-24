<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Untitled Document</title> </head> 
<body> 
<?php $servername="localhost"; $username="root"; $password=""; $dbname="trekk"; $conn=mysqli_connect($servername, $username, $password,$dbname); if(!$conn) {

die("connected failed".mysqli_connect_error()); } $username=$_POST['username']; $password=$_POST['password']; $sql="insert into login values('$username','$password')"; if(mysqli_query($conn, $sql)) {

echo("Your login is successful"); } else {

echo"error in query" .$sql."<br>". mysqli_error($conn); } mysqli_close($conn); ?> <div> <form action="index.html" method="post"><br /> <input type="submit" value="HOME" />

</body> </html>
