<?php
// Get the user's IP address
$userIP = $_SERVER['REMOTE_ADDR'];

include 'connect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, description, image_url, hearts, views FROM projects";
$result = $conn->query($sql);

$projects = [];
while ($row = $result->fetch_assoc()) {
    // If the user already liked the project, mark it as liked
    $projectId = $row['id'];

    // Query the database to check if the IP address already liked this project
    $checkLike = $conn->query("SELECT * FROM project_likes WHERE user_ip = '$userIP' AND project_id = $projectId");

    // If there's a record, mark it as liked
    $row['liked'] = ($checkLike->num_rows > 0);
    
    $projects[] = $row;
}

header('Content-Type: application/json');
echo json_encode(['success' => true, 'projects' => $projects]);

$conn->close();
?>
