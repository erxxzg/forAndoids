<?php
 // 1- connect to db
$host="127.0.0.1";
$user="root";
$password="1234";
$database="sysAdmins";
$connect=  mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno())
{ die("cannot connect to database field:". mysqli_connect_error());   }
 // define quesry 
 
$user_name=$_GET['UserName'];
$password=$_GET['Password'];
$query="insert into login(UserName,Password)values('". $user_name ."','". $password ."')";
$result=  mysqli_query($connect, $query);
if(! $result)
{ 
$output="{'msg':'fail'}";
}
else{
$output="{'msg':'user is added'}";

}

 
print($output);// this will print the output in json
// 4 clear
//mysqli_free_result($result);
//5- close connection
mysqli_close($connect);
?>