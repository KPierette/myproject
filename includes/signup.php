<?php 
session_start();
include('config.php');
error_reporting(0);

if(isset($_POST['signup']))
{
//code for captach verification

          
//Code for student ID
// $count_my_page = ("studentid.txt");
// $hits = file($count_my_page);
// $hits[0] ++;
// $fp = fopen($count_my_page , "w");
// fputs($fp , "$hits[0]");
// fclose($fp); 
// $StudentId= $hits[0]; 

$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$DateOfBirth=$_POST['DateOfBirth']; 
$PlaceOfBirth=$_POST['PlaceOfBirth']; 
$Sex=$_POST['Sex']; 
$email=$_POST['Email']; 
$PhoneNumber=$_POST['PhoneNumber']; 
$UserName=$_POST['UserName']; 
$Password=$_POST['Password']; 

$sql="INSERT INTO  member(firstName,lastName,dateOfBirth,placeOfBirth,sex,phoneNumber,email,userName,password) VALUES(:FirstName,:LastName,:DateOfBirth,:PlaceOfBirth,:Sex,:PhoneNumber,:Email,:UserName,Password)";
$query = $dbh->prepare($sql);
$query->bindParam(':FirstName',$FirstName,PDO::PARAM_STR);
$query->bindParam(':LastName',$LastName,PDO::PARAM_STR);
$query->bindParam(':DateOfBirth',$DateOfBirth,PDO::PARAM_STR);
$query->bindParam(':PlaceOfBirth',$PlaceOfBirth,PDO::PARAM_STR);
$query->bindParam(':Sex',$Sex,PDO::PARAM_STR);
$query->bindParam(':PhoneNumber',$PhoneNumber,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':UserName',$UserName,PDO::PARAM_STR);
$query->bindParam(':Password',$Password,PDO::PARAM_STR);
$query->execute();

// $lastInsertId = $dbh->lastInsertId();
// if($lastInsertId)
// {
// echo '<script>alert("Your Registration successfull and your student id is  "+"'.$UserName.'")</script>';
// }
// else 
// {
// echo "<script>alert('Something went wrong. Please try again');</script>";
// }

}
else{
  echo "this fucked up";
}
?>