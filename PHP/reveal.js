// Select all elements with the "reveal" class
const revealElements = document.querySelectorAll('.reveal');

// Function to check if the element is in the viewport
function handleScroll() {
revealElements.forEach((element) => {
    const rect = element.getBoundingClientRect();

    // Check if the element is within the viewport
    if (rect.top < window.innerHeight && rect.bottom > 0) {
    element.classList.add('active'); // Add active class
    } else {
    element.classList.remove('active'); // Remove active class if out of view
    }
});
}

// Run the function on page load and scroll
window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll);