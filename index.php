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
            <div class="nav-left">
                <a id=i1 href=# class="material-icons">menu</a>
            </div>
            <h1><div class="pt1">CS</div>kindle</h1>
            <div class="nav-right">
                <a id=i2 href=# class="material-icons">leaderboard</a>
                <a id=i3 href=# class="material-icons">settings</a>
            </div>
        </nav>
    </header>
    <h2>Guess Todays Skin</h2>
    
    
    <!--Create a dropdown menu that is revealed to the user when they click on it-->
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
        <div id="myDropdown" class="dropdown">
            <!--<button onclick="revealDrop()" class="dropbtn">Dropdown</button>-->
            <input type="text" placeholder="Search..." id="myInput" name="myInput" onkeyup="filterFunction()" onfocus="revealDrop()">
            <div id="dropdownMenu" class="dropdown-content">

                <?php

                    function getSkinForDate($month, $day) {
                        // Create a unique number based on month and day
                        $randomNum = floor(($day + $month) / 100 * 121) - 2;
                        return $randomNum;
                    }
                            
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $databasename = "cs2_skins";

                    $conn = new mysqli($servername, $username, $password, $databasename);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $query = "SELECT * FROM `skins`;";
                    $result = $conn->query($query);
                    // Get month and day from URL or default to today's values
                    $month = isset($_GET['month']) ? intval($_GET['month']) : date('m');
                    $day = isset($_GET['day']) ? intval($_GET['day']) : date('d');

                    // Fetch the correct skin
                    $correctSkin = getSkinForDate($month, $day);

                    $counter = 0;

                    $correctSkin = null;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($randomNum == $counter) {
                                $correct = $correctSkin['Name'];
                                $correctCollection = $correctSkin['Collection'];
                                $correctRelease = $correctSkin['Date'];
                                $correctRarity = $correctSkin['Rarity'];
                                $correctWeapon = $correctSkin['Weapon'];
                                $correctType = $correctSkin['Type'];
                                $correctLow = $correctSkin['PriceLow'];
                                $correctHigh = $correctSkin['PriceHigh'];
                            }
                            $current_name = $row['Name'] . ' (' . $row['Weapon'] . ')';
                            $img = $row['ImgID'] . '.webp';
                            echo "<a class='skinOption' href='#' onClick='updateSearch(\"$current_name\");revealDrop()'><img class='guessImages' src='images_skins/$img'> $current_name</a>";
                            $counter++;
                        }
                    }
                    submitGuess($correct, $correctCollection, $correctRelease, $correctRarity, $correctWeapon, $correctType, $correctLow, $correctHigh);
                ?>

            </div>
        </div>   
    

        <!--Makes a button that when pressed calls the gameController() function with the correct answer as a parameter-->
        <?php

            echo "<button id='makeGuess' onclick='submitGuess(\"$correct\", \"$correctCollection\", \"$correctRelease\", \"$correctRarity\", \"$correctWeapon\", \"$correctType\", \"$correctLow\", \"$correctHigh\")'>Guess</button>";
            function submitGuess($correct, $correctCollection, $correctRelease, $correctRarity, $correctWeapon, $correctType, $correctLow, $correctHigh)
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $databasename = "cs2_skins";

                $conn = new mysqli($servername, $username, $password, $databasename);

                if($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                if(isset($_GET["myInput"]))
                {
                    $guess = $_GET["myInput"];

                    $guessName = str_replace(' ', ' ', strtok($guess, ' '));
                    $guessWeapon = str_replace(' ', ' ', substr($guess, strpos($guess, ' ') + 1));

                    $query2 = "SELECT * FROM `skins` WHERE Name='$guessName' AND Weapon='$guessWeapon';";

                    $result2 = $conn->query($query2);

                    $guessRow = $result2->fetch_assoc();

                    $guessCollection = $guessRow['Collection'];
                    $guessRelease = $guessRow['Date'];
                    $guessRarity = $guessRow['Rarity'];
                    $guessType = $guessRow['Type'];
                    $guessLow = $guessRow['PriceLow'];
                    $guessHigh = $guessRow['PriceHigh'];
                }

                else
                {
                    $guess = '';
                    $guessName = '';
                    $guessWeapon = '';
                    $guessCollection = '';
                    $guessRelease = '';
                    $guessRarity = '';
                    $guessType = '';
                    $guessLow = '';
                    $guessHigh = '';
                }

                gameController($correct, $correctCollection, $correctRelease, $correctRarity, $correctWeapon, $correctType, $correctLow, $correctHigh, $guessName, $guessWeapon, $guessCollection, $guessRelease, $guessRarity, $guessType, $guessLow, $guessHigh);
            }
        ?>
    </div>
    <footer>
        <p>Kaden Bach   |   Matthew Parker  |   Alexander Roylance  |   Eric Yeager </p>
    </footer>

</body>
</html>