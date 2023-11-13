<!-- Registration Form -->
<?php
    include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome to InstaKilo</h2>
        <label>Username: </label><br>
        <input type="text" name="user"><br>
        <label>Password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" name='submit' value="Register">
        <br>
    </form>
    
</body>
</html>

<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = $_POST['user'];
        $password = $_POST['password'];
        if(empty($username)){
            echo "Enter username<br>";
        }
        elseif(empty($password)){
            echo 'password cannot be empty<br>';
        }
        else{
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO users (name, password) VALUES ('$username', '$hash')";
            try{
                mysqli_query($connection, $query);
                echo 'User registered successfully...';
    
            }
            catch(mysqli_sql_exception){
                echo 'username is already taken, try another...';
            }
        }
    }
    mysqli_close($connection);
?>