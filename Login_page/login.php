<!DOCTYPE html>
<html>
    <head></head>
<body>
<?php
if (isset($_POST["name"]) && isset($_POST["password"])) {
  $name = $_POST["name"];
  $password = $_POST["password"];
  echo "<h1>Welcome $name</h1>"; // Use double quotes for variable interpolation
  echo '<a href="../Course_page/course_index.html">go to course page</a>';
}
?>
<h2>go to the website</h2>
</body>
</html>