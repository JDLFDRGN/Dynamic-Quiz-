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
            <h1>Sign up</h1>
        </header>
        <form action="index.php" method="post" id="sign-up">
                <input required type="text" name="first-name" placeholder="First name">
                <input required type="text" name="last-name" placeholder="Last name">
            <input required type="text" name="create-username" placeholder="Username">
            <input required type="password" class="input-password" name="create-password" placeholder="Password">
            <input required type="password" class="input-password" name="retype-password" placeholder="Re-type password">
            <div class="reveal">
                <input type="checkbox" id="show-password" name="show-password">
                <label>Show password</label>
            </div>
            <input type="text" id="bank-account" placeholder="Bank-account">
            <input required type="number" min=0 max="200" name="age" placeholder="Age" id="input-age">
            <input type="range" min=0 max=200 value=100 id="slider">
            <div class="retrieve">
                <label >Retrieval Question: </label>
                <select name="retrieval-question">
                    <option>What is your favorite quote?</option>
                    <option>Name of your crush?</option>
                    <option>Most influential person of all time for you?</option>
                    <option>Favorite hobby?</option>
                    <option>Most hated food?</option>
                </select>
            </div>
            <input required type="text" name="retrieval-answer" placeholder="Retrieval answer">
            <input type="submit" value="Register" name="register">
        </form>
    </div>
</body>
<script src="script.js"></script>
</html>
<?php
    session_start();
    include '../connect.php';
    $selected = $conn->query("SELECT ID, HighestScore FROM accounts");
    if(isset($_POST['register'])){
        for($i=0;$i<mysqli_num_rows($selected);$i++){
        $transform = $selected->fetch_assoc();
        }
        $_SESSION['Identification']=$transform['ID']+1;
        $_SESSION['HighestScore']=0;

        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $createUserName = $_POST['create-username'];
        $createPassword = $_POST['create-password'];
        $retypePassword = $_POST['retype-password'];
        $insertAge = $_POST['age'];
        $retrievalQuestion = $_POST['retrieval-question'];
        $retrievalAnswer = $_POST['retrieval-answer'];

        $check = $conn->query("INSERT INTO accounts(FirstName,LastName,Username,InputPassword,Age,RetrievalQuestion,RetrievalAnswer)
        VALUES('$firstName','$lastName','$createUserName','$createPassword','$insertAge','$retrievalQuestion','$retrievalAnswer');
        ");
        header('Location:../enter/index.html');
    }
?>