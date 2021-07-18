
<?php
session_start();
if(isset($_SESSION['username']))
{
?>	
	
	

<html>
<head>
<title>respansive</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  
  
  <script type="text/javascript" src="external/jquery.js"></script>
<script type="text/javascript" src="external/jqueryplugin.js"></script>
<script type="text/javascript" src="external/bootstrap.min.js"></script>
<link rel="stylesheet" href="external/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script type="text/javascript" src="external/jqueryplugin.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->


<style>
*{
margin:0px;
padding:0px;
box-sizing:border-box;
}
<!-- .z{ -->
<!-- background-color:#d9f90d4d; -->
<!-- } -->
.a{
width:100%;
height:100px;
}
.b{
width:100%;
padding-top:20px;
color:red;
text-align:center;
}
.c{
width:100%;
height:100px;
}
.s{
background-image:url("img/bg_image.jpg");
background-repeat:no-repeat;
}

.d{
height:400px;
}
.e{
position:sticky;
top:0px;
}
.j{
background-color:#4c1a2a;
text-align:center;
color:white;
position:sticky;
bottom:0px;
}
.v{
height:550px;
}
.t{
height:200px;
border:2px solid red;
overflow:scroll;
background-color:white;
margin-left:30px;
}
.head{
	width:100%;
height:100px;
}
</style>
</head>
<body class="s">
<?php
include("header1.php");
?>
<div class="container i"><br>
<form>
<div class="row">
<span class=" col-sm-3"><b>Select Blood Group:</b></span><select name="degree" class="form-control col-sm-3 mr-2  p">
<option disabled selected>Select Group...</option>
<optgroup label="Blood group">
<option value="">A+</option>
<option value="">B+</option>
<option value="">AB+</option>
<option value="">A-</option>
<option value="">B-</option>
<option value="">O-</option>
<option value="">O+</option>
<option value="">AB-</option>
</optgroup>
</select>
<input type="button" class="btn btn-success col-sm-2" value="Check Availability">
</div><br>
<div class="row">
<span class=" col-sm-3"><b>Search for donor by city:</b></span><select name="blood" class="form-control col-sm-3 mr-2  p">
<option disabled selected>Select city...</option>
<optgroup label="city...">
<option value="">hyderabad</option>
<option value="">karimnagar</option>
<option value="">hanmakonda</option>
</optgroup>
</select>
<input type="button" class="btn btn-success col-sm-2" value="Check Availability">
</div><br>
</form>

<div class="row">
<div class="col-md-12">
<div id="carouselwidthindicators" class="carousel slide w-100" data-ride="carousel" height="500">
<ol  class="carousel-indicators">
<li data-target="#carouselwidthindicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselwidthindicators" data-slide-to="1" ></li>
<li data-target="#carouselwidthindicators" data-slide-to="2" ></li>
<li data-target="#carouselwidthindicators" data-slide-to="3"></li>
<li data-target="#carouselwidthindicators" data-slide-to="4"></li>
</ol>
<div class="carousel-inner d">
<div class="carousel-item active r">

<img class="w-100 d" src="img/slide_1.jpg" alt="1">
</div>
<div class="carousel-item r">

<img class="w-100 d " src="img/slide_2.jpg" alt="2">
</div> 
<div class="carousel-item  r">
<img class="w-100 d" src="img/slide_4.jpg" alt="3">
</div>
<div class="carousel-item r">

<img class="w-100 d" src="img/slide_5.jpg" alt="4">
</div>
<div class="carousel-item r">
<img class="w-100 d" src="img/slide_6.jpg" alt="5">
</div>
<a class="carousel-control-prev" href="#carouselwidthindicators" role="button" data-slide="prev">
<span class="carousel-control-prev-Icon"></span></a>
<a class="carousel-control-next" href="#carouselwidthindicators" role="button" data-slide="next">
<span class="carousel-control-next-Icon"></span></a>
</div></div></div></div></div>
<?php
include("footer.php");
?>

</body>
</html>



<?php

}
else
{
	
	?>
	<script type="text/javascript"> alert("please login");</script>
	<?php
}

?>








