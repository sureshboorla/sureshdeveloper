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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

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
.s{
background-image:url("img/bg_image.jpg");
background-repeat:no-repeat;
}
.a{
width:100%;
height:100px;
}
.b{
width:100%;
text-align:center;
}
.c{
width:100%;
height:100px;
}
.d{
height:500px;
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
margin-top:20px;
}
.v{
height:550px;
}
.t{
height:200px;
border:2px solid gray;
overflow:scroll;
background-color:white;
margin-left:30px;
}
.con{
border:2px solid gray;
box-shadow:2px 2px 2px 2px purple;
word-wrap:break-word;
}
.ss{
    font-size:23px;
}
img.icon{
	border-radius:30%;
	 padding:12px;
	background-color:#BBBDAC;
	width:230px;  
	height:230px;
}
.ss>.b a{
	text-decoration:none;
	color:white;
}
.head{
	width:100%;
height:90px;
}
.ws{
color:gray;
background-color:#8CE67A;
border-radius:50px;
}
</style>
</head>
<body class="s">
<?php
include("header.php");
?>

<div class="container">
<div class="row">
<div class="col-md-3 ss" style="background-color:#836AAE"><div class="b" ><a href="whycangive.php">Why Can Give Blood<img src="img/give.jpg" class="img-fluid icon"></a></div></div>
<div class="col-md-3 ss" style="background-color:#77B055"><div class="b" ><a href="check1.php">Find Blood Donor<img src="img/logo1.jpg" class="img-fluid icon"></a></div></div>
<div class="col-md-3 ss" style="background-color:#B055A7"><div class="b" ><a href="donateblood.php">Donate Blood<img src="img/donate.jpg" class="img-fluid icon"></a></div></div>
<div class="col-md-3 ss" style="background-color:#B0B055"><div class="b" >


<div class="container">
<a data-toggle="modal" data-target="#mymodel" style="color:white;">Request for Blood</a>
<div class="modal" id="mymodel">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">login here</h5>
<button type="button" class="close" data-dismiss="modal"> <span> &times; </span></button>
</div>
<div class="modal-body">




<div class="container">
<div class="offset-md-2 col-md-10  ">
<form id="sform">
<caption ><h4 style="color:purple" align="center">Patient Details</h4></caption>
<div class="form-group row ">
<label  class="col-md-2 col-form-label " style="background-color:#999966">Patient Name</label>
<div class="col-md-7">
<input type="text" class="form-control " name="pname">
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#55B0B0">DonarName</label>
<div class="col-md-7">
<input type="text" class="form-control " name="dname">
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#d9f90d4d">HospitalName & address</label>
<div class="col-md-7">
<textarea type="text" class="form-control " name="add"></textarea>
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#CA5959">BloodGroup</label>
<div class="col-md-7">
<select name="blood" class="form-control ">
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
</div></div>
<hr>
<caption><h4 style="color:purple" align="center">Contact Details</h4></caption>
<div class="form-group row">
<label  class="col-md-2 col-form-label " style="background-color:#999966">Patient Name</label>
<div class="col-md-7">
<input type="text" class="form-control " name="pname">
</div></div>
<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#8CE67A">Email</label>
<div class="col-md-7">
<input type="email" class="form-control" name="email">
</div></div>


<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#8CE67A">PhoneNumber</label>
<div class="col-md-7">
<input type="text" class="form-control " name="phone">
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#d9f90d4d">Other Messege</label>
<div class="col-md-7">
<textarea type="text" class="form-control " name="add"></textarea>
</div></div>

<input type="submit" class="btn btn-primary" value="Submit">
<input type="reset" class="btn btn-primary" value="Reset">
</div>
</form>


</div>
</div>





</div>
<div class="modal-footer">
<button type="button" class="close" data-dismiss="modal"> <span>close</span></button>
</div>
</div>
</div>
</div>
</div>


<img src="img/logo2.jpeg" class="img-fluid icon"></a></div></div>





</div>
</div>


<div class="container">
<div class="row">
<div class="col-md-12">
<div id="carouselwidthindicators" class="carousel slide" data-ride="carousel">
<ol  class="carousel-indicators">
<li data-target="#carouselwidthindicators" data-slide-to="0"></li>
<li data-target="#carouselwidthindicators" data-slide-to="1"></li>
<li data-target="#carouselwidthindicators" data-slide-to="2" class="active"></li>
<li data-target="#carouselwidthindicators" data-slide-to="3"></li>
<li data-target="#carouselwidthindicators" data-slide-to="4"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item r">
<img class="w-100 d" src="img/slide_1.jpg" alt="1">
</div>

<div class="carousel-item r">
<img class="w-100 d" src="img/slide_2.jpg" alt="2">
</div> 

<div class="carousel-item active r">
<img class="w-100 d" src="img/slide_4.jpg" alt="3">
</div>

<div class="carousel-item r">
<img class="w-100 d" src="img/slide_5.jpg" alt="4">
</div>

<div class="carousel-item r">
<img class="w-100 d" src="img/slide_6.jpg" alt="5">
</div>
</div>
<a class="carousel-control-prev" href="#carouselwidthindicators" role="button" data-slide="prev">
<span class="carousel-control-prev-Icon"></span></a>
<a class="carousel-control-next" href="#carouselwidthindicators" role="button" data-slide="next">
<span class="carousel-control-next-Icon"></span></a>
</div></div></div>
</div>

 <!--<caption style="background-color:#836AAE" ><h2 style="color:purple" align="center">Blood Donation copms</h2></caption>-->

<div class="container">
<div class="row">
<div class="col-sm-8 t"><marquee behavior="scroll" direction="up" onmouseover="stop();" onmouseout="start();"><a href="#" class="primary">Alerts for blood requirement from registered donors.<span class="badge badge-danger">NEW</span></a><br><br>
<a href="#" class="primary">Alerts for blood requirement from registered donors.<span class="badge badge-danger">NEW</span></a><br><br>
<a href="#" class="primary">Support fast searching to find match blood bags for the right person.<span class="badge badge-danger">NEW</span></a><br><br>
<a href="#" class="primary">Support fast searching to find match blood bags for the right person.<span class="badge badge-danger">NEW</span></a><br><br>
<a href="#" class="primary">Ability to manage the information of its blood donor.<span class="badge badge-danger">NEW</span></a></marquee>
</div>
</div></div>




<div class="container">
<div class="row">
<div class="col-md-12 con">
<h4 style="color:purple">Contact Us:</h4>
<span style="color:purple"><b>Office Address:</b></span>Blood Bank,,DDU-GKY Building,lingam pally,hyderabadOffice Time:24X7.<br>
<span style="color:purple"><b>Contact No:</b></span>8978833103,9912375036   <span style="color:purple"><b>Gmail:</b></span> sureshboorla@gmail.com
</div>
</div>
</div>

<?php
include("footer.php");
?>
<script>
$(document).ready(function(){
$(".ss>.b").mouseover(function(){
$(this).addClass("ws");
});
$(".ss>.b").mouseout(function(){
$(this).removeClass("ws");
});
});
</script>
</body>
</html>














