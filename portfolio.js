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
