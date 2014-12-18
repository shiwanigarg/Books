<html>
<body>
<?php

$con=mysqli_connect("localhost","root","baskin","log_in");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
echo "Done";
}
$ID= mysqli_real_escape_string($con, $_POST['ID']);
$password = mysqli_real_escape_string($con, $_POST['password']);


@$sql="INSERT INTO users (ID,password)
VALUES ('$ID','$password')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";
?>
</body>
</html>