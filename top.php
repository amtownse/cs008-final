<?php
$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

//in order to get filename
$path_parts = pathinfo($phpSelf);

//connect to database
$databaseName = 'DMELKUMO_cs008-final';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$dbUserName = "dmelkumo_writer"; 
$dbPassword = "9IiBXyRItyTwNAcR";

print '<!-- Make Connection for DataBase -->';
$pdo = new PDO($dsn, $dbUserName, $dbPassword);
?>
<!DOCTYPE html>
<html lang="en">
    <!-- Determine the title based on filename -->
    <?php
    if ($path_parts['filename'] == "index") {
        print '<title>Exotic Animal Gallery</title>';
    }
    if ($path_parts['filename'] == "fish") {
        print '<title>Cool Fish</title>';
    }
    if ($path_parts['filename'] == "mammals") {
        print '<title>Cool Mammals</title>';
    }
    if ($path_parts['filename'] == "birds") {
        print '<title>Bird is the Word</title>';
    }
    if ($path_parts['filename'] == "misc") {
        print '<title>Miscellaneous</title>';
    }
    if ($path_parts['filename'] == "form") {
        print '<title>Registration</title>';
    }
    ?>
    <meta charset="UTF-8">
    <meta name="author" content="David Melkumov, Alexander Townsend, Vincent Lai">
    <!-- determine description based on filename -->
    <?php
    print '<meta name="description" content="';
    if ($path_parts['filename'] == "index") {
        print 'A gallery of several interesting animals">';
    }
    if ($path_parts['filename'] == "fish") {
        print 'A description of two specifc fish species">';
    }
    if ($path_parts['filename'] == "mammals") {
        print 'A description of two specifc mammal species">';
    }
    if ($path_parts['filename'] == "birds") {
        print 'A description of two specifc bird species">';
    }
    if ($path_parts['filename'] == "misc") {
        print 'A description of two nonrelated yet interesting species">';
    }
    if ($path_parts['filename'] == "form") {
        print 'A registration form for our weekly emails">';
    }
    if ($path_parts['filename'] == "sql") {
        print 'The sql statements used in this assignment">';
    }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css?version=1.0" type="text/css">
    <!-- Give the body an id based on filename to make page specific css adjustments -->
    <?php
    print '<body id="' . $path_parts['filename'] . '">' . PHP_EOL;
    
    include("nav.php");
    print PHP_EOL;
    
    include ("header.php");
    print PHP_EOL;
    ?>
