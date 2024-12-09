function revealDrop() {
    document.getElementById("dropdownMenu").classList.toggle("show");
}

function filterFunction() {
    var input, filter, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("dropdownMenu");
    a = div.getElementsByClassName("skinOption");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}


function updateSearch(name) {
    search = document.getElementById("myInput");
    search.value = name;
}

document.addEventListener("DOMContentLoaded", listenForClicks);

function listenForClicks() {
    document.addEventListener(
        "click", 
        function removeDropDown(event) {
            const dropdown = document.getElementById("myDropdown");
            const menu = document.getElementById("dropdownMenu");

            if(!dropdown.contains(event.target)) {
                console.log(menu.style.display);
                menu.classList.toggle("show", false);
            }
        }
    )
}


//these are set outside of the game controller so that they can be changed when the button is pressed

var complete = false; //whether or not the game is done
var guessNum = 6; //number of initial guesses
var win = false; //whether the player has won or not

// Function to display the game result
function displayMessage(message, type = "info") {
    const outputSection = document.getElementById("outputSection");

    // Create a new div for the message
    const messageDiv = document.createElement("div");
    messageDiv.classList.add("message", type);
    messageDiv.textContent = message;

    // Append the new message div to the output section
    outputSection.appendChild(messageDiv);

    // Optionally scroll to the new message
    outputSection.scrollTop = outputSection.scrollHeight;
}

function gameController(correct, correctCollection, correctRelease, correctRarity, correctWeapon, correctType, correctLow, correctHigh, guessName, guessWeapon, guessCollection, guessRelease, guessRarity, guessType, guessLow, guessHigh) {
    console.log("correct:", correct);
    console.log("your guess:", guessName);

    if (complete == false && win == false) {
        if (correct == guessName && correctWeapon == guessWeapon) {
            displayMessage("Correct! You guessed the skin right.", "success");
            complete = true;
            win = true;
        }

        if (correct != guessName || correctWeapon != guessWeapon) {
            displayMessage("Incorrect guess. Try again!", "error");
            guessNum -= 1;
            displayMessage("Guesses left: " + guessNum, "info");

            if (correctCollection == guessCollection) {
                displayMessage("Hint: The collection is the same.", "hint");
            } else {
                displayMessage("Hint: The collection is not the same.", "hint");
            }

            if (correctRelease == guessRelease) {
                displayMessage("Hint: The release date is the same.", "hint");
            } else {
                displayMessage("Hint: The release date is not the same.", "hint");
            }

            if (correctRarity == guessRarity) {
                displayMessage("Hint: The rarity is the same.", "hint");
            } else {
                displayMessage("Hint: The rarity is not the same.", "hint");
            }

            if (correctType == guessType) {
                displayMessage("Hint: The type of weapon is the same.", "hint");
            } else {
                displayMessage("Hint: The type of weapon is not the same.", "hint");
            }

            if (correctLow == guessLow) {
                displayMessage("Hint: The low price is the same.", "hint");
            } else {
                displayMessage("Hint: The low price is not the same.", "hint");
            }

            if (correctHigh == guessHigh) {
                displayMessage("Hint: The high price is the same.", "hint");
            } else {
                displayMessage("Hint: The high price is not the same.", "hint");
            }
        }

        if (guessNum == 0) {
            displayMessage("Out of guesses! You lost.", "error");
            complete = true;
        }
    }

    if (complete == true && win == true) {
        displayMessage("Congratulations! You've won.", "success");
    }

    if (complete == true && win == false) {
        displayMessage("Sorry, you lost. Better luck next time!", "error");
    }
}

