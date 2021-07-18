	
<!-- saved from url=(0046)file:///C:/Users/admin/Desktop/BMSP/index.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>respansive</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  
  
  <script type="text/javascript" src="./sures_files/jquery.js.download"></script>
<script type="text/javascript" src="./sures_files/jqueryplugin.js.download"></script>
<script type="text/javascript" src="./sures_files/bootstrap.min.js.download"></script>
<link rel="stylesheet" href="./sures_files/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="./sures_files/popper.min.js.download"></script>

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
margin-top:20px;
border:2px solid gray;
height:450px;
box-shadow:5px 5px 5px 5px gray;
}
.b{
background-color:gray;
float:right;
}
.c{
background-color:gray;
color:red;
}
.d{
width:200px;
height:140px;
<!-- background-color:white; -->
}
.e{
}
.f{
width:90%;
}
.s{
height:750px;
background-image:url("img/bg_image.jpg");
background-repeat:no-repeat;
}
.g{width:350px;
height:200px;
margin-top:10px;
background-image:url("img/left-index-logo.jpg");
background-repeat:no-repeat;
background-size:100%;
}
.j{
background-color:#4c1a2a;
text-align:center;
color:white;
width:100%;
}
.error{
color:red;
}
</style>
</head>
<body class="">
<div class="container-fluid s">
<div class="row">
<div class="offset-md-2">
</div>
<div class="col-md-5 a">
<div class="row"><div class="col-sm-12 c"><h2><cite class="b">User Login</cite></h2></div></div>
<div class="row"><div class="col-sm-4 e"><img class="img-fluid d" src="./sures_files/security-icon.png"></div></div>
<form id="myform" action="Home1.php" class="f" >
<div class="row">
<div class="form-group row ">
<label for="r" class="offset-md-1 col-md-2 col-form-label">UserName</label>

<div class="col-md-8">
<input type="text" name="name" class="form-control mr-2" id="r" autocomplete="off" placeholder="username">
</div></div></div>
<div class="row">
<div class="form-group row ">
<label for="l" class="offset-md-1 col-md-2 col-form-label">Password</label>
<div class="col-md-8">
<input type="password" name="pass" class="form-control" autocomplete="off" id="l" placeholder="username">
</div></div>
</div>
<div class="row">
<div class="form-group row">
<div class="offset-md-2 col-md-8">
<input type="submit" class="btn btn-primary" value="login">
<a href="Home.php"><input type="button" class="btn btn-warning" value="I Do not have username or password"></a>
</div>
</div>
</div>

 </form>
</div></div>
<div class="g">
</div>
</div>

<footer>
<div class="col-md-12">
<h4 class="j">made by:suresh Boorla   @DDU-GKY Projects</h4>
</div>
</footer>






<script type="text/javascript">
$(document).ready(function(){
$("#myform").validate({
rules:{
name:{
required:true,
minlength:3
},
pass:{
required:true,
minlength:3,
maxlength:8,
equalTo:("#r"),
},
},
highlight:function(ss){
$(ss).addClass("k");
},
unhighlight:function(ss){
$(ss).removeClass("k");
},
messages:{
name:{
required:"plz enter the name.",
minlength:"plz enter above 3 chars"
},
pass:{
required:"plz enter the password.",
minlength:"plz enter above 3 chars",
maxlength:"plz enter below 8 chars",
equalTo:"plz enter the currect password."
},
}
});
});
</script>








</body></html>