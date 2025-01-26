<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mobile = $_POST['mobile']);
    $password = $_POST['password']);

    // Validate input
    if (empty($mobile) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    // Fetch user data
    $sql = "SELECT * FROM climate WHERE mobile = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $mobile);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            echo "Login successful!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
    $conn->close();
}
?>
