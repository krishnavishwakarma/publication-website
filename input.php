<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
</head>
<body>
<form method="post">
Enter Frist Name:<input type="text" name="fname" /><br>
Enter last Name:<input type="text" name="lname" /><br>
<input type="button" name="submit" value="save">

</form>
</body>
</html>
<?php
$smame = "localhost";
$uname = "root";
$pass = "";
$db = "db_login";
$conn = mysqli_connect($smame, $uname, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])
{
$fname=$_POST[‘fname’];
$lname=$_POST[‘lname’];}

$sql = "INSERT INTO contact(fname, lname)
VALUES ("'.$fname.'", "'.$lname.'")";#mysql_query("INSERT INTO users (column 1, column2) VALUES ($_POST['value1'], $_POST['value2'])")
if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
/*if($_POST["submit"]){
$fname=$_POST["fname"];
$lname=$_POST["lname"];


$query="INSERT INTO contact(fname,lname) VALUES('".$fname."','".$lname."')";
if(mysql_query($query))
echo"You have Entered data";
else
echo mysql_error()*/


?>
