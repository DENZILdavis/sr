<?php

require "trial.php";
$date1=$_POST['date'];


	//	$date = preg_replace("/[^a-zA-Z0-9]/", "", $date);
		mysqli_query ($conn,"INSERT INTO register (regno,time,date)VALUES ('KL34P1234',09:34:23, $date1)");

		$result=mysqli_query($conn,"SELECT * FROM register WHERE datein=$date1");	
		if (mysqli_num_rows($result)>0) {
			$count=0;

			// output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
				
				echo $row["name"],";",$row["branch"],";",$row["regno"],";",$row["timein"],";",$row["timeout"],";",$row["STATUS"],"_";
			}
		}



?>