<! " DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml">

<head> > </head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" <title>Untitled Document</title>

<body> $password=""; Tee online! $dbname="trekk"; $conn=mysqli_connect($servername $username, $password,$dbname); if(!$conn)

<?php on $servername="localhost"; ad $username="root";

die("connected failed". mysqli_connect_error());

$name=$_POST['name']; $phone=$_POST['phone']; $email=$_POST['email']; $sql="insert into contactus values('$name','$phone', '$email')"; if(mysqli_query($conn,$sql)=="TRUE") { showing interest in Trekkmates.com");

echo("Thanks for

}

else

echo"error in query".$sql. "<br>". mysqli_error($conn); } mysqli_close($conn); ?>

</body> </html>
