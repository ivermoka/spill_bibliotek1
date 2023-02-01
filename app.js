//Drop down menu nav bar
const hamburger = document.querySelector("#hamburger");
const dropdown = document.querySelector("#dropdown");
let expanded = false;

hamburger.addEventListener("click", () => {
  if (!expanded) {
    dropdown.style.display = "flex";
    dropdown.style.transform = `translateY(-${dropdown.offsetHeight}px)`;
    setTimeout(() => {
      dropdown.style.transform = `translateY(0)`;
      dropdown.style.transition = "transform 0.3s ease-in-out";
    }, 1);
    expanded = true;
  } else {
    dropdown.style.transform = `translateY(-${dropdown.offsetHeight}px)`;
    dropdown.style.transition = "transform 0.18s ease-in-out";
    setTimeout(() => {
      dropdown.style.transition = "transform 0.15s ease-in-out";
      dropdown.style.display = "none";
    }, 100);
    expanded = false;
  }
});

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
});
