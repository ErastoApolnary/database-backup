<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Management</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f5f5f5; }
        form { margin-bottom: 20px; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        input[type="text"], input[type="email"], input[type="password"] { width: calc(100% - 16px); padding: 10px; margin: 5px 0; border: 1px solid #ddd; border-radius: 4px; }
        input[type="submit"], .edit-btn, .delete-btn { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; border-radius: 4px; }
        .edit-btn { background-color: #007bff; } /* Blue */
        .delete-btn { background-color: #dc3545; } /* Red */
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
    </style>
</head>
<body>

<h2>Add Customer</h2>
<form action="create.php" method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <input type="submit" value="Add Customer">
</form>

<h2>Customers List</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php include 'read.php'; ?>
    </tbody>
</table>

</body>
</html>
