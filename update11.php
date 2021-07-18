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
.d{
height:500px;
}
.v{
text-align:center;
}
.s{
background-image:url("img/bg_image.jpg");
background-repeat:no-repeat;
}
</style>
</head>
<body class="s">
<?php
include("header.php");
?>
<div class="container v">
<?php 
$id=$_GET['id'];
include("config.php");
if(isset($_POST['sub']))
{
	$email=$_POST['email'];
	
	$r=mysqli_query($con,"update joinus set email='$email' where sno='$id'") or mysqli_error();
	if($r>'0')
	{
		echo "<script>alert('record updated');
window.location='ourmembers.php';</script>";
	}
	else{
		echo "record not  updated ";
	}
	
}
?>
<?php
$fr=mysqli_query($con,"SELECT * FROM joinus where sno='$id'") or die("hello");

?>

<?php

while($result=mysqli_fetch_array($fr))
{
	?>
	
	<div class="container">
<caption style="background-color:#836AAE" ><h4 style="color:purple" align="center">Edit Details</h4></caption>
<div class="offset-md-2 col-md-10">
<form id="sform" method="post">


<div class="form-group row ">
<label  class="col-md-2 col-form-label " style="background-color:#999966">Sno</label>
<div class="col-md-6">
<input type="text" class="form-control"  placeholder="sno" name="sno" value="<?php echo $result['sno']; ?>">
</div>
</div>


<div class="form-group row ">
<label  class="col-md-2 col-form-label " style="background-color:#999966">Name</label>
<div class="col-md-3">
<input type="text" class="form-control" placeholder="first name" name="fname" value="<?php echo $result['fname']; ?>">
</div>
<div class="col-md-3">
<input type="text" class="form-control"  placeholder="last name" name="lname" value="<?php echo $result['lname']; ?>">
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#836AAE" >Age</label>
<div class="col-md-6">
<input type="text" class="form-control"  placeholder="Age" name="age" value="<?php echo $result['age']; ?>">
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#5555B0" >Gander</label>
<div class="col-md-2 ">
<input type="text" class="form-control"  name="gender" value="<?php echo $result['gender']; ?>">
</div>
</div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#8CE67A">Email</label>
<div class="col-md-6">
<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $result['email']; ?>">
</div></div>


<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#8CE67A">PhoneNumber</label>
<div class="col-md-6">
<input type="text" class="form-control " placeholder="PhoneNumber" name="phone" value="<?php echo $result['phone']; ?>">
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#d9f90d4d">Address</label>
<div class="col-md-6">
<textarea type="text" class="form-control " placeholder="Address" name="address" value="<?php echo $result['address']; ?>"></textarea>
</div></div>

<div class="form-group row ">
<label  class="col-md-2 col-form-label" style="background-color:#CA5959">BloodGroup</label>
<div class="col-md-6">
<select name="blood" class="form-control ">
<option disabled >Select Group...</option>
<optgroup label="Blood group">
<option value="<?php echo $result['blood']; ?>"></option>
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
<input type="date" class="form-control" name="dob" value="<?php echo $result['dob']; ?>">
</div></div>
<input type="submit" class="btn btn-success" name="sub" value="Update">
</div>
	
		<?php
}
?>

	
	
<?php
include("footer.php");
?>

</body>
</html>














