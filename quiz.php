<?php
$scores = []; 

$questions = [
    [
        "question" => "What is our national animal?",
        "options" => ["1. Royal Bengal Tiger", "2. Elephant", "3. Lion"],
        "correct" => 1
    ],
    [
        "question" => "What is our national flower?",
        "options" => ["1. Rose", "2. Water Lily", "3. Sunflower"],
        "correct" => 2
    ],
    [
        "question" => "What is our national fish?",
        "options" => ["1. Carp", "2. Hilsha", "3. Catla"],
        "correct" => 2
    ],
];

function startQuiz(array $questions): int {
    $score = 0;

    foreach ($questions as $index => $q) {
        echo "\n".($index+1).". ".$q["question"]."\n";
        foreach ($q["options"] as $opt) {
            echo $opt."\n";
        }

        $answer = (int)trim(readline("Your Answer (1/2/3): "));

        if ($answer === $q["correct"]) {
            echo "Correct!\n";
            $score++;
        } else {
            echo "Wrong. Correct Answer: ".$q["options"][$q["correct"]-1]."\n";
        }
    }

    return $score;
}

while (true) {
    echo "\nQuiz Application\n";
    echo "1. Start Quiz\n";
    echo "2. View Scores\n";
    echo "3. Exit\n";

    $choice = (int)trim(readline("Choose an option: "));

    if ($choice === 1) {
        $score = startQuiz($questions);
        $scores[] = $score;

        echo "\nYou scored $score out of ".count($questions)."\n";
    } elseif ($choice === 2) {
        if (empty($scores)) {
            echo "No scores yet.\n";
        } else {
            echo "\nPrevious Scores:\n";
            foreach ($scores as $i => $sc) {
                echo "Attempt ".($i+1).": $sc / ".count($questions)."\n";
            }
        }
    } elseif ($choice === 3) {
        echo "Exiting...\n";
        break;
    } else {
        echo "Invalid choice, try again.\n";
    }
}
?>
