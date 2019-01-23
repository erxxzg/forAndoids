<?php

$host="127.0.0.1";
$user="root";
$DBpassword="1234";
$database="demo";
$connect=mysqli_connect($host,$user,$DBpassword,$database);

if(mysqli_connect_errno()){
die("error in connection". mysqli_connect_error);	
	return;
}

$user_name=$_GET['username'];
$password=$_GET['password'];

$query="insert into login(user_name,password)values('". $user_name ."','". $password ."')";

$result=mysqli_query($connect,$query);

if(!$result){
$info="{'msg':'connot inserted'}";
printf("error: %s\n", mysqli_error($connect));	
}

else{

$info="{'msg':'data is inserted'}";	
}


//$info="{'user_name':'". $user_name . "','password':'" . $password .  "'}";

print(json_encode($info));

?>