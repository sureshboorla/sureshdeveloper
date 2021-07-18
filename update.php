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
<?php 
$id=$_GET['id'];
include("config.php");
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
	
	$r=mysqli_query($con,"update joinus set fname='$fname',lname='$lname',age='$age',gender='$gender',email='$email',phone='$phone',address='$address',blood='$blood',dob='$dob' where sno='$id'") or mysqli_error();
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
<table class="table table-striped table-bordered table-responsive" >
<thead>
<tr align="center">
<th>SNO</th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>AGE</th>
<th>GENDER</th>
<th>EMAIL</th>
<th>PHONE</th>
<th>ADDRESS</th>
<th>BLOOD GROUP</th>
<th>DOB</th>
<th>submit</th>

</tr>
</thead>
<?php

while($result=mysqli_fetch_array($fr))
{
	?>

<tr>
<form id="sform" method="post">

<td>
<input type="text" class="form-control"  placeholder="sno" name="sno" value="<?php echo $result['sno']; ?>">
</td>


<td>
<input type="text" class="form-control"  placeholder="first name" name="fname" value="<?php echo $result['fname']; ?>">
</td>

<td>
<input type="text" class="form-control"  placeholder="last name" name="lname" value="<?php echo $result['lname']; ?>">
</td>

<td>
<input type="text" class="form-control"  placeholder="Age" name="age" value="<?php echo $result['age']; ?>">
</td>


<td>
<input type="text" class="form-control"  name="gender" value="<?php echo $result['gender']; ?>">
</td>


<td>
<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $result['email']; ?>">
</td>


<td>
<input type="text" class="form-control " placeholder="PhoneNumber" name="phone" value="<?php echo $result['phone']; ?>">
</td>


<td>
<textarea type="text" class="form-control " placeholder="Address" name="address" value=""><?php echo $result['address']; ?></textarea>
</td>


<td>
<select name="blood" class="form-control ">
<option selected value="<?php echo $result['blood'];?>"><?php echo $result['blood'];?></option>
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
</td>


<td>
<input type="date" class="form-control" name="dob" value="<?php echo $result['dob']; ?>">
</td>


<td><input type="submit" class="btn btn-primary" name="sub" value="submit"></td>
</tr>

	<?php
}
?>

</table>

<?php
include("footer.php");
?>

</body>
</html>














