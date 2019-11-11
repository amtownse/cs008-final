<header>
    <h1>
    <?php
    if ($path_parts['filename'] == "index") {
        print 'Gallery';
    }
    if ($path_parts['filename'] == "fish") {
        print 'Fish';
    }
    if ($path_parts['filename'] == "mammals") {
        print 'Mammals';
    }
    if ($path_parts['filename'] == "birds") {
        print 'Birds';
    }
    if ($path_parts['filename'] == "misc") {
        print 'Miscellaneous Animals';
    }
    if ($path_parts['filename'] == "form") {
        print 'Registration';
    }
    ?>
    </h1>
</header>
