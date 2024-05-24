<?php
include 'db.php';

$sql = "SELECT id, name, email, phone FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>
                    <a href='update.php?id=" . $row['id'] . "' class='edit-btn'>Edit</a>
                    <a href='delete.php?id=" . $row['id'] . "' class='delete-btn'>Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No customers found</td></tr>";
}

$conn->close();
?>
