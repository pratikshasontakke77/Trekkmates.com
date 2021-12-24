<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional/EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" > <title>Untitled Document</title> </head>

<body> die("connected failed"

<?php $servername="localhost"; $username="root"; $password=""; $dbname="trekk"; $conn=mysqli_connect($servername, $username, $password, Sabname); if(! $conn) {

. mysqli_connect_error()); }

$name=$_POST['name']; $cardno=$_POST['number']; $exdate=$_POST['expiration- month-and-year']; . Scvv=$_POST['security-code']; $sql="insert into payment values('$name', $cardno', 'Sexdate', 'Scvv')"; if(mysqli_query($conn,$sql)=="TRUE") {

echo("Payment is successful!!!"); echo("<br><br>");


echo("Thank you for choosing Trekkmates.com"); } else {

echo"error in query" $sql."<br>" . mysqli_error($conn); } mysqli_close($conn);

</body> </html>

