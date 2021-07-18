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
.v{
height:550px;
}
thead{
background-color:#afa230ed;
color:white;
}
tbody{
background-color:#69b055;
color:white;
}
.head{
	width:100%;
height:100px;
}
.img{ height:30px;
width:30px;
}
</style>
</head>
<body class="s">
<?php
include("header1.php");
?>
<?php
include("config.php");

$fr=mysqli_query($con,"SELECT * FROM joinus") or die("hello");

?>


<div class="table-responsive">
<caption><h2 style="color:purple" align="center">Our Members</h2></caption>
<table class="table table-striped table-bordered" >
<thead>
<tr>
<th>sno</th>
<th>FirstName</th>
<th>LastName</th>
<th>AGE</th>
<th>GENDER</th>
<th>EMAIL</th>
<th>PHONE</th>
<th>ADDRESS</th>
<th>BLOOD GROUP</th>
<th>DOB</th>
<th>EDIT</th>
<th>DELETE</th>
</tr>
</thead>


<?php

while($result=mysqli_fetch_array($fr))
{
	?>
	<tbody>
<tr>
<td><?php echo $result['sno']; ?></td>
<td><?php echo $result['fname']; ?></td>
<td><?php echo $result['lname']; ?></td>
<td><?php echo $result['age']; ?></td>
<td><?php echo $result['gender']; ?></td>
<td><?php echo $result['email']; ?></td>
<td><?php echo $result['phone']; ?></td>
<td><?php echo $result['address']; ?></td>
<td><?php echo $result['blood']; ?></td>
<td><?php echo $result['dob']; ?></td>
<td><a href="update.php?id=<?php echo $result['sno']; ?>"><img class="img" src="image/update.png"></a></td>
<td><a href="delete.php?id=<?php echo $result['sno'];?>" onClick="return confirmation()"><img class="img" src="image/delete.png"></a></td>
</tr></tbody>

	<?php
}
?>
<script>
function confirmation()
{
	ss=confirm("do you want delete this record");
	if(ss==true)
	{
		return true;
		}
   else{
	   return false;
	   }
}
</script>
</table>
</div>

<?php
include("footer.php");
?>

</body>
</html>














