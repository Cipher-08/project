<?php
$NAME = filter_input(INPUT_POST, 'name');
$MOBILE = filter_input(INPUT_POST, 'mobile');
$ADDRESS = filter_input(INPUT_POST, 'address');
$CITY = filter_input(INPUT_POST, 'city');
$STATE= filter_input(INPUT_POST, 'state');
$POSTAL = filter_input(INPUT_POST, 'postal');
$conn = new mysqli ('localhost','root','','signup');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    }
else{
    $sql = "INSERT INTO details (NAME,MOBILE,ADDRESS,CITY,STATE,POSTAL)
values ('$NAME','$MOBILE','$ADDRESS','$CITY','$STATE','$POSTAL')";
if ($conn->query($sql)){
header("Location:https://rzp.io/l/kHKAmJM");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>