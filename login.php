<?php
require 'Auth.php';
require 'Database.php';


$db = (new Database())->connect();
$auth = new Auth($db);

if(!$auth->check()){
    header("Location: home.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="card">
        <h2>Welcome!</h2>
        <form>
            <input type="text" placeholder="Enter your name" class="input-field">
            <button type="button" onclick="goToLogin()">Logout!</button>
        </form>
    </div>
    <script>
        function goToLogin() {
            window.location.href = "home.php"; 
        }
    </script>
</body>
</html>