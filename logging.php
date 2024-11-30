<?php
require_once 'connection.php';

class UserAuth {
    private $db;

    public function __construct($con) {
        $this->db = $con;
    }

    public function checkUserExists($email) {
        $query = "SELECT * FROM users WHERE user_email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }

    public function verifyCredentials($email, $password) {
        $query = "SELECT * FROM users WHERE user_email = ? AND password = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }
}

$userAuth = new UserAuth($con);

$email = $_POST['email'];
$password = $_POST['pass'];
$community = isset($_POST['community']) ? $_POST['community'] : '';

// Validate community if provided
$validCommunities = array('Sports', 'Travel', 'Music', 'Health', 'Study');
if ($community && !in_array($community, $validCommunities)) {
    $community = ''; // Reset if invalid community
}

if (!$userAuth->checkUserExists($email)) {
    echo "<script>alert('User not found. Please Create an Account!');document.location='index.php'</script>";
    exit;
}

if (!$userAuth->verifyCredentials($email, $password)) {
    echo "<script>alert('Incorrect Password. Please check');document.location='index.php'</script>";
    exit;
} else {
    session_start();
    $_SESSION['isloggedin'] = 1;
    $_SESSION['email'] = $email;
    $_SESSION['community'] = $community;
    
    // Redirect with community parameter if it exists
    header('location: home.php' . ($community ? '?community=' . urlencode($community) : ''));
    exit;
}
?>