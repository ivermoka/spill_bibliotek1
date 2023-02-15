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
  console.log();
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

nav = document.getElementById("navbar");
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    nav.style.top = "0";
  } else {
    nav.style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
};

// const leftArrow = document.querySelector('#left-arrow');
// const rightArrow = document.querySelector('#right-arrow');

// leftArrow.addEventListener('click', moveLeft);
// rightArrow.addEventListener('click', moveRight);

// function moveLeft() {
//   const centerItem = document.querySelector('.carousel-item-center');
//   const rightItem = document.querySelector('.carousel-item-right');

//   centerItem.classList.remove('carousel-item-center');
//   centerItem.classList.add('carousel-item-right');

//   rightItem.classList.remove('carousel-item-right');
//   rightItem.classList.add('carousel-item-center');
// }

// function moveRight() {
//   const centerItem = document.querySelector('.carousel-item-center');
//   const leftItem = document.querySelector('.carousel-item-left');

//   centerItem.classList.remove('carousel-item-center');
//   centerItem.classList.add('carousel-item-left');

//   leftItem.classList.remove('carousel-item-left');
//   leftItem.classList.add('carousel-item-center');
// }

// bildekarusell

const left = document.querySelector("#left");
const right = document.querySelector("#right");

let i = 0;

let img1 = document.querySelector("#img1");
let img2 = document.querySelector("#img2");
let img3 = document.querySelector("#img3");

let images = [img1, img2, img3];

right.addEventListener("click", () => {
  i++;
  if (i === images.length) {
    i = 0;
  }
  images.forEach((image) => {
    image.style.display = "none";
  });
  images[i].style.display = "block";
});

left.addEventListener("click", () => {
  i--;
  if (i < 0) {
    i = images.length - 1;
  }
  images.forEach((image) => {
    image.style.display = "none";
  });
  images[i].style.display = "block";
});

const leftSale = document.querySelector("#left-sale");
const rightSale = document.querySelector("#right-sale");

let iSale = 0;

let img1Sale = document.querySelector("#img1-sale");
let img2Sale = document.querySelector("#img2-sale");
let img3Sale = document.querySelector("#img3-sale");

let imagesSale = [img1Sale, img2Sale, img3Sale];

rightSale.addEventListener("click", () => {
  iSale++;
  if (iSale === imagesSale.length) {
    iSale = 0;
  }
  imagesSale.forEach((image) => {
    image.style.display = "none";
  });
  imagesSale[iSale].style.display = "block";
});

leftSale.addEventListener("click", () => {
  iSale--;
  if (iSale < 0) {
    iSale = imagesSale.length - 1;
  }
  imagesSale.forEach((image) => {
    image.style.display = "none";
  });
  imagesSale[iSale].style.display = "block";
});
