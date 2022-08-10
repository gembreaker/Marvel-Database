<?include "NavBar.php";
include("conninfo.php");
$fname=$_POST["fname"];
$sname=$_POST["sname"];
$uname=$_POST["uname"];
$pword=$_POST["pword"];
$hash = password_hash($pword, PASSWORD_DEFAULT);
$dob=$_POST["dob"];
$email=$_POST["email"];

$fname=trim($fname);//trim whitespace from each end
$fname=strtolower($fname);//force all to be lower
$fname=ucfirst($fname);//upper case first

$sname=trim($sname);//trim whitespace from each end
$sname=strtolower($sname);//force all to be lower
$sname=ucfirst($sname);//upper case first

// Prepared Statements

$query="INSERT INTO users(firstname,lastname,username,password,dob,email) 
VALUES(?,?,?,?,?,?)"


?>
<html>
<head>
<title>Profile Created</title>
</head>
<body>
<div class="container"><?

$stmt = mysqli_stmt_init($link); // Link to database
mysqli_stmt_prepare($stmt, $query) or die("Couldn't sign up user. Please try again.");; // Prepare query

mysqli_stmt_bind_param($stmt, "ssssss", $fname, $sname, $uname, $pword, $dob, $email);

mysqli_stmt_execute($stmt); // Execute query

mysqli_stmt_close($stmt);
mysqli_close($link);?>

Welcome, <?echo $fname?>! Your account has been successfully created.
<a href="Login.php">Click here to log in.</a>
</div>
</body>
</html>