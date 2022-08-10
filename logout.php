<?include 'NavBar.php';
session_start();

$_SESSION["username"]="";

session_destroy();

?>
<head>
<title>Logged Out</title>
</head>
<body><br>
<div class="container">
<p>You have been logged out</p>
<a href="Login.php">Login Page</a>
</div>
</body>