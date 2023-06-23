import "./bootstrap";
import "./dropdown";

const birthdate = document.querySelector("#birthdate");
birthdate.addEventListener("click", () => {
    birthdate.type = "date";
});
