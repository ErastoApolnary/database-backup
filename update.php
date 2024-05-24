<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT * FROM customers WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $customer = $result->fetch_assoc();
    } else {
        echo "No customer found with ID: $id";
        exit;
    }
} else {
    echo "ID not provided";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Customer</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        input[type="text"], input[type="email"], input[type="password"] { width: 100%; padding: 8px; margin: 5px 0; }
        input[type="submit"] { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>

<h2>Edit Customer</h2>
<form action="update_process.php" method="post">
    <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
    <input type="text" name="name" value="<?php echo $customer['name']; ?>" required>
    <input type="email" name="email" value="<?php echo $customer['email']; ?>" required>
    <input type="password" name="password" placeholder="Leave blank to keep current password">
    <input type="text" name="phone" value="<?php echo $customer['phone']; ?>" required>
    <input type="submit" value="Update Customer">
</form>

</body>
</html>
