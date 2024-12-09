<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordle 2.0</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>
    <header>
        <nav>
            <h1><div class="pt1">CS</div>kindle</h1>
        </nav>
    </header>
    <h2>Guess Todays Skin</h2>
    <!--Create a dropdown menu that is revealed to the user when they click on it-->
    <form method="post" id="guessMenu">
        <div id="guessMenu">
            <div id="date">
                <form method="GET" action="">
                    <label for="month">Month:</label>
                    <input type="number" id="month" name="month" min="1" max="12">
                    <label for="day">Day:</label>
                    <input type="number" id="day" name="day" min="1" max="31">
                    <button type="submit">Submit</button>
                </form>
            </div>
            <br>
            <div id="myDropdown" class="dropdown">
                <!--<button onclick="revealDrop()" class="dropbtn">Dropdown</button>-->
                <input type="text" placeholder="Search..." id="myInput" name="myInput" onkeyup="filterFunction()" onfocus="revealDrop()">
                <div id="dropdownMenu" class="dropdown-content">
                    <?php

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $databasename = "cs2_skins";

                        $conn = new mysqli($servername, $username, $password, $databasename);

                        if($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $query = "SELECT * FROM `skins`;";

                        $result = $conn->query($query);
                        
                        // Creates a number based on the day/month to grab a correct answer from
                        // Makes it so all users get the same correct answer
                        $month = isset($_GET['month']) ? intval($_GET['month']) : date('m');
                        $day = isset($_GET['day']) ? intval($_GET['day']) : date('d');
                        $randomNum = getSkinForDate($day, $month);

                        $counter = 0;

                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                // If on the correct index of the correct answer make $correct equal to that skins name
                                if($randomNum == $counter) {
                                    $correct = $row['Name'];
                                    $correctCollection = $row['Collection'];
                                    $correctRelease = $row['Date'];
                                    $correctRarity = $row['Rarity'];
                                    $correctWeapon = $row['Weapon'];
                                    $correctType = $row['Type'];
                                    $correctLow = $row['PriceLow'];
                                    $correctHigh = $row['PriceHigh'];
                                    

                                }
                                $current_name = $row['Name'] . ' (' . $row['Weapon'] . ')';
                                $img = $row['ImgID'] . '.webp';
                                echo "<a class='skinOption' href='#' onClick='updateSearch(\"$current_name\");revealDrop()'><img class='guessImages' src='images_skins/$img'> $current_name</a>";
                                $counter += 1;
                            }
                        }
                    ?>

                </div>
            </div>
            <!--Makes a button that when pressed calls the gameController() function with the correct answer as a parameter-->
            <?php
                if(array_key_exists('makeGuess', $_POST)) {
                    if (!empty($_POST['myInput'])) {
                        $guessName = $_POST['myInput'];
                        submitGuess($correct, $correctCollection, $correctRelease, $correctRarity, $correctWeapon, $correctType, $correctLow, $correctHigh, $guessName);
                    }
                }

                function getSkinForDate($day, $month) {
                    // Create a unique number based on month and day
                    $randomNum = floor(($day + $month) / 100 * 121) - 2;
                    return $randomNum;
                }
            
                function submitGuess($correct, $correctCollection, $correctRelease, $correctRarity, $correctWeapon, $correctType, $correctLow, $correctHigh, $guess)
                {
                    //WHEN PUBLISHING TO YOUR STUDENT WEBSITE FOR THIS SET IT TO YOUR DETAILS
                    $servername = "localhost";
                    $username = "root"; //USERNAME WOULD BE (like user21 for example)
                    $password = ""; //password is associated with username here
                    $databasename = "cs2_skins"; //database also changes here

                    $conn = new mysqli($servername, $username, $password, $databasename);

                    if($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $guessName = substr(strtok($guess, '('), 0, strlen(strtok($guess, '('))-1);
                    $guessWeapon = str_replace(')', '', substr($guess, strpos($guess, '(') + 1));

                    $query2 = "SELECT * FROM `skins` WHERE Name=" . "'" . $guessName . "'" . " AND Weapon=" . "'" . $guessWeapon. "'";

                    $result2 = $conn->query($query2);

                    $guessRow = $result2->fetch_assoc();

                    $guessCollection = $guessRow['Collection'];
                    $guessRelease = $guessRow['Date'];
                    $guessRarity = $guessRow['Rarity'];
                    $guessType = $guessRow['Type'];
                    $guessLow = $guessRow['PriceLow'];
                    $guessHigh = $guessRow['PriceHigh'];

                    echo "<script>gameController(\"$correct\", \"$correctCollection\", \"$correctRelease\", \"$correctRarity\", \"$correctWeapon\", \"$correctType\", \"$correctLow\", \"$correctHigh\", \"$guessName\", \"$guessWeapon\", \"$guessCollection\", \"$guessRelease\", \"$guessRarity\", \"$guessType\", \"$guessLow\", \"$guessHigh\")</script>";
                }
            ?>
            <input type="submit" name="makeGuess" id="makeGuess" value="Submit">
        </form>
    </div>
    <footer>
        <p>Kaden Bach   |   Matthew Parker  |   Alexander Roylance  |   Eric Yeager </p>
    </footer>

</body>
</html>