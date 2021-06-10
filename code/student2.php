<?php
$flag=0;
  
  if(isset($_POST["submit"])){
      $front2="\"";
      $reg=trim($_POST["reg"]);
      $reg=preg_replace ("/\s+/","", $reg);
      $reg=strtoupper($reg);
      $reg=$front2. $reg. $front2;
      $name=trim($_POST['name']);
      $branch=trim($_POST["branch"]);
      $branch=strtoupper($branch);
      $name=strtoupper($name);
      $name=$front2.$name.$front2;
      $branch=$front2. $branch. $front2;
      require "trial.php";
      
      		$result=mysqli_query($conn,"SELECT * FROM details WHERE regno=$reg");
      		if (mysqli_num_rows($result)>0) {
      		    echo "<span class='error'>Already registered</span>";
      		    $flag=1;
      		}
      		else {
      		    $result=mysqli_query($conn,"SELECT * FROM details WHERE name=$name AND branch=$branch");
      		   // echo (mysqli_num_rows($result));
      		    if(mysqli_num_rows($result)>0){
      		   
      		        echo "<span class ='error'>Already registered with this name</span>";
      		        $flag=1;
      		    }
      		    
      		    else{
      		   
if ( isset( $_FILES['pdfFile'] ) ) {
    
	if ($_FILES['pdfFile']['type'] == "application/pdf") {
		$source_file = $_FILES['pdfFile']['tmp_name'];
		$dest_file = "upload/".$_FILES['pdfFile']['name'];


		if (file_exists($dest_file)) {
		    $flag=1;
			print "The file name already exists!!";
		}
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error!!");
			
			if($_FILES['pdfFile']['error'] == 0) {
				
				
				
			
				
			}
		}
	}
	else {
		if ( $_FILES['pdfFile']['type'] != "application/pdf") {
			print "<span class='error'>Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
			print "NOT A PDF FILE !!"."<br/>";
			print "Error Code : ".$_FILES['pdfFile']['error']."<br/></span>";
			$flag=1;
		}
	}


       	    

require "trial.php";

$name="";
$branch=trim($_POST["branch"]);
$reg=trim($_POST["reg"]);


$dest_file = "upload/".$_FILES['pdfFile']['name'];

$name=trim($_POST['name']);
$branch=trim($_POST["branch"]);
$reg=trim($_POST["reg"]);
$view="VIEW DETAILS";
$reg=trim($reg);
$reg=preg_replace ("/\s+/","", $reg);
$branch=strtoupper($branch);
$name=strtoupper($name);
$reg=strtoupper($reg);


             

$front2="\"";
 


$name=$front2.$name.$front2;
$branch=$front2. $branch. $front2;
$reg=$front2. $reg. $front2;

$view=$front2. $view. $front2;
$dest_file=$front2. $dest_file. $front2;

if(!$flag){
if(	mysqli_query($conn,"insert into details(name,branch,regno,path)values($name,$branch,$reg, $dest_file)")&&$flag==0){
    header("location:success.html");
}
}
else{
    echo "<br><span class='error'>Error in Registering<br>Try Again</span>";
}
	
       

	

}
else{
    echo "<span class='error'>ERROR IN PDF FILE</span>";
}
}

}
}
	?>


<html>
    <head>
<meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="StudentStyle.css">
  <script>
      var i = 0;
var txt = 'Enter your details'; /* The text */
var speed = 100; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
  </script>


        </head>
    <body onload=typeWriter() >
        <div class="container-fluid" id="grad1">
       	<form name="frm" enctype="multipart/form-data" 	action="<?php print $_SERVER['PHP_SELF']?>" method="POST">
       	    <h1 class="display-4" id="demo"></h1>
       	    
       	            <input id="a" class="form-control" type="text" name="name" placeholder="Enter Name" required><br><br>
       	            
       	            <input id="b" class="form-control" type="text" name="reg" placeholder="Enter vehicle number" required><br><br>
       	           
       	            <input id="c" class="form-control" type="text" name="branch" placeholder="Enter Branch" required><br><br>
       	            <div id="d" class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="pdfFile" required>
      <label class="custom-file-label" for="customFile">Upload pdf file </label>
    </div>
       	            <!--<input class="btn btn-danger" type="file" name="pdfFile" value="">--><br><br>
       	            
       	            <input id="e" class="btn btn-success" type="submit" name="submit" value="Register">
       	   
       	    </form>
       	   </div>
       	    </body>
       	    </html>
       	    
