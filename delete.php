<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM customers WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "ID not provided";
}
?>
