<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $password = $_POST['password'];
    if (!empty($password)) {
        $password = password_hash($conn->real_escape_string($password), PASSWORD_BCRYPT);
        $sql = "UPDATE customers SET name='$name', email='$email', password='$password', phone='$phone' WHERE id=$id";
    } else {
        $sql = "UPDATE customers SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
