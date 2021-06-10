<?php

	//setting default time
	date_default_timezone_set("Asia/Kolkata");


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=trim ($_POST ["username"]);
    //echo $username;
    
//	require "trial.php";
	if(filter_var($username,FILTER_VALIDATE_INT)){
//if (is_int ($username)){
		//student part
		header("Location: student2.php");
		exit;
	}
	else{
	    
		header("location: admin1.php");
		exit;
	}
}
?>




<!DOCTYPE html>
<html>
<head>	<meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Atomic Age' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Almendra' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




  <script>
      var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
  </script>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="IndexStyle.css">
    


</head>
<body  id="grad2"> 
    
    <div class="container-fluid">

  
 
   

   
<center>

 <span style="font-family: 'Atomic Age'; color:#262f80 ; font-size:4vw;" class="alrazy-title " data-splitting>Smart Register</span>     
     

<script src="https://unpkg.com/splitting@1.0.0/dist/splitting.js"></script>
<script>
    Splitting();
</script>

    
  </symbol>
  
  <g class="g-ants">
    <use xlink:href="#s-text"
      class="webcoderskull-1"></use>     
    <use xlink:href="#s-text"
      class="webcoderskull-1"></use>     
    <use xlink:href="#s-text"
      class="webcoderskull-1"></use>     
    <use xlink:href="#s-text"
      class="webcoderskull-1"></use>     
    <use xlink:href="#s-text"
      class="webcoderskull-1"></use>     
  </g>
  
  
</svg><br><br>
   <span id="hoi"><br>
    <h2 id="shr">Sahrdaya college of engineering</h2>
	<form id="grad1" name="frm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"><br>
	
	<span class="input-group-addon" id="a"><i class="material-icons">person</i></span>
	
	<input class="form-control" id="b" type="text" name="username" placeholder="username"  required ><br>
	
	<span class="input-group-addon" id="c"><i class="material-icons">password</i></span>
	<input class="form-control" id="d" type="password" name="password" placeholder="password"  required ><br><br><br><br>
	<input type="submit" name="subin" value="login" class="btn btn-success" id="e"><br>
</form></span>
    <h3>
  <a style="text-decoration:none;"href="" class="typewrite" data-period="2000" data-type='[ "sahrdaya vehicle registration website.", "students can upload the scanned copy of documents.", "created by...", "Ashwin","Dibin","Denzil" ]'>
    <span class="wrap"></span>
  </a>
</h3>
</center>
</div></div>
	</body>
	</html>