<?php
include 'connect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $projectId = $_POST['id'];
    $actionType = $_POST['type']; // 'heart' for like/unlike, 'view' for views
    $userIp = $_SERVER['REMOTE_ADDR']; // Get user IP as unique identifier

    if ($actionType == 'heart') {
        // Handling likes (heart functionality)
        $sqlCheck = "SELECT * FROM project_likes WHERE project_id = ? AND user_ip = ?";
        $stmtCheck = $conn->prepare($sqlCheck);
        $stmtCheck->bind_param("is", $projectId, $userIp);
        $stmtCheck->execute();
        $resultCheck = $stmtCheck->get_result();

        if ($resultCheck->num_rows > 0) {
            // If user has already liked, "unlike" the project
            $sqlUpdate = "DELETE FROM project_likes WHERE project_id = ? AND user_ip = ?";
            $stmtUpdate = $conn->prepare($sqlUpdate);
            $stmtUpdate->bind_param("is", $projectId, $userIp);
            $stmtUpdate->execute();

            // Decrease heart count
            $sqlHeartCount = "UPDATE projects SET hearts = hearts - 1 WHERE id = ?";
            $stmtHeartCount = $conn->prepare($sqlHeartCount);
            $stmtHeartCount->bind_param("i", $projectId);
            $stmtHeartCount->execute();
            $stmtCheck->close();
            $stmtUpdate->close();
          
            echo json_encode(['success' => true, 'action' => 'unlike']);
        } else {
            // If user has not liked, "like" the project
            $sqlInsert = "INSERT INTO project_likes (project_id, user_ip) VALUES (?, ?)";
            $stmtInsert = $conn->prepare($sqlInsert);
            $stmtInsert->bind_param("is", $projectId, $userIp);
            $stmtInsert->execute();
            
            // Increase heart count
            $sqlHeartCount = "UPDATE projects SET hearts = hearts + 1 WHERE id = ?";
            $stmtHeartCount = $conn->prepare($sqlHeartCount);
            $stmtHeartCount->bind_param("i", $projectId);
            $stmtHeartCount->execute();

            $stmtInsert->close();
            $stmtHeartCount->close();
            echo json_encode(['success' => true, 'action' => 'like']);
        }

    } elseif ($actionType == 'view') {
        // Handling views
        // Increase view count for this project
        $sqlViewCount = "UPDATE projects SET views = views + 1 WHERE id = ?";
        $stmtViewCount = $conn->prepare($sqlViewCount);
        $stmtViewCount->bind_param("i", $projectId);
        $stmtViewCount->execute();
        $stmtViewCount->close();
        echo json_encode(['success' => true, 'action' => 'view']);
    }

    // Close all prepared statements
}

$conn->close();
?>
