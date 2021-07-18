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
.b{
width:100%;
text-align:center;
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
<div class="bg-warning">
<marquee behavior="scroll" direction="left" onmouseover="stop();" onmouseout="start();"><span class="text-primary"><span class="badge badge-danger"><i>NEW</i></span>blood donation camp conducted on jan 25th 2021 if anyone intrested to donate blood call this number..8978833103 .</span></marquee></div>

<div class="container">
<div class="row">
<div class="col-md-3 ss" style="background-color:#836AAE"><div class="b" ><a href="whycangive.php">Why Can Give Blood<img src="img/give.jpg" class="img-fluid icon"></a></div></div>
<div class="col-md-3 ss" style="background-color:#77B055"><div class="b" ><a href="check1.php">Find Blood Donor<img src="img/logo1.jpg" class="img-fluid icon"></a></div></div>
<div class="col-md-3 ss" style="background-color:#B055A7"><div class="b" ><a href="donateblood.php">Donate Blood<img src="img/donate.jpg" class="img-fluid icon"></a></div></div>
<div class="col-md-3 ss" style="background-color:#B0B055"><div class="b" ><a href="request.php">Request for Blood<img src="img/logo2.jpeg" class="img-fluid icon"></a></div></div>
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
<div class="col-sm-8 t"><marquee behavior="scroll" direction="up" onmouseover="stop();" onmouseout="start();"><a href="#" class="primary">Alerts for blood requirement from registered donors.<span class="badge badge-danger"><i>NEW</i></span></a><br><br>
<a href="#" class="primary">Alerts for blood requirement from registered donors.<span class="badge badge-danger"><i>NEW</i></span></a><br><br>
<a href="#" class="primary">Support fast searching to find match blood bags for the right person.<span class="badge badge-danger"><i>NEW</i></span></a><br><br>
<a href="#" class="primary">Support fast searching to find match blood bags for the right person.<span class="badge badge-danger"><i>NEW</i></span></a><br><br>
<a href="#" class="primary">Ability to manage the information of its blood donor.<span class="badge badge-danger"><i>NEW</i></span></a></marquee>
</div>
</div></div>


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














