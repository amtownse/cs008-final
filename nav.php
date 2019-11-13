<nav>
    <ul>
        <?php
        print '<li class="';
        if ($path_parts['filename'] == "index") {
            print ' activePage ';
        }
        print '"><a href="index.php">Home</a></li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "fish") {
            print ' activePage ';
        }
        print '"><a href="fish.php">Recycling</a></li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "mammals") {
            print ' activePage ';
        }
        print '"><a href="mammals.php">Renewable</a></li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "birds") {
            print ' activePage ';
        }
        print '"><a href="birds.php">Survey</a></li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "misc") {
            print ' activePage ';
        }
        print '"><a href="misc.php">Contest</a></li>';
        
        print '<li class="';
        if ($path_parts['filename'] == "form") {
            print ' activePage ';
        }
        print '"><a href="form.php">Contest</a></li>';
        ?>
    </ul>
</nav>
