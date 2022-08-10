<?session_start();
include"NavBar.php";?>
<html>
<head>
<title>Add Film</title>
</head>
<body><br>
<div class="container">
<h2>Add Film</h2>
Please enter a new film:<br><br>

<form action="insertfilm.php" method="post" enctype="multipart/form-data">

Title: <input type="text" name="title"><br>
Description: <input type="text" name="desc"><br>
Release Date: <input type="text" name="rd"><br>
Age Rating: <input type="text" name="ar"><br>
Genre: <input type="text" name="genre"><br>
Length: <input type="text" name="length"><br>
Video: <input type="text" name="video"><br>
Upload image: <input type="file" name="imgfile"><br><br>
<input type="submit" value="Submit">

</form>
<br>
</div>
<br>
</body>
</html>