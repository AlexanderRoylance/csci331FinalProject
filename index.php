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
        <div id="myDropdown" class="dropdown">
            <!--<button onclick="revealDrop()" class="dropbtn">Dropdown</button>-->
            <input type="text" placeholder="Search..." id="myInput" onkeyup="filterFunction()" onfocus="revealDrop()">
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
                    $randomNum = floor((date('d') + date('m'))/100 * 121) - 2;

                    $counter = 0;

                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            // If on the correct index of the correct answer make $correct equal to that skins name
                            if($randomNum == $counter) {
                                $correct = $row['Name'] . ' (' . $row['Weapon'] . ')';
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
        <!--Makes a button that when pressed calls the submitGuess() function with the correct answer as a parameter-->
        <?php
            echo "<button id='makeGuess' onclick='submitGuess(\"$correct\")'>Guess</button>";
        ?>
    </div>
    <footer>
        <p>Kaden Bach   |   Matthew Parker  |   Alexander Roylance  |   Eric Yeager </p>
    </footer>

</body>
</html>