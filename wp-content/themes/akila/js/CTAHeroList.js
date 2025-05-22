// Object mapping items to their respective images
const images = {
    'R&D center': 'http://localhost/akila/wp-content/uploads/2025/05/card2-scaled.jpg',
    'Logistic Hub': 'http://localhost/akila/wp-content/uploads/2025/05/card2-scaled.jpg',
    'Factory A': 'http://localhost/akila/wp-content/uploads/2025/05/card2-scaled.jpg',
    'Factory B': 'http://localhost/akila/wp-content/uploads/2025/05/card2-scaled.jpg',
    'Monitoring': 'http://localhost/akila/wp-content/uploads/2025/05/card2-scaled.jpg',
    'HVAC Optimization': 'http://localhost/akila/wp-content/uploads/2025/05/card2-scaled.jpg',
    'Portfolio Analytics': 'http://localhost/akila/wp-content/uploads/2025/05/card2-scaled.jpg',
    'Predictive Maintenance': 'http://localhost/akila/wp-content/uploads/2025/05/card2-scaled.jpg',
    'System Automation': 'http://localhost/akila/wp-content/uploads/2025/05/card2-scaled.jpg'
};

// Array of left section items (4 max)
const leftItems = [
    'R&D center',
    'Logistic Hub',
    'Factory A',
    'Factory B'
];

// Array of right section items (6 max)
const rightItems = [
    'Monitoring',
    'HVAC Optimization',
    'Portfolio Analytics',
    'Predictive Maintenance',
    'System Automation',
    'R&D center'
];

// Function to populate the lists
function populateList(containerId, items) {
    const container = document.getElementById(containerId);
    items.forEach(item => {
        const listItem = document.createElement('div');
        listItem.className = 'cta__hero__list';

        // Create paragraph
        const paragraph = document.createElement('p');
        paragraph.textContent = item;
        listItem.appendChild(paragraph);

        // Add click event to show specific image
        listItem.addEventListener('click', function() {
            const imageContainer = document.getElementById('imageContainer');
            const displayedImage = document.getElementById('displayedImage');
            displayedImage.src = images[item]; // Set image source based on item clicked
            imageContainer.style.display = 'block'; // Show image
        });

        container.appendChild(listItem);
    });
}

// Scroll functionality
function scrollList(containerId, direction) {
    const container = document.getElementById(containerId);
    const scrollAmount = 50; // Adjust this value to change scroll distance

    if (direction === 'up') {
        container.scrollBy({
            top: -scrollAmount,
            behavior: 'smooth'
        });
    } else if (direction === 'down') {
        container.scrollBy({
            top: scrollAmount,
            behavior: 'smooth'
        });
    }
}

// Populate both lists
populateList('ctaHeroLeft', leftItems);
populateList('ctaHeroRight', rightItems);

// Add event listeners to chevrons for the left container
document.querySelector('.cta__hero__left__container .chevron-up').addEventListener('click', () => {
    scrollList('ctaHeroLeft', 'up'); // Scroll up for left container
});

document.querySelector('.cta__hero__left__container .chevron-down').addEventListener('click', () => {
    scrollList('ctaHeroLeft', 'down'); // Scroll down for left container
});

// Add event listeners to chevrons for the right container
document.querySelector('.cta__hero__right__container .chevron-up').addEventListener('click', () => {
    scrollList('ctaHeroRight', 'up'); // Scroll up for right container
});

document.querySelector('.cta__hero__right__container .chevron-down').addEventListener('click', () => {
    scrollList('ctaHeroRight', 'down'); // Scroll down for right container
});