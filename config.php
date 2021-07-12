<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "signup";
// Create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if ($con->connect_error) {
    die("failed to connect:".$con->connect_error);
}
else {
    $st=$con->prepare("select * from account where username = ?");
    $st->bind_param("s",$username);
    $st->execute();
    $st_result=$st->get_result();
    if($st_result->num_rows > 0){
        $data=$st_result->fetch_assoc();
        if ($data['password']===$password) {
            header("Location:SILVER FEATHER.html");
            
        echo"<script>alert(<h1>LOGIN SUCCESFULLY</h2>)</script>";
        }
        ELSE{
header("Location:signin.html");
               
        }
    }
    else{
        echo"<h1>invalid email or password</h1>";
    }
}

?>