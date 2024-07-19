const courses = [
  {
    href: "course3.php",
    imgSrc: "assets/img/course/it.jpg",
    imgAlt: "BS in Information Technology",
    title: "BS in Information Technology",
    lessons: 43,
    students: 402,
    views: "13K"
  },
  {
    href: "course3.php",
    imgSrc: "assets/img/course/course_2_3.jpg",
    imgAlt: "BS in Information Technology",
    title: "BS in Tourism Management",
    lessons: 21,
    students: 320,
    views: "32K"
  },
  {
    href: "course3.php",
    imgSrc: "assets/img/course/teacher.jpg",
    imgAlt: "BS in Information Technology",
    title: "Bachelor of Elementary Education",
    lessons: 53,
    students: 1050,
    views: "14K"
  },
  {
    href: "course3.php",
    imgSrc: "assets/img/course/justice.jpg",
    imgAlt: "BS in Information Technology",
    title: "Bachelor of Science in Criminology",
    lessons: 39,
    students: 740,
    views: "12K"
  }
];

let slideIndex = 0;

/**
 * Displays slides based on the current slide index.
 * Only a subset of slides, defined by the `visibleSlides` count, will be visible at a time.
 */
function showSlides() {
  const slides = document.querySelectorAll('.course-cards__item');
  slides.forEach((slide, index) => {
    if (index >= slideIndex && index < slideIndex + 3) {
      slide.classList.remove('hidden');
    } else {
      slide.classList.add('hidden');
    }
  });
}

/**
 * Moves slides in the specified direction.
 * @param {string} direction - The direction to move slides ('next' or 'prev').
 */
function moveSlide(direction) {
  const slides = document.querySelectorAll('.course-cards__item');
  const totalSlides = slides.length;
  const visibleSlides = 3;

  if (direction === 'next') {
    slideIndex++;

    if (slideIndex > totalSlides - visibleSlides) {
      slideIndex = 0;
    }
  }

  if (direction === 'prev') {
    slideIndex--;

    if (slideIndex < 0) {
      slideIndex = totalSlides - visibleSlides;
    }
  }

  showSlides();
}

document.addEventListener('DOMContentLoaded', () => {

  // Place the cards inside the container if it exists
  const cardContainer = document.querySelector('.course-cards');

  if (!cardContainer) {
    return;
  }

  cardContainer.innerHTML = courses.map(course => /* html */`
    <div class="course-cards__item">
      <a href="${course.href}">
        <div class="course-cards__item__image-box">
          <img src="${course.imgSrc}" alt="${course.imgAlt}">
        </div>
        <h3>${course.title}</h3>
        <div class="course-cards__item__footer">
          <p>Lessons <span>${course.lessons}</span></p>
          <p>Students <span>${course.students}</span></p>
          <p>View <span>${course.views}</span></p>
        </div>
      </a>
    </div>
  `).join('\n');

  showSlides();
});
