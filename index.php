<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="quiz-container">
        <h1>QuizoCell!</h1>
        <form action="process.php" method="POST">

            <div class="question">
                <p>1. What is the capital of France?</p>
                <label><input type="radio" name="q1" value="Paris" required> Paris</label>
                <label><input type="radio" name="q1" value="Berlin"> Berlin</label>
            </div>
            <div class="question">
                <p>2. What is 5 + 3?</p>
                <label><input type="radio" name="q2" value="10"> 10</label>
                <label><input type="radio" name="q2" value="8" required> 8</label>
            </div>
            <div class="question">
                <p>3. Which planet is known as the Red Planet?</p>

                <label><input type="radio" name="q3" value="Venus"> Venus</label>
                <label><input type="radio" name="q3" value="Mars" required> Mars</label>
            </div>
            <div class="question">
                <p>4. Who wrote "Romeo and Juliet"?</p>
                <label><input type="radio" name="q4" value="Shakespeare" required> Shakespeare</label>
                <label><input type="radio" name="q4" value="Dickens"> Dickens</label>
            </div>
            <div class="question">
                <p>5. What is the largest mammal?</p>
                <label><input type="radio" name="q5" value="Blue Whale" required> Blue Whale</label>
                <label><input type="radio" name="q5" value="Elephant"> Elephant</label>
            </div>
            <div class="question">
                <p>6. What is the square root of 64?</p>
                <label><input type="radio" name="q6" value="16"> 16</label>
                <label><input type="radio" name="q6" value="8" required> 8</label>
            </div>
            <div class="question">
                <p>7. What is the chemical symbol for water?</p>
                <label><input type="radio" name="q7" value="H2O" required> H2O</label>
                <label><input type="radio" name="q7" value="O2"> O2</label>
            </div>
            <div class="question">
                <p>8. What is the capital of Japan?</p>
                <label><input type="radio" name="q8" value="Kyoto"> Kyoto</label>
                <label><input type="radio" name="q8" value="Tokyo" required> Tokyo</label>
            </div>
            <div class="question">
                <p>9. What is the smallest prime number?</p>
                <label><input type="radio" name="q9" value="2" required> 2</label>
                <label><input type="radio" name="q9" value="3"> 3</label>
            </div>
            <div class="question">
                <p>10. Which ocean is the largest?</p>
                <label><input type="radio" name="q10" value="Atlantic"> Atlantic</label>
                <label><input type="radio" name="q10" value="Pacific" required> Pacific</label>
            </div>
            <button type="submit" name="submit" value="submit" class="submit-button">Submit Quiz</button>
        </form>
    </div>
</body>

</html>