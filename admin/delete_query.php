<?php
session_start();
include '../db_connection.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
  }

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM  add_query_list WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $message = "User data deleted successfully";
        $status = "success";
    } else {
        $message = "Error: " . mysqli_error($conn);
        $status = "error";
    }

    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
            window.onload = function() {
                Swal.fire({
                    title: '$status',
                    text: '$message',
                    icon: '$status',
                }).then(function() {
                    window.location = 'index.php';
                });
            }
        </script>";
} else {
    echo "No ID provided to delete.";
}
?>
