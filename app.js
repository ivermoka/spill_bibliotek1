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

const buttonPlaystation = document.querySelector("#playstation");
const dropdownPlaystation = document.querySelector("#dropdownPlaystation");
let expandedPlaystation = false;

buttonPlaystation.addEventListener("click", () => {
  if (!expandedPlaystation) {
    dropdownPlaystation.style.display = "flex";
    buttonPlaystation.style.padding = "16px";
    expandedPlaystation = true;
  } else {
    dropdownPlaystation.style.display = "none";
    expandedPlaystation = false;
  }
});

buttonPlaystation.addEventListener("click", () => {
  buttonPlaystation.classList.toggle("active");
});

const buttonXbox = document.querySelector("#xbox");
const dropdownXbox = document.querySelector("#dropdownXbox");
let expandedXbox = false;

buttonXbox.addEventListener("click", () => {
  console.log()
  if (!expandedXbox) {
    dropdownXbox.style.display = "flex";
    buttonXbox.style.padding = "16px";
    expandedXbox = true;
  } else {
    dropdownXbox.style.display = "none";
    expandedXbox = false;
  }
});

buttonXbox.addEventListener("click", () => {
  buttonXbox.classList.toggle("active");
});


const buttonNin = document.querySelector("#nintendo");
const dropdownNin = document.querySelector("#dropdownNin");
let expandedNin = false;

buttonNin.addEventListener("click", () => {
  console.log()
  if (!expandedNin) {
    dropdownNin.style.display = "flex";
    buttonNin.style.padding = "16px";
    expandedNin = true;
  } else {
    dropdownNin.style.display = "none";
    expandedNin = false;
  }
});

buttonNin.addEventListener("click", () => {
  buttonNin.classList.toggle("active");
});