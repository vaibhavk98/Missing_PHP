<?php
$servername="localhost";
$mysql_user="QatVNPcN7D";
$mysql_pass="dqoCj5bdHU";
$dbname="QatVNPcN7D";
$conn=mysqli_connect($servername, $mysql_user, $mysql_pass, $dbname);
if($conn){
echo("connection success");
}else{
echo("connection not success");

}
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpass=$_POST['confirmpass'];
$query="INSERT INTO `registertb`(`name`, `phone`, `email`, `password`, `confirmpass`) VALUES ('$name', '$phone', '$email', '$password', '$confirmpass')";
if(mysqli_query($conn, $query)){
echo("registered successfully");
}
else{
echo("error in registration");
}
}else{
echo("error in request method");
}
?>
