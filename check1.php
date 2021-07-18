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
<caption><h3 style="color:purple" >Find Blood Donor</h3></caption>
<br>
<form>
<div class="form-group row ">
<label class=" col-sm-3 col-form-label"><b>Select Blood Group:</b></label>
<select name="degree" class="form-control col-sm-3  p">
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
</div>
<div class="form-group row ">
<label class=" col-sm-3 col-form-label"><b>Search for donor by city:</b></label><select name="blood" class="form-control col-sm-3 mr-2  p">
<option disabled selected>Select city...</option>
<optgroup label="city...">
<option value="">hyderabad</option>
<option value="">karimnagar</option>
<option value="">hanmakonda</option>
</optgroup>
</select></div>
<div class="form-group row "><input type="button" class="btn btn-success offset-sm-1 col-sm-2" value="Check Availability"></div>
</div><br>
</form>


<?php
include("footer.php");
?>

</body>
</html>














