<script>
    // Adjust the font size of the main element
    function adjustFontSize(change) {
        const main = document.querySelector('main');
        const currentFontSize = window.getComputedStyle(main).fontSize;
        const newFontSize = parseFloat(currentFontSize) + change;
        // Set a reasonable range for font size
        if (newFontSize >= 10 && newFontSize <= 30) {
            main.style.fontSize = newFontSize + 'px';
        }
    }
</script>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> - ISTE240 CRAP Crusaders @ RIT</p>
            <div class="fontControls">
                <button id="decreaseFont" onclick="adjustFontSize(-1)">A-</button>
                <button id="increaseFont" onclick="adjustFontSize(1)">A+</button>
            </div>
            <a href="/~iste240t06/Final/sources.php" <?php if($pageName=="sources") echo 'id="currentHome"'?>>Sources</a>
        </footer>
    </body>
</html>