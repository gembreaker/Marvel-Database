<? session_start();
include "NavBar.php" ?>
<html>
<head>
<title>Search</title>
</head>
<body>
<br>
<div class="container">
<form action="dosearch.php" method="post">
Search:
<input type="text" name="thesearch">
<select id="searchmedia" name="thefield">
    <option value="f">Film</option>
    <option value="tv">TV Show</option>
</select>
<br><br>
<input type="submit">

</form>
</div>
</body>
</html>