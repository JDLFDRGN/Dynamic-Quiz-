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
            <h1>Retrieval Form</h1>
        </header>
        <form action="retrieve.php" method="post">
            <div>
                <label>Enter your username: </label>
                <input required type="text" name="user-name" placeholder="Enter username">
            </div>
            <div>
                <label>Choose your retrieval question:</label>
                    <select name="retrieve-question">
                        <option>What is your favorite quote?</option>
                        <option>Name of your crush?</option>
                        <option>Most influential person of all time for you?</option>
                        <option>Favorite hobby?</option>
                        <option>Most hated food?</option>
                    </select>
            </div>
            <div>
                <label>Enter your retrieval answer:</label>
                <input required type="text" name="retrieve-answer" placeholder="Enter retrieval answer">
            </div>
            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>
<?php
    session_start();
    include '../connect.php';
    $retrievalError=true;
    $selected = $conn->query("SELECT ID, UserName, RetrievalQuestion, RetrievalAnswer, HighestScore FROM accounts");

        if(isset($_POST['submit'])){
            $userName = $_POST['user-name'];
            $retrievalQuestion = $_POST['retrieve-question'];
            $retrievalAnswer = $_POST['retrieve-answer'];
                
            for($i=0;$i<mysqli_num_rows($selected);$i++){
                $transform = $selected->fetch_assoc();
                if($userName==$transform['UserName'] && $retrievalQuestion==$transform['RetrievalQuestion'] && $retrievalAnswer==$transform['RetrievalAnswer']){
                    $_SESSION['Identification']=$transform['ID'];
                    $_SESSION['HighestScore']=$transform['HighestScore'];
                    header('Location:../enter/index.html');
                    $retrievalError=false;
                    break;
                }
            }
            if($retrievalError)echo "<script>alert('Invalid input')</script>";
        }
    ?>