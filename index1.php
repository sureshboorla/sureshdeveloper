<html>
<head>
<title>joinus1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="external/jqueryplugin.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<style>
*{
box-sizing:border-box;
margin:0px;
padding:0px;
}
.a{
width:700px;
height:470px;
border:2px solid gray;
position:relative;
}
<!-- .d{ -->
<!-- width:100%; -->
<!-- height:60px; -->
<!-- background-color:gray; -->
<!-- } -->
.f{
color:red;
padding-top:0px;
padding-left:400px;
width:100%;
height:60px;
background-color:gray;
}
.e{
width:250px;
height:200px;
background-color:white;
background-image:url("img/security-icon.png");
background-repeat:no-repeat;
background-size:100%;
position:absolute;
top:10px;
left:50px;
}
.g{
height:150px;
position:absolute;
bottom:80px;
}
.s{
height:750px;
background-image:url("img/bg_image.jpg");
background-repeat:no-repeat;
}
.v{
height:700px;
}
.c{width:350px;
height:200px;
bottom:10px;
left:10px;
position:absolute;
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
.k{border:2px solid red;}
</style>
</head>
<body>
<div class="container-fluid s">
<div class="container v">
<div class="row a">
<div class="col-sm-12 d">
<h2 class="f"><cite>User Login</cite></h2>
</div>
<div class="col-sm-12 e">
</div>
<div class=" container g">
<form id="myform" action="Home1.html">
<div class="form-group row ">
<label for="r" class="offset-md-1 col-md-1 col-form-label">UserName</label>
<div class="col-md-5">
<input type="text" name="name" class="form-control" id="r" placeholder="username">
</div></div>
<div class="form-group row ">
<label for="l" class="offset-md-1 col-md-1 col-form-label">Passwords</label>
<div class="col-md-5">
<input type="password" name="pass" class="form-control" id="l" placeholder="username">
</div></div>
<div class="form-group row ">
<div class="offset-md-3 col-md-9">
<input type="submit" class="btn btn-primary" value="login">
<a href="Home.html"><input type="button"  class="btn btn-warning" value="I Do not have username or password"></a>
</div></div>
 </form>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="c">
</div>
</div>
</div>
<div class="row">
<footer>
<div class="col-sm-12 j">
<h4><i>made by:Suresh Boorla   @DDU-GKY Projects</i></h4>
</div>
</footer>
</div>
</div>
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
</body>
</html>
































