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
.w{
color;white;
background-color:#8CE67A;
border-radius:50px;
badge badge-info;
}
</style>
</head>
<body class="s">
<div class="container-fluid">
<div class="row h">
<div class="col-md-2"><img src="img/logo1.jpg" class="img-fluid a"></div>
<div class="col-md-8"><h1><img src="img/header1.png" class="img-fluid head"></h1></div>
<div class="col-md-2 "><img src="img/logo2.jpeg" class="img-fluid c"></div>
</div >
</div >
<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark e">
<a href=""><img src="img/logo3.png" width="300" style="height:50px" class="img-fluid"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content"><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="nav-content">
<ul class="navbar-nav mr-auto f">
<li class="nav-item">
<a href="Home1.php" class="nav-link " style="color:#28a7bb">Home</a>
</li>
<li class="nav-item">
<a href="joinus1.php" class="nav-link " style="color:#28a7bb">Add Donor</a>
</li>

<li class="nav-item">
<a href="ourmembers1.php" class="nav-link " style="color:#28a7bb">Our Members</a>
</li>
<li class="nav-item">
<a href="logout.php"  class="nav-link" style="color:#28a7bb">Logout</a>
</li>
</ul>
</div>
</nav>

<script type="text/javascript">
$(document).ready(function(){
$(".nav-link").mouseover(function(){
$(this).addClass("w");
});
$(".nav-link").mouseout(function(){
$(this).removeClass("w");
});
});
</script>
</body>
</html>














