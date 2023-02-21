// Define a function to toggle the visibility of the project descriptions
function toggleDescription() {
  const description = this.nextElementSibling;
  description.classList.toggle("show");
}

// Get all the project cards and add an event listener to toggle the description on click
const projectCards = document.querySelectorAll(".project-card");
projectCards.forEach((card) => {
  const title = card.querySelector("h3");
  title.addEventListener("click", toggleDescription);
});

// Define an array of colors to transition between
const colors = [
  "#ffffff", // white
  "#f5f5f5",
  "#e0e0e0",
  "#cccccc",
  "#cccccc",
  "#e0e0e0",
  "#f5f5f5",
  "#ffffff", // white
];

// Set the index of the current color
let index = 0;

// Function to change the background color
function changeBackgroundColor() {
  // Set the background color to the next color in the array
  document.body.style.backgroundColor = colors[index];

  // Increment the index, or reset it to 0 if it reaches the end of the array
  index = (index + 1) % colors.length;
}

// Set an interval to change the background color every 2 seconds
setInterval(changeBackgroundColor, 2000);

/* Add this JavaScript to your pages */
document.addEventListener("DOMContentLoaded", function () {
  var links = document.querySelectorAll("a");

  for (var i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function (event) {
      event.preventDefault();
      var href = this.getAttribute("href");
      document.body.classList.add("fade-out");
      setTimeout(function () {
        window.location = href;
      }, 500);
    });
  }
});

window.addEventListener("load", function () {
  document.body.classList.remove("fade-in");
});
