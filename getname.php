<?session_start();
include("NavBar.php");
include "conninfo.php";?>
<html>
<head>
<title>Redirecting...</title>
</head>
<body>
<div class="container">
<?
$un=$_POST["un"];
$pw=$_POST["pw"];

// SQL Injection
$un=str_replace("'"," ",$un);
$pw=str_replace("'"," ",$pw);

$query="SELECT * FROM users WHERE username like '$un' AND password like '$pw'";

$result=mysqli_query($link,$query) or die("Couldn't execute query"); ;

$numrows=mysqli_num_rows($result);

$r=mysqli_fetch_array($result);

if($numrows>0)
{
	$_SESSION["username"]=$un;
	$_SESSION["userid"]=$r["userid"];
	$_SESSION["firstname"]=$r["firstname"];
	$_SESSION["lastname"]=$r["lastname"];
	$_SESSION["password"]=$r["password"];
	$_SESSION["dob"]=$r["dob"];
	$_SESSION["email"]=$r["email"];
	$_SESSION["profilepic"]=$r["profilepic"];
	$_SESSION["admintype"]=$r["admintype"];
	if($_SESSION["admintype"]==1){?>
		<p>Successfully logged in as admin. Redirecting...</p>
		<?header("refresh:3;url=Login.php");
		}
	else{
	?>
	Thank you for logging in. Redirecting...
	<?header( "refresh:3;url=Films.php" );
	}
}
else {
	echo "Sorry wrong log in details";?>
	<a href="Login.php">Back to Login Page</a>
	<?
}
?>
</div>
</body>
</html>