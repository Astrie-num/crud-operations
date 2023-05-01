<?php
include 'connection.php';

$user_id = $_GET['updateid'];
$sql = "SELECT * FROM `users` WHERE user_id='$user_id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$password = $row['password'];


if(isset($_POST['submit'])){
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "UPDATE `users` SET  user_id='$user_id', fname='$fname', lname='$lname',email='$email',password='$password' WHERE user_id='$user_id'";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:read.php');
    }
    else{
        die(mysqli_error($conn));
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">                                                  
</head>
<body>

    <h2>SIGNUP FORM </h2>

    <div class="container mx-auto">
    <form action="update.php?updateid=<?php echo $user_id ?>" method="POST">
        <fieldset>
            <legend><small> Personal Information</small></legend>

            <label for="fname">First Name:</label>
            <br>
            <input type="text" name="fname" autocomplete="off" value="<?php echo $fname ?>"/>
            <br><br>
            <label for="lname">Last Name:</label>
            <br>
            <input type="text" name="lname" autocomplete="off" value="<?php echo $lname ?>"/>

            <br><br>
            <label for="email">Email:</label>
            <br>
            <input type="email" name="email" autocomplete="off" value="<?php echo $email ?>"/>
            <br><br>

            <label for="password">Password:</label>
            <br>
            <input type="password" name="password" autocomplete="off" value="<?php echo $password ?>"/>
            <br><br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            <br><br>
        </fieldset>
    </form>
    </div>
</body>
</html>