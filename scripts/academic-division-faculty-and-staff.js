const staffMembers = [
  {
    image: 'assets/img/normal/student_1_3_new.png',
    name: 'JUAN DELA CRUZ',
    position: 'Senior Developer at Imaginary Co.',
    email: 'juan.delacruz@imaginary.com',
    tel: '123456789',
    orcid: '987654321',
    degrees: [
      'Bachelor of Science in Computer Science',
      'Master of Software Engineering',
    ],
  },
  {
    image: 'assets/img/normal/student_1_3_new.png',
    name: 'MARIA CLARA',
    position: 'Professor at Nowhere University',
    email: 'maria.clara@nowhere.edu',
    tel: '1122334455',
    orcid: '2233445566',
    degrees: [
      'Bachelor of Arts in History',
      'Master of Arts in History',
      'Ph.D. in Historical Studies',
    ],
  },
  {
    image: 'assets/img/normal/student_1_3_new.png',
    name: 'JOSE RIZAL',
    position: 'Research Scientist at Fictional Lab',
    email: 'jose.rizal@fictional.com',
    tel: '9988776655',
    orcid: '5566778899',
    degrees: [
      'Bachelor of Science in Biology',
      'Master of Science in Molecular Biology',
      'Ph.D. in Genetics',
    ],
  },
  {
    image: 'assets/img/normal/student_1_3_new.png',
    name: 'PILAR SANTOS',
    position: 'CEO at Nonexistent Enterprises',
    email: 'pilar.santos@nonexistent.com',
    tel: '5566778899',
    orcid: '6677889900',
    degrees: [
      'Bachelor of Business Administration',
      'MBA in International Business',
    ],
  },
];

/* eslint-disable max-len */
const staffContainerParent = document.getElementById('academic-division-faculty-and-staff-data');

staffContainerParent.innerHTML = staffMembers.map((staff) => {
  const email = staff.email ? /* html */`<li>Email: <span>${staff.email}</span></li>` : '';
  const tel = staff.tel ? /* html */`<li>Tel: <span>${staff.tel}</span></li>` : '';
  const orcid = staff.orcid ? /* html */`<li>ORCID No.: <span>${staff.orcid}</span></li>` : '';

  const details = [email, tel, orcid].join('\n');
  const degrees = staff.degrees.length > 0 ? staff.degrees.map((degree) => `<li>${degree}</li>`).join('') : '<li>No degrees added</li>';

  return /* html */`
    <div class="academic-division-faculty-and-staff-data__staff">
      <img src="${staff.image ?? 'assets/img/icon/user-icon.png'}">
      <div class="academic-division-faculty-and-staff-data__staff__info">
        <ul class="academic-division-faculty-and-staff-data__staff__info__tabs">
          <li class="academic-division-faculty-and-staff-data__staff__info__tabs__profile">
            <img src="assets/img/icon/user-icon.png">
            <p>${staff.name}</p>
          </li>
          <li class="academic-division-faculty-and-staff-data__staff__info__tabs__background">
            <img src="assets/img/icon/circle-info-icon.png">
            EDUCATIONAL ATTAINMENT
          </li>
        </ul>
        <div class="academic-division-faculty-and-staff-data__staff__info__profile">
          <ul>
            <li>${staff.position}</li>
            ${details}
          </ul>
        </div>
        <div class="academic-division-faculty-and-staff-data__staff__info__details">
          <ul>
            ${degrees}
          </ul>
        </div>
      </div>
    </div>
  `;
}).join('\n');

const profileTabClass = '.academic-division-faculty-and-staff-data__staff__info__tabs__profile';
const detailsTabClass = '.academic-division-faculty-and-staff-data__staff__info__tabs__background';
const profileSectionClass = '.academic-division-faculty-and-staff-data__staff__info__profile';
const detailsSectionClass = '.academic-division-faculty-and-staff-data__staff__info__details';

[...document.querySelectorAll(profileTabClass)]?.forEach((profileTab) => {
  profileTab.classList.add('active');
});

[...document.querySelectorAll(profileSectionClass)]?.forEach((profileSection) => {
  profileSection.classList.add('active');
});

staffContainerParent.onclick = (event) => {
  const targetIsProfile = event.target.classList.contains(profileTabClass.replace('.', ''));
  const targetIsDetails = event.target.classList.contains(detailsTabClass.replace('.', ''));

  if (targetIsProfile) {
    event.target.classList.add('active');
    const details = event.target.nextElementSibling;

    if (details && details.classList.contains(detailsTabClass.replace('.', ''))) {
      details.classList.remove('active');
    }

    const profileSection = event.target.parentElement.parentElement.querySelector(profileSectionClass);
    const detailsSection = event.target.parentElement.parentElement.querySelector(detailsSectionClass);

    if (profileSection) {
      profileSection.classList.add('active');
    }

    if (detailsSection) {
      detailsSection.classList.remove('active');
    }
  }

  if (targetIsDetails) {
    event.target.classList.add('active');
    const profile = event.target.previousElementSibling;

    if (profile && profile.classList.contains(profileTabClass.replace('.', ''))) {
      profile.classList.remove('active');
    }

    const profileSection = event.target.parentElement.parentElement.querySelector(profileSectionClass);
    const detailsSection = event.target.parentElement.parentElement.querySelector(detailsSectionClass);

    if (profileSection) {
      profileSection.classList.remove('active');
    }

    if (detailsSection) {
      detailsSection.classList.add('active');
    }
  }
};
