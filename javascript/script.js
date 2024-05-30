const carouselContainer = document.querySelector('.carousel-container');
const carousels = document.querySelectorAll('.carousel');
let currentIndex = 0;
let isSliding = false;

function slide(direction) {
  if (isSliding) return;
  isSliding = true;

  const slideWidth = carousels[0].offsetWidth;
  const maxIndex = carousels.length - 1;

  if (direction === 'next') {
    currentIndex = (currentIndex + 1) % carousels.length;
  } else {
    currentIndex = (currentIndex - 1 + carousels.length) % carousels.length;
  }

  carouselContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

  setTimeout(() => {
    isSliding = false;
  }, 300);
}

// Add event listeners for arrow buttons or touch events if needed
// Example:
// const prevButton = document.querySelector('.prev-button');
// const nextButton = document.querySelector('.next-button');

// prevButton.addEventListener('click', () => slide('prev'));
// nextButton.addEventListener('click', () => slide('next'));