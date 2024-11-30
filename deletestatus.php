<!-- <?php
require_once'connection.php';
$sno = $_GET['dssn'];

// -------------------------------------------------------------------------------------

$img_unlink_query = "SELECT file_name FROM status WHERE status_id = '$sno'";
$data2 = mysqli_query($con, $img_unlink_query);

$data2_num = mysqli_num_rows($data2);
if($data2_num == 0){
    // echo"No image id found";
    return;
}
else{
    $fetched_row = mysqli_fetch_assoc($data2);
    $fn = $fetched_row['file_name'];

    $path = 'uploads/'.$fn;
    @unlink($path);
    // echo"$fn";
}

// --------------------------------------------------------------------------------------------

$status_del_query = "DELETE FROM status WHERE status_id ='$sno'";

$data = mysqli_query($con, $status_del_query);

header('location:yourself.php');
?> -->


<?php
require_once 'connection.php';

class StatusManager
{
    private $db;

    public function __construct($con)
    {
        $this->db = $con;
    }

    // Fetch file name for unlinking
    public function getFileNameById($statusId)
    {
        $query = "SELECT file_name FROM status WHERE status_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $statusId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            return null; // No file associated with the given status ID
        }

        $row = $result->fetch_assoc();
        return $row['file_name'];
    }

    // Delete file from the server
    public function deleteFile($fileName)
    {
        $filePath = 'uploads/' . $fileName;

        if (file_exists($filePath)) {
            @unlink($filePath); // Suppress errors with @unlink
        }
    }

    // Delete status record from the database
    public function deleteStatus($statusId)
    {
        $query = "DELETE FROM status WHERE status_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $statusId);
        $stmt->execute();

        return $stmt->affected_rows > 0;
    }
}

// Instantiate the StatusManager class
$statusManager = new StatusManager($con);

// Get status ID from the URL
$sno = $_GET['dssn'];

// Get the file name associated with the status
$fileName = $statusManager->getFileNameById($sno);

if ($fileName) {
    // Delete the file if it exists
    $statusManager->deleteFile($fileName);
}

// Delete the status from the database
if ($statusManager->deleteStatus($sno)) {
    // Redirect to yourself.php if deletion is successful
    header('Location: yourself.php');
    exit;
} else {
    // Handle errors, e.g., display an error message or log the issue
    echo "Failed to delete the status.";
}
?>
