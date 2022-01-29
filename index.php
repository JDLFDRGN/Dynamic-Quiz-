<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="header-intro">Welcome to the Quiz Game</h1>
            <p>If you already have an account, Just type your username and password</p>
        </header>
        <form action="index.php" method="post" id="login">
                <input required type="text" id="username"  class="login-input" placeholder="Enter your username" name="username">
                <input required type="password" id="password" class="login-input" name="password" placeholder="Enter your password">
                <footer>
                    <div class="merge-password">
                        <input type="checkbox" id="toggle-password">
                        <label>Show password</label>
                    </div>
                    <input type="submit" value="Enter" name="submit">
                    <div class="navigate">
                        <a href="retrieve/retrieve.php">Forgot password?</a>
                        <button id="sign-up">Sign up</button>
                    </div>
                </footer>
        </form>
    </div>
</body>
</html>
<script src="script.js"></script>
<?php
    include 'connect.php';
    session_start();
    $invalidInput = true;

    $selected = $conn->query("SELECT ID, UserName, InputPassword, HighestScore FROM accounts");
    
    if(isset($_POST['submit'])){
        $UN = $_POST['username'];
        $PWD = $_POST['password'];

        for($i=0;$i<mysqli_num_rows($selected);$i++){
            $transform = $selected->fetch_assoc();
            if($UN===$transform['UserName']){
                if($PWD===$transform['InputPassword']){
                $_SESSION['Identification'] = $transform['ID'];
                $_SESSION['HighestScore'] = $transform['HighestScore']; 
                $invalidInput = false;
                header('Location:enter/index.html');
                break;
                }
            }
        }
        if($invalidInput)echo "<script>alert('Invalid Input')</script>";
    }
?>