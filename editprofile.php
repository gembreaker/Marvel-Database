<?session_start();
include "NavBar.php";
include "conninfo.php";
?>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
	<div class="container">
	<?$userid=$_POST["userid"];

	$query="SELECT * FROM users WHERE userid = $userid";

	$result=mysqli_query($link,$query);

	$numrows=mysqli_num_rows($result);

	$r=mysqli_fetch_array($result);
	?>
	<h1>Edit Profile</h1>
	<form action="commitedituser.php" method="post" enctype="multipart/form-data">
		<p class="form-padding">First name: <br><input type="text" name="fname" value="<?echo $r["firstname"]?>"></p>
		<p class="form-padding">Surname: <br><input type="text" name="sname" value="<?echo $r["lastname"]?>"></p>
		<p class="form-padding">Username: <br><input type="text" name="uname" value="<?echo $r["username"]?>"></p>
		<p class="form-padding">Password: <br><input type="password" name="pword" value="<?echo $r["password"]?>"></p>
		<p class="form-padding">Date of Birth: <br><input type="date" name="dob" value="<?echo $r["dob"]?>"></p>
		<p class="form-padding">Email: <br><input type="text" name="email" value="<?echo $r["email"]?>"></p>
		<p class="form-padding">Profile Picture:</p> <input type="file" name="imgfile">
		<input type="hidden" name="userid" value="<?echo $userid;?>"><br>
		<div class="btn-group">
		<input type="submit" value="Commit Edit" class="button">
		</div>
	</form>
<br>
</div>
<br>
</body>
</html>