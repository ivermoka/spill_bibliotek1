//Drop down menu nav bar
const hamburger = document.querySelector("#hamburger");
const dropdown = document.querySelector("#dropdown");

let expanded = false;

hamburger.addEventListener("click", () => {
    if (expanded === false) {
        dropdown.style.display = "flex";
        dropdown.style.transform =" translateX(0%)"
        expanded = true;
    } else if (expanded === true) {
        dropdown.style.display = "none";
        expanded = false;
    }
}); 