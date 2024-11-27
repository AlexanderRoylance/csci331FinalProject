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
            <h1>Title</h1>
            <div class="nav-right">
                <a id=i2 href=# class="material-icons">leaderboard</a>
                <a id=i3 href=# class="material-icons">settings</a>
            </div>
        </nav>
    </header>

    <!--Create a dropdown menu that is revealed to the user when they click on it-->
    <div class ="dropdown">
        <!--<button onclick="revealDrop()" class="dropbtn">Dropdown</button>-->
        <input type="text" placeholder="Search..." id="myInput" onkeyup="filterFunction()" onfocus="revealDrop()" onblur="revealDrop()">
        <div id="dropdownMenu" class="dropdown-content">
            <a class="skinOption" href="#">temp 1</a>
            <a class="skinOption" href="#">temp 2</a>
            <a class="skinOption" href="#">temp 3</a>
            <a class="skinOption" href="#">temp 4</a>
            <a class="skinOption" href="#">temp 5</a>
        </div>
    </div>

    <div class="board">
        <div class="row">
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
        </div>
        <div class="row">
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
        </div>
        <div class="row">
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
        </div>
        <div class="row">
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
        </div>
        <div class="row">
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
        </div>
        <div class="row">
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
        </div>
    </div>

    <footer>
        <p>Kaden Bach   |   Matthew Parker  |   Alexander Roylance  |   Eric Yeager </p>
    </footer>

</body>
</html>