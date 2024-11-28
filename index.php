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

                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $current_name = $row['Name'];
                            $img = $row['ImgID'] . '.webp';
                            echo "<a class='skinOption' href='#' onClick='updateSearch(\"$current_name\");revealDrop()'><img class='guessImages' src='images_skins/$img'> $current_name</a>";
                        }
                    }

                ?>

            </div>
        </div>
        <button id="makeGuess">Guess</button>
    </div>
    <footer>
        <p>Kaden Bach   |   Matthew Parker  |   Alexander Roylance  |   Eric Yeager </p>
    </footer>

</body>
</html>