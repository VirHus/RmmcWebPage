const courses = [
  {
    href: '#',
    imgSrc: 'assets/img/course/it.jpg',
    imgAlt: 'BS in Information Technology',
    title: 'BS in Information Technology',
    lessons: 43,
    students: 402,
    views: '13K',
  },
  {
    href: '#',
    imgSrc: 'assets/img/course/course_2_3.jpg',
    imgAlt: 'BS in Information Technology',
    title: 'BS in Tourism Management',
    lessons: 21,
    students: 320,
    views: '32K',
  },
  {
    href: '#',
    imgSrc: 'assets/img/course/teacher.jpg',
    imgAlt: 'BS in Information Technology',
    title: 'Bachelor of Elementary Education',
    lessons: 53,
    students: 1050,
    views: '14K',
  },
  {
    href: '#',
    imgSrc: 'assets/img/course/justice.jpg',
    imgAlt: 'BS in Information Technology',
    title: 'Bachelor of Science in Criminology',
    lessons: 39,
    students: 740,
    views: '12K',
  },
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
// eslint-disable-next-line no-unused-vars
function moveSlide(direction) {
  const slides = document.querySelectorAll('.course-cards__item');
  const totalSlides = slides.length;
  const visibleSlides = 3;

  if (direction === 'next') {
    slideIndex += 1;

    if (slideIndex > totalSlides - visibleSlides) {
      slideIndex = 0;
    }
  }

  if (direction === 'prev') {
    slideIndex -= 1;

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

  cardContainer.innerHTML = courses.map((course) => /* html */`
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

const blogsContainer = document.getElementById('index-blogs__content__items');

const blogs = [
  {
    date: 'Saturday, November 12, 2023 at 7:20 AM',
    title: 'PASIGARBO 2023 Featuring Banda Ni Kleggy',
    image: 'assets/img/NEWS/pasigarbokleggy.jpg',
    authorImage: 'assets/img/event/rmmc.jpg',
    authorName: 'Admin',
    redirectLink: null,
  },
  {
    date: 'Saturday, November 11, 2023 at 11:31 AM',
    title: "RMMC's MR. & MS. PALARO 2023! 🌟",
    image: 'assets/img/NEWS/mrandmspalaro2023.png',
    authorImage: 'assets/img/event/rmmc.jpg',
    authorName: 'Admin',
    redirectLink: null,
  },
  {
    date: 'Thursday, November 9, 2023 at 10:04 AM',
    title: 'ANNOUNCEMENT',
    image: 'assets/img/NEWS/exam.jpg',
    authorImage: null,
    authorName: 'MPO',
    redirectLink: null,
  },
  {
    date: 'Thursday, November 9, 2023 at 5:44 AM',
    title: 'FOURTH QUARTER NATIONWIDE SIMULTANEOUS DRILL',
    image: 'assets/img/NEWS/DRILL/2.jpg',
    authorImage: 'assets/img/event/rmmc.jpg',
    authorName: 'Admin',
    redirectLink: null,
  },
  {
    date: 'Saturday, November 4, 2023 at 4:28 AM',
    title: 'The newly renovated RMMC Library',
    image: 'assets/img/NEWS/library.png',
    authorImage: 'assets/img/event/rmmc.jpg',
    authorName: 'Admin',
    redirectLink: null,
  },
  {
    date: 'Thursday, November 2, 2023 at 7:46 AM',
    title: "All Souls'Day",
    image: 'assets/img/NEWS/allsouls.jpg',
    authorImage: 'assets/img/event/rmmc.jpg',
    authorName: 'Admin',
    redirectLink: null,
  },
];

if (blogs.length > 0) {
  blogsContainer.innerHTML = blogs.map((blog) => {
    const defaultAvatar = 'assets/img/event/avater.jpg';

    return /* html */`
      <div class="blog-card">
        <div class="blog-card__image-box">
          <img src="${blog.image}" alt="${blog.title}">
        </div>
        <div class="blog-card__content">
          <p class="blog-card__content__date">${blog.date}</p>
          <p class="blog-card__content__title">${blog.title}</p>

          <div class="blog-card__content__bottom">
            <a class="button--primary" href="${blog.redirectLink}">View</a>

            <div class="blog-card__content__bottom__author">
              <img alt="Avatar" src="${blog.authorImage ?? defaultAvatar}">
              <p>${blog.authorName}</p>
            </div>
          </div>
        </div>
      </div>
    `;
  }).join('\n');
}
