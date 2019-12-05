<?php
include ("top.php");
print PHP_EOL;

//boolean to flag if invalid data
$dataValid = false;

//Function for getting data from form submission
function getData($field) {
    if (!isset($_POST[$field])) {
        $data = "";
    } else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}

function verifyAlphaNum($testString) {
    // Check for letters, numbers and dash, period, space and single quote only.
    // added & ; and # as a single quote sanitized with html entities will have 
    return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}
?>
        <?php
            //not sure if i need this
            //print '<p>Post Array:</p><pre>';
            //print_r($_POST);
            //print '</pre>';
            
            //To begin only when submit button is pressed
            if (isset($_POST['btnSubmit'])) {
                $dataValid = true;
                
                //get data from form
                $email = getData("txtEmail");
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
               
                $txtFirstName = getData("txtFirstName");
                $txtLastName = getData("txtLastName");
                $radFavAnimal = getData("radFavAnimal");
                $lstDonation = getData("lstDonation");
                $chkNewsletter = getData("chkNewsletter");
                $chkPermission = getData("chkPermission");
                $chkFollow = getData("chkFollow");
            
            
                //validation for missing or invalid data
                if ($email == "") {
                    print '<p class="mistake">Enter your email address.</p>';
                    $dataValid = false;
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    print '<p class="mistake">Enter a valid email address.</p>';
                    $dataValid = false;
                } elseif (!preg_match("/@/", $email)) {
                    print '<p class="mistake">Enter a valid email address.</p>';
                    $dataValid = false;
                }

                if ($txtFirstName == "") {
                    print '<p class="mistake">Enter your first name.</p>';
                    $dataValid = false;
                } elseif (!verifyAlphaNum($txtFirstName)) {
                    print '<p class="mistake">Enter a valid first name</p>';
                    $dataValid = false;
                }

                if ($txtLastName == "") {
                    print '<p class="mistake">Enter your last name.</p>';
                    $dataValid = false;
                } elseif (!verifyAlphaNum($txtLastName)) {
                    print '<p class="mistake">Enter a valid last name</p>';
                    $dataValid = false;
                }

                if ($lstDonation != '0' AND $lstDonation != '1' AND $lstDonation != '5' AND $lstDonation != '20') {
                    print '<p class="mistake">Choose a donation amount or $0</p>';
                    $dataValid = false;
                }

                if ($radFavAnimal != 'gulper' AND $radFavAnimal != 'jerboa' AND $radFavAnimal != 'kakapo' AND $radFavAnimal != 'maned' AND $radFavAnimal != 'mata' AND $radFavAnimal != 'oilbird' AND $radFavAnimal != 'batfish' AND $radFavAnimal != 'frog') {
                    print '<p class="mistake">Choose a topic</p>';
                    $dataValid = false;
                }

            }
            
            //if everything required is present and valid, insert them into table in database
            if ($dataValid) {
                try {
                    $sql = 'INSERT INTO tblAnimalSurvey (fldFirstName, fldLastName, fldEmail, fldDonation, fldAnimal, fldNewsletter, fldPermission, fldFollow) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
                    $statement = $pdo->prepare($sql);
                    $params = [$txtFirstName, $txtLastName, $email, $lstDonation, $radFavAnimal, $chkNewsletter, $chkPermission, $chkFollow];
                    $statement->execute($params);
                    print '<p>Record Inserted.</p>';
                } catch (PDOException $e) {
                    print '<p>Unable to Insert Record.</p>';
                }
                
                //create the email to be sent upon successful completion of the survey
                $to = $email;
                $from = 'David Melkumov <dmelkumo@uvm.edu>';
                $subject = 'CS 008 Final Project';
                $mailMessage = '<p style="font: 15pt Arial;">Your feedback has been submitted.</p><p>You will not recieve any more emails unless you signed up for our weekly newsletter</p><p>David Melkumov, Alexander Townsend, Vincent Lai</p>';
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=utf-8\r\n";
                $headers .= "From: " . $from . "\r\n";
                
                $mailedSent = mail($to, $subject, $mailMessage, $headers);
                
                if ($mailedSent) {
                    print "<p>Confirmation email sent.</p>";
                }
                
                //notify the user that their response has been submitted
                print '<h2>Thank you for taking the time to fill out our survey</h2>';
                die();
            }
        ?>
        <form action="#" method="POST">
            <!-- Text entry (name and email) -->
            <p>
                <label for="txtFirstName">First Name:</label>
                <input type="text" id="txtFirstName" name="txtFirstName" placeholder="First Name" required>
            </p>
            <p>
                <label for="txtLastName">Last Name:</label>
                <input type="text" id="txtLastName" name="txtLastName" placeholder="Last Name" required>
            </p>
            <p>
                <label for="txtEmail">Email:</label>
                <input type="text" id="txtEmail" name="txtEmail" placeholder="Email Address" required>
            </p>
            
            <!-- Radio buttons for favorite animal -->
            <fieldset>
                <legend>Which animal was your favorite?</legend>
                <p>
                    <input type="radio" name="radFavAnimal" value="gulper" id="radGulper" required>
                    <label for="radGulper">Gulper Eel</label>
                </p>
                <p>
                    <input type="radio" name="radFavAnimal" value="jerboa" id="radJerboa" required>
                    <label for="radJerboa">Jerboa</label>
                </p>
                <p>
                    <input type="radio" name="radFavAnimal" value="kakapo" id="radKakapo" required>
                    <label for="radKakapo">Kakapo</label>
                </p>
                <p>
                    <input type="radio" name="radFavAnimal" value="maned" id="radManed" required>
                    <label for="radManed">Maned Wolf</label>
                </p>
                <p>
                    <input type="radio" name="radFavAnimal" value="mata" id="radMata" required>
                    <label for="radMata">Mata Mata</label>
                </p>
                <p>
                    <input type="radio" name="radFavAnimal" value="oilbird" id="radOilbird" required>
                    <label for="radOilbird">Oilbird</label>
                </p>
                <p>
                    <input type="radio" name="radFavAnimal" value="batfish" id="radBatfish" required>
                    <label for="radBatfish">Red-Lipped Batfish</label>
                </p>
                <p>
                    <input type="radio" name="radFavAnimal" value="frog" id="radFrog" required>
                    <label for="radFrog">Wallace's Flying Frog</label>
                </p>
            </fieldset>
            
            <!-- list to select donation amount -->
            <p>
                How much do you plan on donating to our cause? 
                <select name="lstDonation">
                    <option value="0">$0</option>
                    <option value="1">$1</option>
                    <option value="5">$5</option>
                    <option value="20">$20</option>
                </select>
            </p>
            <p></p>
            
            <!-- Check boxes with extra options -->
            <fieldset>
                <legend>Extra Options</legend>
                <p>
                    <input type="checkbox" value="1" name="chkNewsletter" id="chkNewsletter">
                    <label for="chkNewsletter">I agree to subscribe to the weekly newsletter</label>
                </p>
                <p>
                    <input type="checkbox" value="1" name="chkPermission" id="chkPermission">
                    <label for="chkPermission">I give permission to use my data</label>
                </p>
                <p>
                    <input type="checkbox" value="1" name="chkFollow" id="chkFollow">
                    <label for="chkFollow">I will follow Cool Animals on other social media</label>
                </p>
            </fieldset>
            <p>
                <input type="submit" value="Submit" name="btnSubmit">
            </p>
        </form>
        <?php
        include ("footer.php");
        print PHP_EOL;
        ?>
    </body>
</html>
