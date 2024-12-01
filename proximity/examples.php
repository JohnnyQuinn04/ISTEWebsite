<?php
    $title = "CRAP Principles: Proximity Examples";
    $path = "../assets/css/styles.css";
    $heading = "Proximity";
    $pageName = "proximityExamples";
    $color = "#60AFFF";

    require_once("../assets/inc/header.inc.php");

    require_once("../assets/inc/title.inc.php");
?>

<main>
    <h2>Examples of Proximity</h2>

    <h3>Example 1: Headlines and Paragraphs</h3>
    <p>
        In text layouts, headlines are often given more space above them than below. This spacing allows 
        the user to understand that the headline belongs to the paragraph that follows it. This design 
        choice helps establish content groupings and improve the flow of information.
    </p>
    <div class="exampleContainer">
        <div class="imgCap">
            <img src="../assets/images/proximity/proximity_bad1" alt="Proximity example: heading and content with a lot of space between them">
            <p>Poor usage of proximity</p>
        </div>
        <div class="imgCap">
            <img src="../assets/images/proximity/proximity_good1" alt="Proximity example: heading and content with minimal between them">
            <p>Appropriate usage of proximity</p>
        </div>
    </div>

    <h3>Example 2: Footers</h3>
    <p>
        Within website footers, proximity can be used to effectively organize information. Contact 
        information is typically grouped together and separate from navigational links. This separation 
        ensures that users are able to quickly find the information they are looking for.
    </p>
    <div class="exampleContainer">
        <div class="imgCap">
            <img src="../assets/images/proximity/proximity_bad2" alt="Proximity example: footer with all information in one column">
            <p>Poor usage of proximity</p>
        </div>
        <div class="imgCap">
            <img src="../assets/images/proximity/proximity_good2" alt="Proximity example: footer with related information split into two columns">
            <p>Appropriate usage of proximity</p>
        </div>
    </div>

    <h3>Example 3: Forms</h3>
    <p>
        In forms, proximity plays an important role in usability. Labels are placed next to their 
        corresponding input fields so that users can easily determine which information belongs where. 
        This design choice reduces confusion and improves user experience.
    </p>
    <div class="exampleContainer">
        <div class="imgCap">
            <img src="../assets/images/proximity/proximity_bad3" alt="Proximity example: form with labels not next to input fields">
            <p>Poor usage of proximity</p>
        </div>
        <div class="imgCap">
            <img src="../assets/images/proximity/proximity_good3" alt="Proximity example: form with labels next to input fields">
            <p>Appropriate usage of proximity</p>
        </div>
    </div>
</main>

<?php
require_once("../assets/inc/footer.inc.php");
?>
