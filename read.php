<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE USER</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
        <a href="signUp.php" class="btn btn-primary my-5 text-light">Add User</a>
        <table class="table table-sm table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = 'SELECT * FROM `users`';
                $result = mysqli_query($conn, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $user_id= $row['user_id'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                        echo '<tr>
                        <th scope="row">'.$user_id.'</th>
                        <td>'.$fname.'</td>
                        <td>'.$lname.'</td>
                        <td>'.$email.'</td>
                        <td>'.$hashedPassword.'</td>
                        <td>
                           <a href="update.php?updateid='.$user_id.'" class="btn btn-primary">Update</a>
                           <a href="delete.php?deleteid='.$user_id.'" class="btn btn-danger" >Delete</a>
                        </td>
                        </tr>';
                    }
                }
            ?>
            
            </tbody>
        </table>
    </div>
</body>
</html>





