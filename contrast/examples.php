<?php
    $title = "CRAP Principles: Contrast Examples";
    $path = "../assets/css/styles.css";
    $heading = "Contrast";
    $pageName = "contrastExamples";
    $color = "#FF3A3A";

    require_once("../assets/inc/header.inc.php");
    require_once("../assets/inc/title.inc.php");
?>

<main>

    <h2>Examples of Contrast</h2>

    <h3>Example 1: Color</h3>
    <p>
        Contrast can be illustrated by comparing text readability against different backgrounds. 
        For example, pastel-colored text placed on a white background often results in low contrast, 
        making it difficult to read and distinguish. In contrast, the same pastel text on a dark 
        background creates high contrast, making it more pronounced and easier to see. This 
        approach enhances legibility and draws attention to the text, especially when used in 
        headings or key content areas. Using a contrast checker tool can help ensure a proper 
        contrast ratio, which is particularly important for accessibility.
    </p>
    <div class="exampleContainer">
        <div class="imgCap">
            <img src="../assets/images/contrast/contrast_bad1" alt="Contrast example: pastel text on light background">
            <p>Poor usage of contrast</p>
        </div>
        <div class="imgCap">
            <img src="../assets/images/contrast/contrast_good1" alt="Contrast example: pastel text on dark background">
            <p>Appropriate usage of contrast</p>
        </div>
    </div>

    <h3>Example 2: Font Size</h3>
    <p>
        Contrast can also be utilized by changing what font sizes are used within a piece of text. 
        It might be challenging to determine which information should be grouped together and which is 
        more significant if all of the text on a page is the same size. Varying the sizes of titles, 
        subtitles, and body text creates a visual hierarchy to direct the user’s attention. This 
        approach not only improves readability, but also helps the user quickly navigate the site.
    </p>
    <div class="exampleContainer">
        <div class="imgCap">
            <img src="../assets/images/contrast/contrast_bad2" alt="Contrast example: text with same font size">
            <p>Poor usage of contrast</p>
        </div>
        <div class="imgCap">
            <img src="../assets/images/contrast/contrast_good2" alt="Contrast example: text with varying font sizes">
            <p>Appropriate usage of contrast</p>
        </div>
    </div>

    <h3>Example 3: Text and Images</h3>
    <p>
        Another effective use of contrast involves placing text over a dark and blurry image. This 
        approach helps direct the user's attention to the text itself, as the darkened background 
        creates a high-contrast effect. The text becomes easier to read and is highlighted prominently 
        against the image, making it an effective tool for banners, headlines, or calls to action. This 
        technique ensures that the message stands out while maintaining visual appeal.
    </p>
    <div class="exampleContainer">
        <div class="imgCap">
            <img src="../assets/images/contrast/contrast_bad3" alt="Contrast example: hard to read text on top of an landscape image">
            <p>Poor usage of contrast</p>
        </div>
        <div class="imgCap">
            <img src="../assets/images/contrast/contrast_good3" alt="Contrast example: easy to read text on a landscape image">
            <p>Appropriate usage of contrast</p>
        </div>
    </div>

    <h2>Sources</h2>
    <ul>
        <li><a href="https://elementor.com/blog/contrast-web-design/" target="_blank">Elementor: Contrast in Web Design</a></li>
        <li><a href="https://elements.envato.com/learn/design-contrast-in-web-design" target="_blank">Envato Elements: Design Contrast</a></li>
        <li><a href="https://www.csun.edu/universal-design-center/web-accessibility-criteria-color-contrast" target="_blank">CSUN: Web Accessibility Criteria</a></li>
    </ul>
</main>

<?php
require_once("../assets/inc/footer.inc.php");
?>
