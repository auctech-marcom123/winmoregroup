<?php
if (isset($_POST['fname'], $_POST['phone'], $_POST['email'], $_POST['message'])) {
   
    $fname = trim($_POST['fname']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    $added_date = date('Y-m-d H:i:s');

    
    if (empty($fname) || empty($phone) || empty($email) || empty($message)) {
        echo 'error';
        exit;
    }

 
    include('db_connection.php');
  
    $sql = "INSERT INTO  add_query_list (fname, phone, email, message, added_date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo 'error: ' . $conn->error; 
        exit;
    }

    $stmt->bind_param("sssss", $fname, $phone, $email, $message, $added_date);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error: ' . $stmt->error; 
    }

    $stmt->close();
    $conn->close();
}
?>
