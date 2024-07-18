let slideIndex = 0;

function showSlides() {
  const slides = document.querySelectorAll('.course-card');
  slides.forEach((slide, index) => {
    if (index >= slideIndex && index < slideIndex + 3) {
      slide.classList.remove('hidden');
    } else {
      slide.classList.add('hidden');
    }
  });
}

function moveSlide(direction) {
  const slides = document.querySelectorAll('.course-card');
  const totalSlides = slides.length;
  const visibleSlides = 3;

  if (direction === 'next') {
    slideIndex++;
    if (slideIndex > totalSlides - visibleSlides) {
      slideIndex = 0;
    }
    console.log('Next button pressed');
  } else if (direction === 'prev') {
    slideIndex--;
    if (slideIndex < 0) {
      slideIndex = totalSlides - visibleSlides;
    }
    console.log('Prev button pressed');
  }

  showSlides();
}

// Initial setup
document.addEventListener('DOMContentLoaded', showSlides);
