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
.ss{word-wrap:break-word;
background-image:url("img/bg_image.jpg");
background-repeat:no-repeat;
}
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

}
.p{
width:400px;
}
.error{
color:red;
}
tr td{
color:white;
}
</style>
</head>
<body class="ss">
<?php
include("header.php");
?>
<div class="container">
<caption style="background-color:#836AAE" ><h4 style="color:purple" align="center">Member Registration</h4></caption>
<div class="offset-md-2 col-md-10">
<form id="sform" method="post">
<div class="form-group row ">
<label  class="col-md-2 col-form-label " style="background-color:#999966">Name</label>
<div class="col-md-3">
<input type="text" class="form-control" placeholder="first name" name="fname" value="">
</div>
<div class="col-md-3">
<input type="text" class="form-control"  placeholder="last name" name="lname" value="">
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#836AAE" value="">Age</label>
<div class="col-md-6">
<input type="text" class="form-control"  placeholder="Age" name="age">
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#5555B0" >Gander</label>
<div class="col-md-2 ">
<input type="radio"  name="gender" value="male">Male</div>
<div class="col-md-2"><input type="radio"  name="gender" value="female">Female</div>
</div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#8CE67A">Email</label>
<div class="col-md-6">
<input type="email" class="form-control" placeholder="Email" name="email" value="">
</div></div>


<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#8CE67A">PhoneNumber</label>
<div class="col-md-6">
<input type="text" class="form-control " placeholder="PhoneNumber" name="phone" value="">
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#d9f90d4d">Address</label>
<div class="col-md-6">
<textarea type="text" class="form-control " placeholder="Address" name="address" value=""></textarea>
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#CA5959">BloodGroup</label>
<div class="col-md-6">
<select name="blood" class="form-control ">
<option disabled selected>Select Group...</option>
<optgroup label="Blood group">
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="AB+">AB+</option>
<option value="A-">A-</option>
<option value="B-">B-</option>
<option value="O-">O-</option>
<option value="O+">O+</option>
<option value="AB-">AB-</option>
</optgroup>
</select>
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#B0B055">DateOfBirth</label>
<div class="col-md-6">
<input type="date" class="form-control" name="dob" value="">
</div></div>

<input type="submit" class="btn btn-success" name="sub" value="join">
<input type="reset" class="btn btn-primary" value="Reset">
</div>
</form>


</div>
</div>
<br>
<?php
include("footer.php");
?>
</div>

<?php

$con=mysqli_connect("localhost","root","","blood") or die("not connected");
if(isset($_POST['sub']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$blood=$_POST['blood'];
	$dob=$_POST['dob'];
	
	$s=mysqli_query($con,"insert into joinus(fname,lname,age,gender,email,phone,address,blood,dob) values('$fname','$lname','$age','$gender','$email','$phone','$address','$blood','$dob')") ;
	
	if($s>'0')
	{
		echo "record inserted";
	}
	else{
		echo "record not inserted";
	}
}

?>



<script type="text/javascript">
$(document).ready(function(){
$("#sform").validate({
rules:{
fname:{
required:true
},
age:{
required:true
},
lname:{
required:true
},
email:{
required:true
},
phone:{
required:true,
minlength:10,
maxlength:10
},
add:{
required:true
}
}

});
});
</script>

</body>
</html>














