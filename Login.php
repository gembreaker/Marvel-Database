<?session_start();
include "NavBar.php";
include "conninfo.php"; ?>

<html>
<head>
	<title>Login Page</title>
</head>

<body>
	<br>
	<div class="container">
<?if(@$_SESSION["admintype"]==1)
{
?>
	<!-- Admin page for authorised users - users with an admintype of 1 -->
	<h1>Welcome <?echo $_SESSION['username'];?></h1>
	<a href="logout.php">Logout</a>
<?
}
else if(@$_SESSION["username"]!="")
{?>
<div class="profile-padding">
<!-- Profile Page for ordinary users who have signed up -->
<h1>Profile</h1>
<div class="row">
	<div class="col-md-3">
	<img src="<?echo $_SESSION["profilepic"];?>" class="profile-pic" alt="No profile pic to show.">
	<br><br>
	</div>
	<div class="col">
	<table>
	<tr>
		<td><b>Username:</b></td>
		<td><?echo $_SESSION["username"];?></td>
	</tr>
	<tr>
		<td><b>Firstname:</b></td>
		<td><?echo $_SESSION["firstname"];?></td>
	</tr>
	<tr>
		<td><b>Lastname:</b></td>
		<td><?echo $_SESSION["lastname"];?></td>
	</tr>
	<tr>
		<td><b>Date of Birth:</b></td>
		<td><?echo $_SESSION["dob"];?></td>
	</tr>
	<tr>
		<td><b>Email:</b></td>
		<td><?echo $_SESSION["email"];?></td>
	</tr>
	</table>
	</div>
	</div>
	<form action="editprofile.php" method="post">
		<input type="hidden" name="userid" value="<?echo $_SESSION["userid"];?>">
	<div class="btn-group">
		<input type="submit" value="Edit Profile" class="button"><br><br>
	</form>
		<a href="logout.php"><input type="text" value="Log Out" class="button"></a>
	</div>
	<h4>Contribute to our database:</h4>
	<div class="btn-group">
		<a href="addfilm.php"><input type="text" value="Add a Film" class="button"></a>
		<a href="addtvshow.php"><input type="text" value="Add a TV Show" class="button"></a>
	</div>
	</div>
<?
}
else {
?>

<!-- Sign Up -->
<div class="row">
	<div class="col-12 col-md-6">
	<h1 class="signup-title">Sign Up</h1>
	<form action="insertuser.php" method="POST" style="text-align: center;">
		<p>First name: <br><input type="text" name="fname"></p>
		<p>Surname: <br><input type="text" name="sname"></p>
		<p>Username: <br><input type="text" name="uname"></p>
		<p>Password: <br><input type="password" name="pword"></p>
		<p>Date of Birth: <br><input type="date" name="dob"></p>
		<p>Email: <br><input type="text" name="email"></p>
		<div class="btn-group">
		<input type="submit" value="Submit" class="button">
		</div>
	</form>
	</div>

<!-- Log in -->
<div class="col-12 col-md-6">
<form action="getname.php" method="post" style="text-align: center;">
<h1>Login</h1>
Username: <br><input type="text" name="un"><br><br>
Password: <br><input type="password" name="pw">
<br><br>
<div class="btn-group">
<input type="submit" value="Submit" class="button">
</div>
</form>
<?}?>
</div>
</div>
</div>
<br>
</body>
</html>