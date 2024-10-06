// Select the mission and vision sections
const missionSection = document.querySelector('.mission');
const visionSection = document.querySelector('.vision');

// Event handler for hover effect on mission section
missionSection.addEventListener('mouseover', () => {
    missionSection.style.backgroundColor = 'black';
    missionSection.style.color = 'white';
});

missionSection.addEventListener('mouseleave', () => {
    missionSection.style.backgroundColor = '#f9f9f9';
    missionSection.style.color = 'black';
});

// Event handler for hover effect on vision section
visionSection.addEventListener('mouseover', () => {
    visionSection.style.backgroundColor = 'black';
    visionSection.style.color = 'white';
});

visionSection.addEventListener('mouseleave', () => {
    visionSection.style.backgroundColor = '#f9f9f9';
    visionSection.style.color = 'black';
});
