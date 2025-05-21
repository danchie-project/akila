// Array of left section items
const leftItems = [
    'R&D center',
    'Logistic Hub',
    'Factory A',
    'Factory B'
];

// Array of right section items
const rightItems = [
    'Monitoring',
    'HVAC Optimization',
    'Portfolio Analytics',
    'Predictive Maintenance',
    'System Automation'
];

// Function to populate the lists
function populateList(containerId, items) {
    const container = document.getElementById(containerId);
    items.forEach(item => {
        const listItem = document.createElement('div');
        listItem.className = 'cta__hero__list';
        
        const paragraph = document.createElement('p');
        paragraph.textContent = item;
        
        listItem.appendChild(paragraph);
        container.appendChild(listItem);
    });
}

// Populate both lists
populateList('ctaHeroLeft', leftItems);
populateList('ctaHeroRight', rightItems);