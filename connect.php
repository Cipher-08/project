<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "signup";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (username, password)
values ('$username','$password')";
if ($conn->query($sql)){
echo "<script>alert('New record is inserted sucessfully')</script>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "<script>alert('Password should not be empty')</script>";
die();
}
}
else{
echo "<script>alert('Username should not be empty')";
die();
}
if($username !=''&& $password!='')
{
//  To redirect form on a particular page
header("Location:signin 2.html");
}
else{
   
 echo "<script>alert('Please fill all fields.....!!!!!!!!!!!!')</script>";
}

?>