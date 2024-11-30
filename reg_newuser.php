<!-- <?php
require_once'connection.php';

$u = $_POST['uname'];
$p = $_POST['upass'];

$user_add_query = "INSERT INTO users VALUES('$u', '$p')";

if(mysqli_query($con, $user_add_query) === FALSE) die ("Could not add the new user");
echo"<script>alert('New User Added');document.location='index.php'</script>";
// header('location:index.php');
// echo"<a href='index.php'>Login</a>"; 
?> -->