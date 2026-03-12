<?php
include "config.php";
$query = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD Operation Using PHP & MySQL</title>
</head>
<body>
    <div class="container">
        <h1>User List</h1>
        <a href="add.php" class="">Add User</a>

        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>

            <?php
            $no = 1;
            while ($user = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><a href="edit.php?id=<?= $user['id'] ?>" id="aselect"><?= $user['name'] ?></a></td>
                <td><a href="edit.php?id=<?= $user['id'] ?>" id="aselect"><?= $user['email'] ?></a></td>
                <td><a href="edit.php?id=<?= $user['id'] ?>" id="aselect"><?= $user['phone'] ?></a></td>
                <td><a href="edit.php?id=<?= $user['id'] ?>" id="aselect"><?= $user['address'] ?></a></td>
                <td>
                    <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
                    <a href="action.php?id=<?= $user['id'] ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
    
</body>
</html>