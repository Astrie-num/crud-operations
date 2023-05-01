
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


    <form action="create.php" method="POST">

        <fieldset>

            <legend><small> Personal Information</small></legend>

            <label for="fname">First Name:</label>
            <br>
            <input type="text" name="firstname" autocomplete="off"/>
            <br><br>
            <label for="lname">Last Name:</label>
            <br>
            <input type="text" name="lastname" autocomplete="off"/>

            <br><br>
            <label for="email">Email:</label>
            <br>
            <input type="email" name="email" autocomplete="off"/>
            <br><br>

            <label for="password">Password:</label>
            <br>
            <input type="password" name="password" autocomplete="off"/>
            <br><br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <br><br>
        </fieldset>
    </form>
</body>
</html>