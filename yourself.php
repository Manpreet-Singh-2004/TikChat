<?php
require_once 'connection.php';

class UserProfile {
    private $db;
    private $userEmail;

    // Constructor to initialize the database connection and session
    public function __construct($dbConnection) {
        $this->db = $dbConnection;
        session_start();
        if (!isset($_SESSION['email'])) {
            header('Location: index.php');
            exit;
        }
        $this->userEmail = $_SESSION['email'];
    }

    // Method to display the user profile
    public function displayProfile() {
        echo "<div class='header'>
                <a href='home.php' class='nav-link'>Home</a>
                <a href='deleteacc.php' class='nav-link'>Delete Account</a>
              </div>";
        echo "<h1>Profile</h1>";
        echo "<p>Welcome, <strong>" . htmlspecialchars($this->userEmail) . "</strong></p>";
    }

    // Method to fetch user posts
    public function fetchPosts() {
        $query = "SELECT * FROM status WHERE user_email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $this->userEmail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            echo "<p>No status to show! Please type a status first.</p>";
        } else {
            echo "<h2>Your Posts</h2>";
            echo "<table class='post-table'>";
            while ($row = $result->fetch_assoc()) {
                $this->renderPost($row);
            }
            echo "</table>";
        }

        $stmt->close();
    }

    // Method to render a single post
    private function renderPost($row) {
        $statusText = htmlspecialchars($row['status_text']);
        $statusId = $row['status_id'];
        $fileName = $row['file_name'];

        echo "<tr>";
        if (!empty($fileName)) {
            $imgSrc = "uploads/" . htmlspecialchars($fileName);
            echo "<td>$statusText<br><img src='$imgSrc' alt='Post Image' class='post-image'></td>";
        } else {
            echo "<td>$statusText</td>";
        }
        echo "<td><a href='deletestatus.php?dssn=$statusId' class='delete-link'>Delete</a></td>";
        echo "</tr>";
    }
}

// Instantiate the UserProfile class and render the profile and posts
$userProfile = new UserProfile($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="tikchat.png">
    <link rel="stylesheet" href="indexstyle.css">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .header {
            display: flex;
            justify-content: flex-end;
            background-color: #007bff;
            padding: 10px;
        }

        .header .nav-link {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
        }

        .header .nav-link:hover {
            text-decoration: underline;
        }

        h1 {
            color: #333;
        }

        .userin {
            max-width: 800px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .post-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .post-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .post-image {
            width: 200px;
            height: auto;
            margin-top: 10px;
        }

        .delete-link {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }

        .delete-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <center>
        <div class="userin">
            <?php
            $userProfile->displayProfile();
            $userProfile->fetchPosts();
            ?>
        </div>
    </center>
</body>

</html>
