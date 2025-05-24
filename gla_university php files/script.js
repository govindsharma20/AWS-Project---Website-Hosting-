// JavaScript to trigger the animation on scroll

// Function to check if an element is in the viewport
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to add the 'visible' class to elements when they come into the viewport
function checkVisibility() {
    var elements = document.querySelectorAll('.legacy-text, .stat-section');
    elements.forEach(function(element) {
        if (isElementInViewport(element)) {
            element.classList.add('visible');
        }
    });
}

// Check visibility on scroll
window.addEventListener('scroll', checkVisibility);

// Initial check for visibility on page load
document.addEventListener('DOMContentLoaded', checkVisibility);
