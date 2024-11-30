<?php
    require_once'connection.php';
    $u = $_POST['uname'];
    $np = $_POST['npass'];
    $cnp = $_POST['cnpass'];

    if($np == $cnp  && $np != "" && $cnp != ""){
        $pass_change_query = "UPDATE users SET password = '$cnp' WHERE user_email = '$u'";
        $reset_conf = mysqli_query($con, $pass_change_query);
        echo"<script>alert('Password Changed Successfully!');document.location='index.php'</script>";
        // echo"<a href='index.php'>Login</a>";
    }
    // if($np != $cnp){
        else{
        echo"<script>alert('There is an error. Please check!');document.location='resetpass.php'</script>";
    }
    ?>