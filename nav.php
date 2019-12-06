<nav>
    <ul>
        <!-- Determine active page based on filename and add all pages to nav -->
        <?php
        print '<li class="';
        if ($path_parts['filename'] == "index") {
            print ' activePage ';
        }
        print '"><a href="index.php">Home</a></li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "birds") {
            print ' activePage ';
        }
        print '"><a href="birds.php">Birds</a></li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "fish") {
            print ' activePage ';
        }
        print '"><a href="fish.php">Fish</a></li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "mammals") {
            print ' activePage ';
        }
        print '"><a href="mammals.php">Mammals</a></li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "misc") {
            print ' activePage ';
        }
        print '"><a href="misc.php">Misc</a></li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "form") {
            print ' activePage ';
        }
        print '"><a href="form.php">Register</a></li>';
        ?>
    </ul>
</nav>
