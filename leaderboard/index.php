</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $host = "localhost";
    $username = "root";
    $password = "Judelpogisobra1";
    $databaseName = "quiz";

    $conn = new mysqli($host,$username,$password,$databaseName);
    $selected = $conn->query("SELECT ID, FirstName, LastName,Username ,HighestScore FROM accounts");

?>
    <div class="container">
        <header>
            <h1>Leaderboard:</h1>
        </header>
        <section>
                <table class="table table-dark">
                    <tbody>
                            <tr>
                            <th scope='row'>#</th>
                            <td colspan='2' class='table-active'>First-Name</td>
                            <td>Last-Name</td>
                            <td>User-Name</td>
                            <td>Score</td>
                            </tr>
                        <?php
                            for($i=0;$i<mysqli_num_rows($selected);$i++){
                                $transform = $selected->fetch_assoc();
                                echo "
                                <tr>
                                <th scope='row'>$transform[ID]</th>
                                <td colspan='2' class='table-active'>$transform[FirstName]</td>
                                <td>$transform[LastName]</td>
                                <td>$transform[Username]</td>
                                <td>$transform[HighestScore]</td>
                                </tr>
                                ";
                            }
                        ?>
                        <tr>             
                    </tbody>
                </table>
        </div>
        </div>
        </section>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
