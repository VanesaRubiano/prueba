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
    <title>Grupo 2 entregable</title>
</head>
<body>

<form class="form">
        <div class="users-form">
        <p class="title">Register </p>
            <form action="insert_user.php" method="POST">
            <p class="message">Sign up now and get more information about our services. </p>
        <div class="flex">
        <align-items: center; * Centra verticalmente *>
        <label>
                <input class="input" type="text" name="name" placeholder="Name" required="">
              
                </label>
                <label>
                <input class="input" type="text" name="lastname" placeholder="Last Name" required="">
                
        </label>
        </div>         
        <label>
                <input class="input" type="text" name="Phone_number" placeholder="Phone Number" required="">
                
                </label>
        </div>  
        <label>
                <input class="input" type="text" name="email" placeholder="Email" required="">
                
        </label> 
        <label>
                <input class="input" type="password" name="password" placeholder="Password" required="">
               
                </label>

                <button class="submit">Submit</button>
                <p class="sign_in">Already have an acount? <a href="#">Sign_in</a> </p>
            </form>

            
        </div>

        <div class="message2">
            <h2>Users List</h2>
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
                        <th><a class="users-table--edit" href="update.php?id=<?= $row['id']?>">edit</a></th>
                        <th><a class="users-table--delete" href="delete_user.php?id=<?= $row['id'] ?>" >delete</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
</body>
</html>