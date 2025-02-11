<?php
include '../db_connection.php';

if (isset($_GET['id'], $_GET['status'])) {
    $id = intval($_GET['id']);
    $status = ($_GET['status'] === 'activate') ? 1 : 0;

    $stmt = $conn->prepare("UPDATE add_banner SET status = ? WHERE id = ?");
    echo $stmt && $stmt->bind_param('ii', $status, $id) && $stmt->execute() ? 'success' : 'error';

    $stmt->close();
}

$conn->close();
?>
