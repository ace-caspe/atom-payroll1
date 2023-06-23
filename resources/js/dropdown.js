const dropdown = document.querySelectorAll(".dropdown");
const searchSelection = document.querySelectorAll(".search-selection");
searchSelection.forEach((item) => {
    let childCount = 0;
    item.addEventListener("keyup", (event) => {
        let input = event.target.value.toUpperCase();
        let dropdown = event.target.nextElementSibling;
        let hasData = false;
        // SECTION  Keyboard navigation
        if (event.keyCode === 40) {
            if (childCount !== dropdown.childElementCount - 2) {
                Array.from(dropdown.children).forEach((item) =>
                    item.classList.remove("selected-odecci-data")
                );

                dropdown.children[childCount].classList.add(
                    "selected-odecci-data"
                );

                event.target.parentElement.previousElementSibling.value =
                    dropdown.children[childCount].innerText;

                if (dropdown.childElementCount - 3 !== childCount) {
                    childCount += 1;
                }
            }
        }
        if (event.keyCode === 38) {
            if (childCount > -1) {
                Array.from(dropdown.children).forEach((item) =>
                    item.classList.remove("selected-odecci-data")
                );
                dropdown.children[childCount].classList.add(
                    "selected-odecci-data"
                );

                event.target.parentElement.previousElementSibling.value =
                    dropdown.children[childCount].innerText;

                if (childCount !== 0) {
                    childCount -= 1;
                }
            }
        }

        // !SECTION end of keyboard navigation
        // SECTION  Searching function
        Array.from(dropdown.children).map((child) => {
            let textVal = child.textContent || child.innerText;
            if (textVal.toUpperCase().indexOf(input) > -1) {
                child.style.display = "";
                hasData = true;
            } else {
                console.log(hasData);
                child.style.display = "none";
                if (child.classList.contains("odecci-new-data")) {
                    child.style.display = "";
                }
            }
        });
        if (!hasData) {
            document
                .querySelectorAll(".odecci-no-data")
                .forEach((item) => (item.style.display = "flex"));
        } else {
            document
                .querySelectorAll(".odecci-no-data")
                .forEach((item) => (item.style.display = "none"));
        }
        // !SECTION  end of searching function
    });
});

const odecciDropdownData = document.querySelectorAll(".odecci-data");
odecciDropdownData.forEach((item) => {
    const input = item.parentElement.parentElement.previousElementSibling;
    item.addEventListener("click", (event) => {
        input.value = event.target.innerText;
    });
});
