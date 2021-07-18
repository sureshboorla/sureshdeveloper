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
position:sticky;
bottom:0px;
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
.head{
	width:100%;
height:100px;
}
</style>
</head>
<body class="s">
<?php
include("header.php");
?>



<div class="container">
<div class="offset-md-2 col-md-10  ">
<form id="sform" method="post">
<caption ><h4 style="color:purple" align="center">Patient Details</h4></caption>
<div class="form-group row ">
<label  class="col-md-2 col-form-label " style="background-color:#999966">Patient Name</label>
<div class="col-md-7">
<input type="text" class="form-control " name="pname">
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#d9f90d4d">HospitalName & address</label>
<div class="col-md-7">
<textarea type="text" class="form-control " name="address"></textarea>
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#CA5959">BloodGroup</label>
<div class="col-md-7">
<select name="bloodr" class="form-control ">
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
<hr>
<caption><h4 style="color:purple" align="center">Contact Details</h4></caption>

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
<textarea type="text" class="form-control " name="messege"></textarea>
</div></div>

<input type="submit" class="btn btn-primary" value="Submit" name="sub">
<input type="reset" class="btn btn-primary" value="Reset">
</div>
</form>


</div>
</div>




<?php

$con=mysqli_connect("localhost","root","","blood") or die("not connected");
if(isset($_POST['sub']))
{
	echo $pname=$_POST['pname'];
	echo $address=$_POST['address'];
	echo $bloodr=$_POST['bloodr'];
	echo $email=$_POST['email'];
	echo $phone=$_POST['phone'];
	echo $messege=$_POST['messege'];

	$req=mysqli_query($con,"insert into request(pname,address,bloodr,email,phone,messege) values('$pname','$address','$bloodr','$email','$phone','$messege')") ;
	
	if($req>'0')
	{
		echo "record inserted";
	}
	else{
		echo "record not inserted";
	}
}

?>





<?php
include("footer.php");
?>
</div>
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














