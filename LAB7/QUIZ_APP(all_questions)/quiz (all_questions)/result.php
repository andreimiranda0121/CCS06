<?php

require "vendor/autoload.php";

session_start();

// 4.

use App\QuestionManager;

$score = null;
try {
    $manager = new QuestionManager;
    $manager->initialize();

    if (!isset($_SESSION['answers'])) {
        throw new Exception('Missing answers');
    }
    
    //Iloop mo lang lahat ng sagot mo each number sa session para masaya
    for ($number = 1; $number <= $manager->getQuestionSize(); $number++) {
        $_SESSION['answers'][$number] = $_POST[$number.'_answer'];
    }

    $score = $manager->computeScore($_SESSION['answers']);
    
    //Nagdagdag ako function sa src\QuestionManager.php tas call ko dito
    $results = $manager->results($_SESSION['answers']);

} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
</head>
<body>

<h1>Thank You!</h1>

<p style="color: gray;">
    Congratulations <?php echo $_SESSION['user_complete_name'];?> (<?php echo $_SESSION['user_email'];?>)
</p>

<h3> Score: <?php echo $score; ?> out of <?php echo $manager->getQuestionSize() ;?></h3>


<h3>Your Answers</h3>
    <?php 
        // eto yung return dun nacall dun sa QuestionManager.php sa result function
        foreach ($results as $number => $answers) {
            if($answers[1] == 1){
                echo "<li>".$answers[0]." (correct)</li>";
            }else{
                echo "<li>".$answers[0]." (incorrect)</li>";
            }
        }
    ?>

<!-- eto yung sa download.php -->
<a href="download.php">Click here to download the results.</a>

</body>
</html>

<!-- DEBUG MODE -->
<pre>
<?php
var_dump($_SESSION);
?>
</pre>