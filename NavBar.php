<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="CSS/NavBar.css">
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<meta charset="utf-8">
<link rel="icon" href="Media/Icon.jpg">
</head>

<style>
body {
	background-image: url('Media/background.jpg');
	background-image-opacity: 0;
}
</style>
<body>
<!-- Nav bar when user is logged in -->
<?if(@$_SESSION["username"]!="")
{?>
<div class="topnav" id="myTopnav">
	<a href="Index.php" class="logo"><img src="Media/Logo.jpg" style="height: 40px;"></a>
	<a href="Index.php" class="links">Home</a>
	<a href="Films.php" class="links">Films</a>
	<a href="TVShows.php" class="links">TV Shows</a>
	<a href="Login.php" class="links"> Profile </a>
	<a href="javascript:void(0);" class="links icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<?
}
else {
?>
<!-- Nav bar when user is logged out -->
<div class="topnav" id="myTopnav">
	<a href="Index.php" class="logo"><img src="Media/Logo.jpg" style="height: 40px;"></a>
	<a href="Index.php" class="links">Home</a>
	<a href="Films.php" class="links">Films</a>
	<a href="TVShows.php" class="links">TV Shows</a>
	<a href="Login.php" class="links"> Login </a>
	<a href="javascript:void(0);" class="links icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script src="JavaScript/NavBar.js">
</script>
</body>
<?}?>
</html>