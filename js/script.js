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

function submitGuess(correct) {
    // Get the current guess that is entered in the search field
    const guessInput = document.getElementById("myInput").value;
    // Very simple correct/incorrect guess logic with placeholder events
    if(correct == guessInput) {
        console.log("correct answer");
    }
    else {
        console.log("incorrect answer");
    }
}