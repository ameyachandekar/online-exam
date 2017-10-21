<?php
$servername="localhost";
$username="root";
$password="";
$dbname="regdb";

$name=$_POST["nm"];
$add=$_POST["address"];
$email=$_POST["email"];
$mobile=$_POST["mobno"];
$gender=$_POST["gen"];
$edu=$_POST["edu"];
$photo=$_POST["photo"];
$secq=$_POST["secq"];
$ans=$_POST["ans"];
$unm=$_POST["unm"];
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql ="insert into registertb values('$name','$add','$email','$mobile','$gender','$edu','$photo','$secq','$ans','$unm','$pass','$cpass')";
if (mysqli_query($conn,$sql))
{
echo "new record added succesfully";

}
else{

 echo"error:".$sql."<br>".mysqli_error($conn);

}

?>