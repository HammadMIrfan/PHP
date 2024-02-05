<?php
session_start();

// agar user login hy tw welcome pr jaega otherwise login pr hi rahayga
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

// username check karega
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
//    check condition
    if($_POST["username"] == "user" && $_POST["password"] == "password"){
        
        // Store session data.........
        $_SESSION["loggedin"] = true;
        
        // Redirect to welcome page.................
        header("location: welcome.php");
    } else{
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label>Username</label>
            <input type="text" name="username">
        </div>    
        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</body>
</html>
