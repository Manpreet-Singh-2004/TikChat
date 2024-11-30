<?php
require_once 'connection.php';
session_start();

$community = isset($_GET['community']) ? $_GET['community'] : null;

if(isset($_POST['mind'])) {
    $text = $_POST['mind'];
    $email = $_SESSION['email'];
    $privacy = $_POST['privacy'];
    
    // Initialize filename as empty string instead of NULL
    $filename = '';
    
    // Only process file if checkbox is checked and file is uploaded
    if($_POST['fileup'] == 1 && isset($_FILES['filetoup']) && $_FILES['filetoup']['size'] > 0) {
        $filename = $_FILES['filetoup']['name'];
        $tmpname = $_FILES['filetoup']['tmp_name'];
        move_uploaded_file($tmpname, "uploads/" . $filename);
    }

    $query = "INSERT INTO status (status_text, user_email, file_name, status_privacy, community) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sssis", $text, $email, $filename, $privacy, $community);
    mysqli_stmt_execute($stmt);
    
    // Redirect back to home page with community parameter
    header("Location: home.php" . ($community ? "?community=" . urlencode($community) : ""));
    exit();
}
?>