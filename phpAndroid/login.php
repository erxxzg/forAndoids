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
$query="select * from Login where UserName= '".$user_name."' and Password= '".$password."'";  // $usename=$_GET['username'];
$result=  mysqli_query($connect, $query);
if(! $result)
{ die("Error in query");}
 //get data from database
$output=array();
while($row=  mysqli_fetch_assoc($result))
{
 $output[]=$row;  //$row['id']
}

if($output==true){
print(json_encode($output));
}
else
{
print("{'msg':'connot login'}");

}


// this will print the output in json
// 4 clear
mysqli_free_result($result);
//5- close connection
mysqli_close($connect);
?>