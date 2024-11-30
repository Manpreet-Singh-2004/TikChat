<!-- <?php
    require_once'connection.php';
    session_start();

    $u = $_SESSION['email'];

    $acc_del_query = "DELETE FROM users WHERE user_email = '$u'";
    $data = mysqli_query($con, $acc_del_query);

    $status_del_query = "DELETE FROM status WHERE user_email = '$u'";
    $data2 = mysqli_query($con, $status_del_query);

    echo"<script>alert('User Deleted Successfully!');document.location='index.php'</script>";
?> -->




<?php
require_once 'connection.php';
session_start();

// Define a DatabaseHandler class
class DatabaseHandler
{
    private $con;

    // Constructor to initialize the database connection
    public function __construct($con)
    {
        $this->con = $con;
    }

    // Method to delete a user from the database
    public function deleteUser($email)
    {
        $query = "DELETE FROM users WHERE user_email = ?";
        $stmt = $this->prepareStatement($query, [$email]);
        return $stmt->execute();
    }

    // Method to delete user statuses
    public function deleteUserStatuses($email)
    {
        $query = "DELETE FROM status WHERE user_email = ?";
        $stmt = $this->prepareStatement($query, [$email]);
        return $stmt->execute();
    }

    // Utility method to prepare a statement with parameterized queries
    private function prepareStatement($query, $params)
    {
        $stmt = $this->con->prepare($query);
        if ($stmt === false) {
            die("Error preparing statement: " . $this->con->error);
        }

        // Bind parameters dynamically
        $types = str_repeat('s', count($params)); // Assuming all parameters are strings
        $stmt->bind_param($types, ...$params);
        return $stmt;
    }
}

// Ensure the user is logged in
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Session expired. Please log in again.');document.location='login.php'</script>";
    exit;
}

// Get the user's email
$userEmail = $_SESSION['email'];

// Create an instance of the DatabaseHandler
$dbHandler = new DatabaseHandler($con);

// Perform account deletion
$userDeleted = $dbHandler->deleteUser($userEmail);
$statusDeleted = $dbHandler->deleteUserStatuses($userEmail);

// Check the results and redirect the user
if ($userDeleted && $statusDeleted) {
    echo "<script>alert('User Deleted Successfully!');document.location='index.php'</script>";
} else {
    echo "<script>alert('Error deleting user or statuses. Please try again.');document.location='yourself.php'</script>";
}
?>
