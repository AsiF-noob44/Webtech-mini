<?php
$score = 0;
$totalQuestions = 0;
$percentage = 0;

if (isset($_POST['submit'])) {
    $correctAnswers = [
        'q1' => 'Paris',
        'q2' => '8',
        'q3' => 'Mars',
        'q4' => 'Shakespeare',
        'q5' => 'Blue Whale',
        'q6' => '8',
        'q7' => 'H2O',
        'q8' => 'Tokyo',
        'q9' => '2',
        'q10' => 'Pacific'
    ];

    $score = 0;
    $userAnswers = [];

    foreach ($correctAnswers as $question => $correctAnswer) {
        if (isset($_POST[$question])) {
            $userAnswers[$question] = $_POST[$question];
            if ($_POST[$question] === $correctAnswer) {
                $score++;
            }
        } else {
            $userAnswers[$question] = null;
        }
    }

    $totalQuestions = count($correctAnswers);
    $percentage = ($score / $totalQuestions) * 100;

    $fileName = "submitted_answers.json";
    $existingSubmissions = [];

    if (file_exists($fileName)) {
        $jsonData = file_get_contents($fileName);
        $existingSubmissions = json_decode($jsonData, true) ?? [];
    }

    $existingSubmissions[] = [
        'userAnswers' => $userAnswers,
        'score' => $score,
        'percentage' => number_format($percentage, 2),
        'timestamp' => date('Y-m-d H:i:s')
    ];

    file_put_contents($fileName, json_encode($existingSubmissions, JSON_PRETTY_PRINT));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="quiz-container">
        <h1>Quiz Results</h1>
        <p>You scored <strong><?php echo $score; ?></strong> out of <strong><?php echo $totalQuestions; ?></strong>.</p>
        <p>Your percentage is <strong><?php echo number_format($percentage, 2); ?>%</strong>.</p>

        <?php if ($percentage >= 50): ?>
            <p class="success">Congratulations! You passed the quiz!</p>
        <?php else: ?>
            <p class="failure">Better luck next time!</p>
        <?php endif; ?>

        <a href="index.php" class="submit-button">Try Again</a>
    </div>
</body>

</html>