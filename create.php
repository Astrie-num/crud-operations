 <?php
include 'connection.php';


if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(fname, lname, email, password)
    VALUES('$first_name','$last_name','$email','$password')";

    $result = mysqli_query($conn, $sql);


if($result){
    header('location:read.php');
}
else{
   die(mysqli_error($conn));
  }
}

?>
