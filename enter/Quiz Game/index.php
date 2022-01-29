<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
    session_start();
    include '../../connect.php';

    $IdentificationNumber = $_SESSION['Identification'];
    $PreviousScore = $_SESSION['HighestScore'];

    if(isset($_POST['submit'])){
        $score = $_POST['extract'];
        if($score > $PreviousScore){
             $_SESSION['HighestScore']=$score;
             $conn->query("UPDATE accounts SET HighestScore = $score WHERE ID = $IdentificationNumber");
        }
            header("Location: ../index.html");
    }
?>
    <div class="container">
        <form class="question-1 item">
            <div class="question">
            <h1>In which country is Machu Picchu located?</h1>
            </div>
            <div class="choices">
                <div>
                    <input type="radio" value="A" name="item-1"><label>A. Peru</label>
                </div>
                <div>
                    <input type="radio" value="B" name="item-1"><label>B. Spain</label>
                </div>
                <div>
                    <input type="radio" value="C" name="item-1"><label>C. Brazil</label>
                </div>
                <div>
                    <input type="radio" value="D" name="item-1"><label>D. Singapore</label>
                </div>
            </div>
            <div class="reveal-answer">
                <p>Machu Picchu is located in the Machupicchu District in Peru. A 2007 internet poll rated it as one of the New Seven Wonders of the World</p>
            </div>
            <div class="buttons">
                <input class="submit" type="submit" value="submit">
                <input type="button" value="Next" class="next">
            </div>
        </form>
        <form class="question-2 item">
            <div class="question">
                <h1>What fictional planet is the character Superman from?</h1>
                </div>
                <div class="choices">
                    <div>
                        <input type="radio" value="A" name="item-2"><label>A. Mercury</label>
                    </div>
                    <div>
                        <input type="radio" value="B" name="item-2"><label>B. Krypton</label>
                    </div>
                    <div>
                        <input type="radio" value="C" name="item-2"><label>C. Kryptonia</label>
                    </div>
                    <div>
                        <input type="radio" value="D" name="item-2"><label>D. Pluto</label>
                    </div>
                </div>
                <div class="reveal-answer">
                    <p>Krypton is the home planet of Superman. The planet exploded as a result of unstable geological conditions</p>
                </div>
                <div class="buttons">
                    <input class="submit" type="submit" value="submit">
                    <input type="button" value="Next" class="next">
                </div>
        </form>
        <form class="question-3 item">
            <div class="question">
                <h1>Who is the only U.S. presclassent to serve more than 2 terms?</h1>
                </div>
                <div class="choices">
                    <div>
                        <input type="radio" value="A" name="item-3"><label>A. Abraham Lincon</label>
                    </div>
                    <div>
                        <input type="radio" value="B" name="item-3"><label>B. George Washington</label>
                    </div>
                    <div>
                        <input type="radio" value="C" name="item-3"><label>C. Franklin Roosevelt</label>
                    </div>
                    <div>
                        <input type="radio" value="D" name="item-3"><label>D. Barack Obama</label>
                    </div>
                </div>
                <div class="reveal-answer">
                    <p>Franklin D. Roosevelt served for four terms. He was presclassent from March 4, 1933 until April 12, 1945</p>
                </div>
                <div class="buttons">
                    <input class="submit" type="submit" value="submit">
                    <input type="button" value="Next" class="next">
                </div>
        </form>
        <form class="question-4 item">
            <div class="question">
                <h1>What blood type is known as being "universal" in that it can be transfused to almost any patient?</h1>
                </div>
                <div class="choices">
                    <div>
                        <input type="radio" value="A" name="item-4"><label>A. AB-</label>
                    </div>
                    <div>
                        <input type="radio" value="B" name="item-4"><label>B. AB+</label>
                    </div>
                    <div>
                        <input type="radio" value="C" name="item-4"><label>C. O-</label>
                    </div>
                    <div>
                        <input type="radio" value="D" name="item-4"><label>D. A+</label>
                    </div>       
                </div>
                <div class="reveal-answer">
                    <p>An O negative blood donor can be generally be transfused to any patient. However, whilst all blood types can typically receive O negative blood, it is usually kept for those which O negative blood</p>
                </div>
                <div class="buttons">
                    <input class="submit" type="submit" value="submit">
                    <input type="button" value="Next" class="next">
                </div>
        </form>
        <form class="question-5 item">
            <div class="question">
                <h1>How many hearts does an Octupus have?</h1>
                </div>
                <div class="choices">
                    <div>
                        <input type="radio" value="A" name="item-5"><label>A. 1</label>
                    </div>
                    <div>
                        <input type="radio" value="B" name="item-5"><label>B. 3</label>
                    </div>
                    <div>
                        <input type="radio" value="C" name="item-5"><label>C. 4</label>
                    </div>
                    <div>   
                    <input type="radio" value="C" name="item-5"><label>D. 2</label>
                    </div>
                </div>
                <div class="reveal-answer">
                    <p>An Octupus has three hearts. One heart circulates blood around the body and two others pump blood through each of the gills</p>
                </div>
                <div class="buttons">
                    <input class="submit" type="submit" value="submit">
                    <input type="button" value="Next" class="next">
                </div>
        </form>
        <form action="index.php" method="post" class="item">
            <div class="score">
                    <div class="score-display">
                    <label>Score:</label>
                    <input type="text" name="extract" id="extract">
                    </div>
                    <input id="back" type="submit" value="Back to Menu" name="submit">
            </div>
        </form>
    </div>
</body>
<script src="script.js"></script>
</html>
