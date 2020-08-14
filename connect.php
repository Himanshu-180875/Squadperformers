<!DOCTYPE html>
<html>
<head>
	<title>THANK YOU</title>
	<link rel="stylesheet" type="text/css" href="connect.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<h1>
<?php
$username = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'Message');
if (!empty($username)){
if (!empty($email)){
if (!empty($message)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "squadperformers";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{
$sql = "INSERT INTO contact (username, email, message)
values ('$username','$email','$message')";
if ($conn->query($sql)){

echo "Submitted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "message should not be empty";
die();
}
}
else{
echo "email should not be empty";
die();
}
}
else{
echo "username should not be empty";
die();
}
?>
</h1>
<h3 class="ab"><i class="fa fa-home" aria-hidden="true" ></i><a href="https://squadperformers.000webhostapp.com/" class="ac"> Back to Home</a></h3>
</body>
 </html>