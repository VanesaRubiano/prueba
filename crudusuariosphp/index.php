<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Users Creation</title>
</head>
<body>
        <div class="users-form">
        <p class="title">Users Creation </p>
            <form action="insert_user.php" method="POST">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="lastname" placeholder="lastname">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="Password">
                <input type="email" name="email" placeholder="Email">

                <input type="submit" value="Submit">
               
            </form>

        </div>

        <div class="users-table">
        <p class="title">Registered User </p>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($query)): ?>
                        <tr>
                        <th><?= $row['id']?></th>
                        <th><?= $row['name']?></th>
                        <th><?= $row['lastname']?></th>
                        <th><?= $row['username']?></th>
                        <th><?= $row['password']?></th>
                        <th><?= $row['email']?></th>
                        <th><a class="users-table--edit" href="update.php?id=<?= $row['id']?>">Edit</a></th>
                        <th><a class="users-table--delete" href="delete_user.php?id=<?= $row['id'] ?>" >Delete</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
</body>
</html>