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

    document.addEventListener(
        "click",
        function submitGuess(event) {
            const guessButton = document.getElementById("makeGuess");

            if(guessButton.contains(event.target)) {
                guessInput = document.getElementById("myInput").value;
                console.log(guessInput);
            }
        }
    )
}