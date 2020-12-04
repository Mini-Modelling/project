<?php
$name = $_POST['name'];
$age = $_POST['age'];
$Phone = $_POST['Phone'];
$sym = $_POST['sym'];
$Email = $_POST['Email'];
$Date = $_POST['Date'];
$time = $_POST['time'];
$Address = $_POST['Address'];
$test = $_POST['test'];


$con = new mysqli('localhost', 'root', '', 'mini');
if($con->connect_error)
{
echo("Error");
}

$stmt = $con->prepare("insert into test(name,age,Phone,sym,Email,Date,time,Address,test) values (?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("siisssiss",$name,$age,$Phone,$sym,$Email,$Date,$time,$Address,$test);if($stmt->execute())
{
echo("success");
}
else
{
echo("failed");
}