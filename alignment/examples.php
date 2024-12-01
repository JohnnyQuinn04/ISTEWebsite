<?php
    $title = "CRAP Principles: Alignment Examples";
    $path = "../assets/css/styles.css";
    $heading = "Alignment";
    $pageName = "alignmentExamples";
    $color = "#66E04B";

    require_once("../assets/inc/header.inc.php");
    require_once("../assets/inc/title.inc.php");
?>

<main>
    <h2>Examples of Alignment</h2>

    <h3>Example 1: Text Alignment</h3>
    <p>
        Left-alignment is often preferred for displaying large amounts of text, as it guides the 
        eye naturally down the page and improves readability. However, the number of sentences or 
        the design’s context can alter which alignment looks best. 
    </p>
    <div class="exampleContainer">
        <div class="imgCap">
            <img src="../assets/images/alignment/alignment_bad1" alt="Alignment example: text with center alignment">
            <p>Poor usage of alignment</p>
        </div>
        <div class="imgCap">
            <img src="../assets/images/alignment/alignment_good1" alt="Alignment example: text with left alignment">
            <p>Appropriate usage of alignment</p>
        </div>
    </div>

    <h3>Example 2: Bullet Points</h3>
    <p>
        Misaligned bullet points create visual clutter and make it difficult to distinguish between 
        main and sub-points. Aligning bullet points vertically provides structure and allows the 
        user to understand which information is most important.
    </p>
    <div class="exampleContainer">
        <div class="imgCap">
            <img src="../assets/images/alignment/alignment_bad2" alt="Alignment example: misaligned bullet points">
            <p>Poor usage of alignment</p>
        </div>
        <div class="imgCap">
            <img src="../assets/images/alignment/alignment_good2" alt="Alignment example: aligned bullet points">
            <p>Appropriate usage of alignment</p>
        </div>
    </div>

    <h3>Example 3: Numerical Figures</h3>
    <p>
        For invoices or tables containing numerical information, right alignment is typically used 
        for prices. This ensures that the decimal points are lined up, making the data easier to 
        scan and compare. 
    </p>
    <div class="exampleContainer">
        <div class="imgCap">
            <img src="../assets/images/alignment/alignment_bad3" alt="Alignment example: text with prices that are left aligned">
            <p>Poor usage of alignment</p>
        </div>
        <div class="imgCap">
            <img src="../assets/images/alignment/alignment_good3" alt="Alignment example: text with prices that are right aligned">
            <p>Appropriate usage of alignment</p>
        </div>
    </div>
</main>

<?php
    require_once("../assets/inc/footer.inc.php");
?>
