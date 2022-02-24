
<?php
$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];
$ans3 = $_POST['ans3'];
$ans4 = $_POST['ans4'];
$correct = 0;
if (!empty($_POST)) {
    if ($ans1 == 9) {
        $correct++;
    } else {
        echo "You need to practice Addition. ";
    }
    if ($ans2 == 15) {
        $correct++;
    } else {
        echo "You need to practice Subtraction. ";
    }
    if ($ans3 == 20) {
        $correct++;
    } else {
        echo "You need to practice Multiplication. ";
    }
    if ($ans4 == 8) {
        $correct++;
    } else {
        echo "You need to practice Division.";
    }
    echo "<h2>You got $correct corret!</h2>";
    $grade = ($correct / 4) * 100;
    if ($correct == 0) {
        echo "<h1>You are dumb</h1>";
    } elseif ($correct == 1) {
        echo "<h1>You need to practice more and more</h1>";
        
    } elseif ($correct == 2) {
        echo "<h1>You need to practice more</h1>";
        
    } elseif ($correct == 3) {
        echo "<h1>You have done Better</h1>";
        
    } else {
        echo "<h1>Great Job! </h1>";
        
    }
} else {
    echo "<h1>Please, Complete the Quiz.</h1>";
}
