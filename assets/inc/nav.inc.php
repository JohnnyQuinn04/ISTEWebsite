<!-- nav.inc.php -->
<nav>
    <a href="/~iste240t06/Final/index.php" <?php if($pageName=="home") echo 'id="currentHome"'?>>Home</a>
    <ul class="navbar">
        <!-- Contrast Dropdown -->
        <li class="dropdown">
            <p <?php if($heading=="Contrast") echo 'id="currentDir"';?> style="text-decoration-color: #FF3A3A">Contrast</p>
            <ul class="dropdown-menu">
                <li><a href="/~iste240t06/Final/contrast/content.php" <?php if($pageName=="contrastContent") echo 'id="current"'?>>Content</a></li>
                <li><a href="/~iste240t06/Final/contrast/examples.php" <?php if($pageName=="contrastExamples") echo 'id="current"'?>>Examples</a></li>    
            </ul> 
        </li>
        <!-- Repetition Dropdown -->
        <li class="dropdown">
            <p <?php if($heading=="Repetition") echo 'id="currentDir"';?> style="text-decoration-color: #FFDF3F">Repetition</p>
            <ul class="dropdown-menu">
                <li><a href="/~iste240t06/Final/repetition/content.php" <?php if($pageName=="repetitionContent") echo 'id="current"'?>>Content</a></li>
                <li><a href="/~iste240t06/Final/repetition/examples.php" <?php if($pageName=="repetitionExamples") echo 'id="current"'?>>Examples</a></li>
            </ul>
        </li>
        <!-- Alignment Dropdown -->
        <li class="dropdown">
            <p <?php if($heading=="Alignment") echo 'id="currentDir"';?> style="text-decoration-color: #66E04B">Alignment</p>
            <ul class="dropdown-menu">
                <li><a href="/~iste240t06/Final/alignment/content.php" <?php if($pageName=="alignmentContent") echo 'id="current"'?>>Content</a></li>
                <li><a href="/~iste240t06/Final/alignment/examples.php" <?php if($pageName=="alignmentExamples") echo 'id="current"'?>>Examples</a></li>
            </ul>
        </li>
        <!-- Proximity Dropdown -->
        <li class="dropdown">
            <p <?php if($heading=="Proximity") echo 'id="currentDir"';?> style="text-decoration-color: #60AFFF">Proximity</p>
            <ul class="dropdown-menu">
                <li><a href="/~iste240t06/Final/proximity/content.php" <?php if($pageName=="proximityContent") echo 'id="current"'?>>Content</a></li>
                <li><a href="/~iste240t06/Final/proximity/examples.php" <?php if($pageName=="proximityExamples") echo 'id="current"'?>>Examples</a></li>
            </ul>
        </li>
    </ul>
</nav>
