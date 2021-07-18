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

.a{
width:100px;
height:100px;
}
.b{
width:100%;
color:white;
text-align:center;
}
.c{
width:100px;
height:100px;
}
.e{
position:sticky;
top:0px;
}
.head{
	margin-top:7px;
	width:100%;
height:90px;
}
.w{
color;white;
background-color:orange;
border-radius:50px;
badge badge-info;
}

</style>
</head>
<body class="">
<div class="container-fluid">
<div class="row h">
<div class="offset-md-1 col-md-1"><img src="img/heat.png" class="img-fluid a"></div>
<div class="col-md-8"><h1><img src="img/header1.png" class="img-fluid head"></h1></div>
<div class="col-md-2"><img src="img/logo2.jpeg" class="img-fluid c"></div>
</div >
</div >
<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark e">
<a href=""><img src="img/logo3.png" width="300" style="height:50px" class="img-fluid"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content"><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="nav-content">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a href="Home.php" class="nav-link" style="color:#28a7bb"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a>
</li>
<li class="nav-item">
<a href="ourmembers.php" class="nav-link " style="color:#28a7bb"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Our Members</a>
</li>

<li class="nav-item">
<a href="joinus.php" class="nav-link " style="color:#28a7bb"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;Join Us</a>
</li>

<li class="nav-item">
<a href="check.php" class="nav-link" style="color:#28a7bb"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;Check availability</a>
</li>

<li class="nav-item">
<a href="aboutus.php" class="nav-link" style="color:#28a7bb"><i class="fa fa-id-badge" aria-hidden="true"></i>&nbsp;About Us</a>
</li>
<li class="nav-item">
<a href="index.php" class="nav-link" style="color:#28a7bb"><i class="fa fa-share" aria-hidden="true"></i>&nbsp;Employee Login</a>
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














