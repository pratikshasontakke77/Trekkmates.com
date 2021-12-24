<! "DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <title>Untitled Document</title> </head>

<body> <?php $servername="localhost'; $username="root"; $password=""; $dbname="trekk"; $conn=mysqli_connect($servername, $username, $password,$dbname); if(!$conn) {

die("connected failed". mysqli_connect_error()); } $name=$_POST['FullName']; $email=$_POST['Email-ID']; Sperson=$_POST['No of person']; $place=$_POST['category']; $sql="insert into booking values('$name','$email', '$person','$place')"; if(mysqli_query($conn,$sql)=="TRUE") {

}


echo("Your trekk is booked successfully"); echo("<br><br>"); echo("Please make payment in the

}

else {

payment section");

echo"error in query" $sql. "<br>". mysqli_error($conn);

} mysqli_close($conn); ?>

</body> </html>
