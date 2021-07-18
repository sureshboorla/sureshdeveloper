<html>
<head>
<title>Check</title>
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
.head{
	width:100%;
height:100px;
}
.ss{word-wrap:break-word;
background-image:url("img/bg_image.jpg");
background-repeat:no-repeat;
}
</style>
</head>
<body class="ss">
<?php
include("header.php");
?>
<div class="container">
<!-- <div class="form-group row "> -->
<!-- <label  class="col-md-1 col-form-label" style="background-color:#CA5959">BloodGroup</label> -->
<!-- <div class="col-md-4"> -->
<!-- <select name="degree" class="form-control "> -->
<!-- <option disabled selected>Select Group...</option> -->
<!-- <optgroup label="Blood group"> -->
<!-- <option value="">A+</option> -->
<!-- <option value="">B+</option> -->
<!-- <option value="">AB+</option> -->
<!-- <option value="">A-</option> -->
<!-- <option value="">B-</option> -->
<!-- <option value="">O-</option> -->
<!-- <option value="">O+</option> -->
<!-- <option value="">AB-</option> -->
<!-- </optgroup> -->
<!-- </select> -->
<!-- <input type="button" class="btn btn-success col-sm-1s" value="Check Availability"> -->
<!-- </div></div> -->
<caption><h2 style="color:purple" >Check Availability</h2></caption>
<div class="form-group row" style="margin-top:20px">
<label  class="col-md-2 col-form-label mr-2" style="background-color:#CA5959">SelectBloodGroup</label>
<select name="degree" class="form-control col-md-4 mr-2 ">
<option disabled selected>Select Group...</option>
<optgroup label="Blood group">
<option value="">A+</option>
<option value="">B+</option>
<option value="">AB+</option>
<option value="">A-</option>
<option value="">B-</option>
<option value="">O-</option>
<option value="">O+</option>
<option value="">AB-</option>
</optgroup>
</select>
<input type="button" class="btn btn-success col-md-2" value="Check Availability">
</div>
</div>
<?php
include("footer.php");
?>

</body>
</html>














