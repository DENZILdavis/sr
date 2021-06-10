
<?php
date_default_timezone_set ("Asia/Kolkata");
$date=date ("Y-m-d");
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>span.result{color:green;}
   #grad1 {
   padding: 35px 100px;
  background-image: linear-gradient(white, teal);
  height:100vh;
}
.datepicker td, .datepicker th {
    width: 1.5em;
    height: 1.5em;
}
.display-4{
    font-size:30px;

    
   
          text-shadow: 2px 2px 5px ;
  background: -webkit-linear-gradient(#eee, #333);
 -webkit-background-clip: text;

}
.display-3{
    font-size:40px;
}
</style>



  </script>
	</head>
	<body id="grad1"><div class="container"><center>
	    <div class="form-group">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
					<input class="datepicker" type="date" value="<?php echo $date;?>"  name="date">
					<input class="btn btn-warning" type="submit" name ="submit">
					</form></center>
					</div>

<?php
if (isset ($_POST ["submit"])){
require "trial.php";
$datesel=(string)$_POST["date"];
echo "<h3 class='display-4' >Date Selected: ",$datesel, "</h3>";

$datesel=(string)$_POST["date"];
$datesel = preg_replace("/[^a-zA-Z0-9]/", "", $datesel);


	//	$date = preg_replace("/[^a-zA-Z0-9]/", "", $date);
		//mysqli_query ($conn,"INSERT INTO register (regno,time,date)VALUES ('KL34P1234',09:34:23, $date1)");

		$result=mysqli_query($conn,"SELECT * FROM register WHERE datein=$datesel");	
		if (mysqli_num_rows($result)>0) {
			$count=0;

			// output data of each row
		    
		    	?>
		    	<div class="container">
		    	<table class=" table table-striped"><thead><tr><th>#</th><th>name</th><th> branch </th><th>Reg no</th><th>timein</th><th>timeout</th><th>STATUS</th><th>details</th></tr></thead><tbody>
		<?php
	
		$count=0;

			// output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		$count=$count+1;
		echo "<tr><td>" . $count. "</td><td>" . $row["name"]. "</td><td> " . $row["branch"]. "</td><td>".$row["regno"]."</td><td> ". $row["timein"]."</td><td>".$row["timeout"] . "</td><td>";
		?>
		<span class="result">
		<?php
		echo $row["STATUS"];?>
		</span></td><td><a href="/display.php?value=<?php echo $row["path"];?>">
		<?php 
		echo $row['view'];
		?>
		</a></td></tr>
		<?php
		    

		}
		echo "</tbody></table>";
		} else {
		    echo "<mark><h2 class='display-3'>NO STUDENT HAS ENTERED!!</h2></mark>";}
}
		
		?>
		<center>
		<a href="index.php"> <input type="button" class="btn btn-danger" value="LOGOUT"></a></center>
		</div></div>
	</body>
</html>