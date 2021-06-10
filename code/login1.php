<?php
date_default_timezone_set("Asia/Kolkata");
require "trial.php";
$regno1=$_POST['regno'];
//$regno1="kl45e4952";
$front="\'";
$backs="\'";
$backs=trim ($backs);
//$regno1="kl49s1159";


$regno1=trim($regno1);
$regno1=preg_replace ("/\s+/","", $regno1);
$regno1=strtoupper($regno1);
$date=date("Y-m-d");
$date=preg_replace ("/[^a-zA-Z0-9]/","", $date);
$date=trim($date);
$name="";
$branch="";
$regno="";
// echo $date;               
$front1='\"';
$front2="\"";
$time=date("H:i:s"); 
$time=(string)$time;

$time1=$front2.$time.$front2;
$date=$front2. $date. $front2;
$regno1=$front2. $regno1. $front2;
$view="";
$path="";
$empty=" ";
$empty=$front2. $empty. $front2;
echo $regno1;
$registered=mysqli_query($conn,"SELECT * FROM details WHERE regno=$regno1");
if (mysqli_num_rows($registered)>0) {
	$row = mysqli_fetch_assoc($registered);
	$name=$row["name"];
	$branch=$row["branch"];
	$view="VIEW DETAILS";
	$path=$row["path"];
	
	
}
$name=$front2. $name. $front2;
$branch=$front2. $branch. $front2;
$view=$front2. $view. $front2;
$path=$front2. $path. $front2;
	$login=mysqli_query($conn,"SELECT * FROM register WHERE regno=$regno1 AND datein=$date");
	if (mysqli_num_rows($login)==0) {
		//do login
		
		
		
		mysqli_query($conn,"insert into register(name,branch,regno,timein,datein,path,view)values($name,$branch,$regno1,$time1, $date,$path,$view)");
		/*$stmt=$conn->prepare("INSERT INTO register (regno,timein,datein) VALUES (?,?,?)");
			 
		$stmt->bind_param("sss",$regno1,$time,$date);
        $stmt->execute();//attempt to execute*/
        echo "logged in";

	}
	else{
		//do logout
		$logout=mysqli_query($conn,"UPDATE register SET timeout=$time1,STATUS=$empty  WHERE regno=$regno1 AND datein=$date");
		echo "SUCCESSFULLY LOGGED OUT";

	}



?>