<?php
    $title = "CRAP Principles: Quiz Results";
    $path = "assets/css/styles.css";
    $pageName = "home";
    $heading = "";
    $color = "";
    require_once("assets/inc/header.inc.php");

    require_once("assets/inc/db.php"); 

    $score = 0;
    $total = 0;

    $query = "SELECT id, correct_option FROM questions";
    $result = $conn->query($query);

    $correct_answers = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $correct_answers[$row['id']] = $row['correct_option'];
        }
    } else {
        echo "<p>Error: No questions found in the database.</p>";
    }

    // Calculate the score
    foreach ($correct_answers as $id => $correct_option) {
        if (isset($_POST["question_$id"]) && $_POST["question_$id"] === $correct_option) {
            $score++;
        }
        $total++;
    }
?>

<main>
    <h1>Quiz Results</h1>
    <p>You scored <?= $score ?> out of <?= $total ?>.</p>
</main>

<?php
    require_once("assets/inc/footer.inc.php");
    $conn->close(); // Close the database connection
?>
