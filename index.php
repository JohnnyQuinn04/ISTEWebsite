<?php
    $title = "CRAP Principles: Homepage";
    $path = "assets/css/styles.css";
    // Avoid nav errors with variable names
    $pageName = "home";
    $heading = "";
    $color = "";
    require_once("assets/inc/header.inc.php");

?>
<div class="title">
    <i class="fa-solid fa-star" style="left: 13%; top: 30px;" onclick="this.classList.toggle('fa-spin')"></i>
    <i class="fa-solid fa-star" style="left: 5%; top: 100px;" onclick="this.classList.toggle('fa-spin')"></i>
    <i class="fa-solid fa-star hide" style="left: 23%; top: 70px" onclick="this.classList.toggle('fa-spin')"></i>
    <i class="fa-regular fa-circle" style="left: 30%; top: 20px;" onclick="this.classList.toggle('fa-beat')"></i>
    <i class="fa-regular fa-circle" style="left: 16%; top: 140px" onclick="this.classList.toggle('fa-beat')"></i>
    <div class="homepage">
        <a href="contrast/content.php" style="color: #FF3A3A;">C</a>
        <a href="repetition/content.php" style="color: #FFDF3F;">R</a>
        <a href="alignment/content.php" style="color: #66E04B;">A</a>
        <a href="proximity/content.php" style="color: #60AFFF;">P</a>
    </div>
    <i class="fa-solid fa-star" style="right: 13%; top: 30px;" onclick="this.classList.toggle('fa-spin')"></i>
    <i class="fa-solid fa-star" style="right: 5%; top: 100px;" onclick="this.classList.toggle('fa-spin')"></i>
    <i class="fa-solid fa-star hide" style="right: 23%; top: 70px" onclick="this.classList.toggle('fa-spin')"></i>
    <i class="fa-regular fa-circle" style="right: 30%; top: 20px;" onclick="this.classList.toggle('fa-beat')"></i>
    <i class="fa-regular fa-circle" style="right: 16%; top: 140px" onclick="this.classList.toggle('fa-beat')"></i>
</div>

<main>
    <h1>Welcome to the CRAP Principles Guide</h1>
    <p>The CRAP principles — Contrast, Repetition, Alignment, and Proximity — form the foundation of effective visual design. These principles ensure that your designs are engaging, readable, and user-friendly.</p>
    <p>Explore the four principles to learn more about why they are essential and see practical examples:</p>
    

    <h2>Test Your Knowledge</h2>
    <p>Once you've explored each principle, try our <a href="/~iste240t06/Final/quiz.php">interactive quiz</a> to test your understanding!</p>
</main>

<!-- Include Footer -->
<?php require_once("assets/inc/footer.inc.php"); ?>
