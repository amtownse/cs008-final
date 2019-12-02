<?php
include ("top.php");
?>
        <main>
            <section>
                <h2>Mammals</h2>
                <a href="mammals.php">
                <h3>Jerboa</h3>
                <figure>
                    <img srcset=" w,
                                  w" 
                        sizes="(max-width: px) vw"
                        src="images/Jerboa.jpg" alt="A Jerboa">
                    <figcaption>caption</figcaption>
                </figure>
                </a>
                
                <a href="mammals.php">
                <h3>Maned Wolf</h3>
                <figure>
                    <img srcset=" w,
                                  w" 
                        sizes="(max-width: px) vw"
                        src="images/Maned.jpg" alt="A Maned Wolf">
                    <figcaption>caption</figcaption>
                </figure>
                </a>
            </section>
            
            
            <section>
                <h2>Birds</h2>
                <a href="birds.php">
                <h3>Kakapo</h3>
                <figure>
                    <img srcset=" w,
                                  w" 
                        sizes="(max-width: px) vw"
                        src="images/Kakapo.jpg" alt="A Kakapo">
                    <figcaption>caption</figcaption>
                </figure>
                </a>
                
                <a href="birds.php">
                <h3>Oilbird</h3>
                <figure>
                    <img srcset=" w,
                                  w" 
                        sizes="(max-width: px) vw"
                        src="images/Oilbird.jpg" alt="An Oilbird">
                    <figcaption>caption</figcaption>
                </figure>
                </a>
            </section>
            
            
            <section>
                <h2>Fish</h2>
                <a href="fish.php">
                <h3>Gulper Eel</h3>
                <figure>
                    <img srcset=" w,
                                  w" 
                        sizes="(max-width: px) vw"
                        src="images/Gulper.png" alt="A Gulper Eel">
                    <figcaption>caption</figcaption>
                </figure>
                </a>
                
                <a href="fish.php">
                <h3>Red-Lipped Batfish</h3>
                <figure>
                    <img srcset=" w,
                                  w" 
                        sizes="(max-width: px) vw"
                        src="images/Batfish.jpg" alt="A Red-Lipped Batfish">
                    <figcaption>caption</figcaption>
                </figure>
                </a>
            </section>
            
            
            <section>
                <h2>Miscellaneous</h2>
                <a href="misc.php">
                <h3>Mata Mata</h3>
                <figure>
                    <img srcset=" w,
                                  w" 
                        sizes="(max-width: px) vw"
                        src="images/Mata.jpg" alt="A Mata Mata">
                    <figcaption>caption</figcaption>
                </figure>
                </a>
                
                <a href="misc.php">
                <h3>Wallace's Flying Frog</h3>
                <figure>
                    <img srcset=" w,
                                  w" 
                        sizes="(max-width: px) vw"
                        src="images/Frog.jpg" alt="A Wallace's Flying Frog">
                    <figcaption>caption</figcaption>
                </figure>
                </a>
            </section>
            <table>
                <caption>Basic Information</caption>
                <tr>
                    <th>Name</th>
                    <th>Habitat</th>
                    <th>Weight (lbs)</th>
                    <th>Length/Height (m)</th>
                    <th>Lifespan (years)</th>
                </tr>
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
        </main>
        <?php
        include ("footer.php");
        ?>
    </body>
</html>
