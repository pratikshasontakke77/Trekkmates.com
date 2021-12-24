<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtinl1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <title>Untitled Document</title> </head> <body> <?php $servername="localhost"; $username="root"; $password=""; $dbname="trekk"; {

$conn=mysqli_connect($servername, $username, $password,$dbname); if(!$conn)

die("connected failed". mysqli_connect_error());

$firstname=$_POST['fname']; $lastname=$_POST['lname']; $mobileno=$_POST['MNum']; $email=$_POST['email']; $password=$_POST['pass']; $password=$_POST['pass']; $gender=$_POST['gender"); $sql="insert into registration values('$firstname','$lastname','$mobileno' , '$email','$password','$password2','$ge

nder')"; if(mysqli_query($conn,$sql)=="TRUE") {

echo("You have registered successfully. You will get the updates on your registered mobile no."); <br>");

}

echo("<br>

echo("Thank You!!!"); } else


echo"Please enter valid entries" $sql."<br>". mysqli_error($conn); 
