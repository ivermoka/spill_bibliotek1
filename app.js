//Drop down menu nav bar
const hamburger = document.querySelector("#hamburger");
const dropdown = document.querySelector("#dropdown");

let expanded = false;

hamburger.addEventListener("click", () => {
    if (expanded === false) {
        dropdown.style.display = "flex";
        // hamburger.style.transform = "rotate(90deg)"
        expanded = true;
    } else if (expanded === true) {
        dropdown.style.display = "none";
        // hamburger.style.transform = "rotate(180deg)"
        expanded = false;
    }
}); 

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
});