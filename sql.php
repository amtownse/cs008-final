<?php
include("top.php");
print PHP_EOL;
?>
    <h2>Info Table Creation</h2>
    <code>
        CREATE TABLE tblAnimalInfo (
            pmkEntryId INT AUTO_INCREMENT PRIMARY KEY,
            fldName VARCHAR(25),
            fldHabitat VARCHAR(50),
            fldWeight FLOAT,
            fldLength FLOAT,
            fldLifespan FLOAT
        )
    </code>
    
    <h2>Info Table Data Insertion</h2>
    <code>
        INSERT INTO tblAnimalInfo (fldName, fldHabitat, fldWeight, fldLength, fldLifespan) VALUES
        ('Gulper Eel', 'Aquatic', 20, 1.61, 60),
        ('Jerboa', 'Terrestrial', 0.125, 0.1, 3),
        ('Kakapo', 'Terrestrial', 6.6, 0.64, 95),
        ('Maned Wolf', 'Terrestrial', 47, 1.25, 15),
        ('Mata Mata', 'Terrestrial', 33, 0.45, 75),
        ('Oilbird', 'Terrestrial', 0.9, 0.3, 25),
        ('Red-Lipped Batfish', 'Aquatic', 0, 0.2, 12),
        ("Wallace's Flying Frog", 'Terrestrial', 0, 0.1, 5);
    </code>

    <h2>Info Table Data Retrieval</h2>
    <code>SELECT fldName, fldHabitat, fldWeight, fldlength, fldLifespan FROM `tblAnimalInfo`</code>
    
    <h2>Survey Table Creation</h2>
    <code>
        CREATE TABLE tblAnimalSurvey (
            pmkSurveyId INT AUTO_INCREMENT PRIMARY KEY,
            fldFirstName VARCHAR(30),
            fldLastName VARCHAR(30),
            fldEmail VARCHAR(50),
            fldDonation  INTEGER,
            fldAnimal VARCHAR(20),
            fldNewsletter BOOLEAN,
            fldPermission BOOLEAN,
            fldFollow BOOLEAN
        )
    </code>
    
    <h2>Survey Table Data Insertion</h2>
    <code>
        INSERT INTO tblAnimalSurvey (fldFirstName, fldLastName, fldEmail, fldDonation, fldAnimal, fldNewsletter, fldPermission, fldFollow) VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    </code>
    <?php
    include("footer.php");
    ?>
</body>
