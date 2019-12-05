<?php
include ("top.php");
?>
         <!-- Mammals Section -->
            <section>
                <h2>Mammals</h2>
                <a href="mammals.php">
                <h3>Jerboa</h3>
                <figure>
                    <img src="images/Jerboa.jpg" alt="A Jerboa">
                    <figcaption>A Jerboa</figcaption>
                </figure>
                </a>
                
                <a href="mammals.php">
                <h3>Maned Wolf</h3>
                <figure>
                    <img src="images/Maned.jpg" alt="A Maned Wolf">
                    <figcaption>A Maned Wolf</figcaption>
                </figure>
                </a>
            </section>
            
            <!-- Birds Section -->
            <section>
                <h2>Birds</h2>
                <a href="birds.php">
                <h3>Kakapo</h3>
                <figure>
                    <img src="images/Kakapo.jpg" alt="A Kakapo">
                    <figcaption>A Kakapo</figcaption>
                </figure>
                </a>
                
                <a href="birds.php">
                <h3>Oilbird</h3>
                <figure>
                    <img src="images/Oilbird.jpg" alt="An Oilbird">
                    <figcaption>An Oilbird</figcaption>
                </figure>
                </a>
            </section>
            
            <!-- Fish Section -->
            <section>
                <h2>Fish</h2>
                <a href="fish.php">
                <h3>Gulper Eel</h3>
                <figure>
                    <img src="images/Gulper.png" alt="A Gulper Eel">
                    <figcaption>A Gulper Eel</figcaption>
                </figure>
                </a>
                
                <a href="fish.php">
                <h3>Red-Lipped Batfish</h3>
                <figure>
                    <img src="images/Batfish.jpg" alt="A Red-Lipped Batfish">
                    <figcaption>A Red-Lipped Batfish</figcaption>
                </figure>
                </a>
            </section>
            
            <!-- Misc Section -->
            <section>
                <h2>Miscellaneous</h2>
                <a href="misc.php">
                <h3>Mata Mata</h3>
                <figure>
                    <img src="images/Mata.jpg" alt="A Mata Mata">
                    <figcaption>A Mata Mata</figcaption>
                </figure>
                </a>
                
                <a href="misc.php">
                <h3>Wallace's Flying Frog</h3>
                <figure>
                    <img src="images/Frog.jpg" alt="A Wallace's Flying Frog">
                    <figcaption>A Wallace's Flying Frog</figcaption>
                </figure>
                </a>
            </section>
            
            <!-- Table with facts about animals read from database -->
            <table>
                <caption>Basic Information</caption>
                <tr>
                    <th>Name</th>
                    <th>Habitat</th>
                    <th>Weight (lbs)</th>
                    <th>Length/Height (m)</th>
                    <th>Lifespan (years)</th>
                </tr>
                <!-- Get the table from database and read out each piece for the rows-->
                <?php
                $sql2 = 'SELECT fldName, fldHabitat, fldWeight, fldLength, fldLifespan FROM `tblAnimalInfo`';
                $statement2 = $pdo->prepare($sql2);
                $statement2->execute();
                $rows = $statement2->fetchAll();
                
                foreach ($rows as $row) {
                    print '<tr>';
                    print '<td>' . $row['fldName'] . '</td>';
                    print '<td>' . $row['fldHabitat'] . '</td>';
                    print '<td>' . $row['fldWeight'] . '</td>';
                    print '<td>' . $row['fldLength'] . '</td>';
                    print '<td>' . $row['fldLifespan'] . '</td>';
                    print '</tr>';
                }
                ?>
                <tr>
                    <td colspan="5" class="center"><a href="">Citation</a></td>
                </tr>
            </table>
        <?php
        include ("footer.php");
        ?>
    </body>
</html>
