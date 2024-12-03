<?php
    $title = "CRAP Principles: Homepage";
    $path = "assets/css/styles.css";
    // Avoid nav errors with variable names
    $pageName = "quiz";
    $heading = "";
    $color = "";
    require_once("assets/inc/header.inc.php");

    require_once("assets/inc/db.php"); 

    // Fetch questions and options from the database
    $query = "SELECT q.id AS question_id, q.question, q.correct_option, o.option_text, o.option_char
            FROM questions q
            JOIN options o ON q.id = o.question_id
            ORDER BY q.id, o.option_char";

    $result = $conn->query($query);

    $questions = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $questions[$row['question_id']]['question'] = $row['question'];
            $questions[$row['question_id']]['correct_option'] = $row['correct_option'];
            $questions[$row['question_id']]['options'][] = [
                'char' => $row['option_char'],
                'text' => $row['option_text'],
            ];
        }
    } else {
        echo "<p>No questions found in the database.</p>";
    }
?>

<script>
    // javascript form validation
    function validateTheForm(ele) {
        // store what quiz questions have already been checked
        let checked = new Set();
        for (let i = 0, l = ele.length; i < l; i++) {
            let field = ele[i].id;
            if (ele[i].required && ele[i].type === "radio") {
                if (!checked.has(ele[i].name)) {
                    checked.add(ele[i].name);
                    const radio = ele[ele[i].name];
                    let selected = false;
            
                    for (let j = 0, r = radio.length; j < r; j++) {
                        if (radio[j].checked) {
                            selected = true;
                            break;
                        }
                    }
                    if (!selected) {
                        alert('Please select an option for ' + ele[i].name.replace(/_/g, " "));
                        return false;
                    }
                }
            }
        }
        return true;
    }

    function validate(event) {
        let theForm = document.getElementById('quiz');
        event.preventDefault();

        if(validateTheForm(event.target)) {
            theForm.submit();
        }
    }
</script>

<main>
    <h1>CRAP Principles Quiz</h1>

    <?php if (!empty($questions)): ?>
        <form action="quiz_results.php" method="POST" id="quiz" onsubmit="validate(event)" novalidate>
            <?php foreach ($questions as $id => $data): ?>
                <fieldset>
                    <legend><?= htmlspecialchars($data['question']) ?></legend>
                    <?php foreach ($data['options'] as $option): ?>
                        <label>
                            <input type="radio" id= "question_<?= $id ?>" name="question_<?= $id ?>" value="<?= $option['char'] ?>" required>
                            <?= htmlspecialchars($option['text']) ?>
                        </label><br>
                    <?php endforeach; ?>
                </fieldset>
            <?php endforeach; ?>
            <button type="submit">Submit Quiz</button>
        </form>
    <?php else: ?>
        <p>No quiz available at this time. Please try again later.</p>
    <?php endif; ?>

</main>

<?php
require_once("assets/inc/footer.inc.php");
$conn->close(); // Close the database connection
?>
