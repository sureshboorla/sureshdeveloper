
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>respansive</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  
  
  <script type="text/javascript" src="./suresh_files/jquery.js.download"></script>
<script type="text/javascript" src="./suresh_files/jqueryplugin.js.download"></script>
<script type="text/javascript" src="./suresh_files/bootstrap.min.js.download"></script>
<link rel="stylesheet" href="./suresh_files/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="./suresh_files/popper.min.js.download"></script>

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
.ss{
	word-wrap:break-word;
	white-space:normal;
}
.a{
margin-top:20px;
border:2px solid gray;
box-shadow:5px 5px 5px 5px gray;
}
.b{
background-color:gray;
float:right;
margin-right:30px;
}
.c{
background-color:gray;
color:red;
border:2px solid gray;
}
.d{
width:220px;
height:140px;
<!-- background-color:white; -->
}
.f{
width:90%;
}
.s{
background-image:url("img/bg_image.jpg");
background-repeat:no-repeat;
}
.g{width:350px;
height:200px;
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
.k{
color:red;
}
</style>
</head>
<body class="s">
<div class="container-fluid ">
<div class="container">
<div class="row">
<div class="col-md-7 a">

<div class="row">
<div class="col-md-12 c">
<h2><cite class="b">User Login</cite></h2>
</div></div>

<div class="row">
<div class="col-md-12">
<img class="img-fluid d" src="./suresh_files/security-icon.png">
</div>
</div>
<br>
<br>
<br>
<form id="myform" method="post" action=""  >
<div class="form-group row ">
<label for="r" class="offset-md-1 col-md-2 col-form-label">UserName</label>
<div class="col-md-8">
<input type="text" name="username" class="form-control mr-2" id="r" autocomplete="off" placeholder="username">
</div></div>


<div class="form-group row ">
<label for="l" class="offset-md-1 col-md-2 col-form-label">Password</label>
<div class="col-md-8">
<input type="password" name="password" class="form-control" autocomplete="off" id="l" placeholder="username">
</div>
</div>


<div class="form-group row">
<div class="offset-md-2 col-md-2">
<input type="submit" class="btn btn-primary form-control" name="sub" value="login">
</div>
<div class="col-md-7">
<a href="Home.php"><input type="button" class="btn btn-warning form-control text-wrap  ss" value="I Do not have username or password"></a>
</div>
</div>
 </form>

	
<?php
   session_start();
?>
<?php
$con=mysqli_connect("localhost","root","","blood") or die("not connected");

if(isset($_POST['sub']))
{
	 $username=$_POST['username'];
	 $password=$_POST['password'];
	
	$s=mysqli_query($con,"SELECT * FROM employee where username='$username' and password='$password'");
	
	if(mysqli_num_rows($s)>'0')
	{
		while($result=mysqli_fetch_array($s)){
			
			$_SESSION['username']=$result['username'];
			//echo $_SESSION['password']=$result['password'];
				echo"<script> alert('login success');</script>";
			header("Location:Home1.php");
		}
    }
	else{
		echo "<h5 style='color:red'>login fail</h5>";
		?>
		<script type="text/javascript"> alert("login fail");</script>
		<?php
		
	}
}

?>

</div>

<div class="offset-md-5">
</div>
</div>
</div><br>

<div class="row">
<div class="col-md-4">
<img src="img/left-index-logo.jpg" class="img-fluid g">
</div>
</div>

</div>
<footer>
<div class="col-md-12">
<h4 class="j">made by:suresh Boorla   @DDU-GKY Projects</h4>
</div>
</footer>
</div>




<script type="text/javascript">
$(document).ready(function(){
$("#myform").validate({
rules:{
username:{
required:true,
minlength:3
},
password:{
required:true,
minlength:3,
maxlength:8,
},
},
highlight:function(ss){
$(ss).addClass("k");
},
unhighlight:function(ss){
$(ss).removeClass("k");
},
messages:{
username:{
required:"plz enter the name.",
minlength:"plz enter above 3 chars"
},
password:{
required:"plz enter the password.",
minlength:"plz enter above 3 chars",
maxlength:"plz enter below 8 chars",
},
}
});
});
</script>



</body></html>