<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $goal = $_POST['goal'];

    // Sample workout and meal plans
    $plans = [
        'bulk' => [
            'workout' => 'Heavy weight training focusing on compound exercises.',
            'meal' => 'High-protein, calorie-dense meals. Include chicken, beef, eggs, and rice.'
        ],
        'tone' => [
            'workout' => 'Circuit training, moderate weights with higher reps.',
            'meal' => 'Balanced meals with lean proteins and healthy fats, such as fish, avocados, and vegetables.'
        ],
        'lose' => [
            'workout' => 'Cardio and weight training for fat loss.',
            'meal' => 'Low-calorie meals with lean proteins and lots of vegetables, avoid processed carbs.'
        ]
    ];

    $selectedPlan = $plans[$goal];
} else {
    $selectedPlan = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Plan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Your Personalized Plan</h1>

        <?php if ($selectedPlan): ?>
            <h2>Workout Plan</h2>
            <p><?php echo $selectedPlan['workout']; ?></p>

            <h2>Meal Plan</h2>
            <p><?php echo $selectedPlan['meal']; ?></p>
        <?php else: ?>
            <p>Please choose a goal to generate your plan.</p>
        <?php endif; ?>

        <a href="index.html" class="generate-btn">Back to Home</a>
    </div>
</body>
</html>
