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

function gameController(correct, correctCollection, correctRelease, correctRarity, correctWeapon, correctType, correctLow, correctHigh, guessName, guessWeapon, guessCollection, guessRelease, guessRarity, guessType, guessLow, guessHigh)
    {
        console.log("correct:", correct);
        console.log("your guess:", guessName);

        if(complete == false && win == false)
        {
            if(correct == guessName && correctWeapon == guessWeapon)
                {
                    console.log("correct answer");
                    complete = true;
                    win = true;
                }

            if(correct != guessName && correctWeapon != guessWeapon)
            {
                console.log("incorrect answer");
                guessNum -= 1;
                console.log("guesses:", guessNum);

                if(correctCollection == guessCollection)
                {
                    console.log("hint: collection is the same");
                }

                else
                {
                    console.log("hint: collection is not the same");
                }

                if(correctRelease == guessRelease)
                {
                    console.log("hint: release date is the same");
                }

                else
                {
                    console.log("hint: release date is not the same");
                }

                if(correctRarity == guessRarity)
                {
                    console.log("hint: rarity is the same");
                }

                else
                {
                    console.log("hint: rarity is not the same");
                }

                if(correctType == guessType)
                {
                    console.log("hint: type of weapon is the same");
                }

                else
                {
                    console.log("hint: type of weapon is not the same");
                }

                if(correctLow == guessLow)
                {
                    console.log("hint: the low price is the same");
                }

                else
                {
                    console.log("hint: the low price is not the same");
                }

                if(correctHigh == guessHigh)
                {
                    console.log("hint: the high price is the same");
                }

                else
                {
                    console.log("hint: the high price is not the same");
                }
            }

            if(guessNum == 0)
            {
                console.log("incorrect answer");
                complete = true;
            }
        }

        if(complete == true && win == true)
        {
            console.log("you won");
        }

        if(complete == true && win == false)
        {
            console.log("you lost");
        }
    }