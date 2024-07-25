const newsCards = [
  {
    link: '',
    author: {
      imgSrc: 'norman/img/cardo.jpeg',
      name: 'Author name',
    },
    description: {
      title: 'Pasigarbo ni cardo',
      subtitle: 'Isang magiting na police na lumalaban para sa hustisya. Siya ay nagpakita ng katapangan sa bawat laban. Walang takot niyang hinarap ang mga kalaban para ipagtanggol ang naaapi. Sa kabila ng panganib, nanatili siyang tapat sa kanyang sinumpaang tungkulin. Siya ay isang huwarang alagad ng batas.',
    },
    dateAndTime: {
      date: 'May 7, 2024',
      time: '12:58 AM',
    },
    mainImgSrc: 'norman/img/cardo.jpeg',
  },
  {
    link: '',
    author: {
      imgSrc: 'norman/img/cardo.jpeg',
      name: 'Jane Doe',
    },
    description: {
      title: 'Bayani ng Bayan',
      subtitle: 'Siya ay naglingkod ng tapat sa kanyang bayan. Ang kanyang tapang ay hinahangaan ng marami. Sa bawat misyon, ipinapakita niya ang kanyang dedikasyon. Hindi siya natitinag sa harap ng panganib. Siya ay tunay na bayani ng bayan.',
    },
    dateAndTime: {
      date: 'June 12, 2024',
      time: '03:15 PM',
    },
    mainImgSrc: 'norman/img/cardo.jpeg',
  },
  {
    link: '',
    author: {
      imgSrc: 'norman/img/cardo.jpeg',
      name: 'John Smith',
    },
    description: {
      title: 'Matatag na Tagapaglingkod',
      subtitle: 'Ang kanyang paglilingkod ay hindi matatawaran. Lagi siyang handang tumulong sa kapwa. Ang kanyang puso ay para sa bayan. Hindi siya nag-aalinlangan sa kanyang tungkulin. Siya ay inspirasyon sa marami.',
    },
    dateAndTime: {
      date: 'July 4, 2024',
      time: '08:45 AM',
    },
    mainImgSrc: 'norman/img/cardo.jpeg',
  },
  {
    link: '',
    author: {
      imgSrc: 'norman/img/cardo.jpeg',
      name: 'Mary Johnson',
    },
    description: {
      title: 'Tunay na Bayani',
      subtitle: 'Ang kanyang mga gawa ay nag-iiwan ng marka. Siya ay hinahangaan ng mga kasamahan. Ang kanyang liderato ay huwaran. Lagi siyang nauuna sa bawat laban. Siya ay walang katulad.',
    },
    dateAndTime: {
      date: 'August 19, 2024',
      time: '06:30 PM',
    },
    mainImgSrc: 'norman/img/cardo.jpeg',
  },
  {
    link: '',
    author: {
      imgSrc: 'norman/img/cardo.jpeg',
      name: 'Michael Brown',
    },
    description: {
      title: 'Pagtugon sa Tawag ng Tungkulin',
      subtitle: 'Siya ay isang halimbawa ng katapangan. Sa bawat hamon, siya ay handang humarap. Ang kanyang dedikasyon ay hindi matitinag. Walang katulad ang kanyang paglilingkod. Siya ay tunay na inspirasyon.',
    },
    dateAndTime: {
      date: 'September 25, 2024',
      time: '10:22 AM',
    },
    mainImgSrc: 'norman/img/cardo.jpeg',
  },
  {
    link: '',
    author: {
      imgSrc: 'norman/img/cardo.jpeg',
      name: 'Emily Davis',
    },
    description: {
      title: 'Huwarang Tagapaglingkod',
      subtitle: 'Ang kanyang serbisyo ay kahanga-hanga. Walang takot niyang hinaharap ang bawat pagsubok. Ang kanyang dedikasyon ay walang kapantay. Lagi siyang handang tumulong sa iba. Siya ay isang tunay na huwaran.',
    },
    dateAndTime: {
      date: 'October 10, 2024',
      time: '02:10 PM',
    },
    mainImgSrc: 'norman/img/cardo.jpeg',
  },
];

const newsCardsContainer = document.querySelector('.news_card_box');

/**
 * Truncates the given text to the first 24 words and appends '...'.
 *
 * @param {string} text - The text to be truncated.
 * @returns {string} The truncated text with '...' appended.
 */
function getFirst24Words(text) {
  if (!text) {
    return '';
  }

  const words = text.split(' ');
  const first24Words = words.slice(0, 24);
  return `${first24Words.join(' ')}...`;
}

newsCardsContainer.innerHTML = newsCards.map((cardObject) => /* html */`
  <div class="news-card__item">
    <div class="news-card__item__element">
      <div class="news-card__item__element__author">
        <img src="${cardObject.author.imgSrc ?? ''}" alt="">
        <p>${cardObject.author.name ?? ''}</p>
      </div>
      <div class="news-card__item__element__description">
        <h2>${cardObject.description.title ?? ''}</h2>
        <h4 title="${cardObject.description.subtitle ?? ''}">${getFirst24Words(cardObject.description.subtitle)}</h4>
      </div>
      <div class="news-card__item__element__bottom">
        <a href="${cardObject.link}" class="button button--primary">VIEW</a>
        <div>
          <h3>${cardObject.dateAndTime.date ?? ''}</h3>
          <h3>${cardObject.dateAndTime.time ?? ''}</h3>
        </div>
      </div>
    </div>
    <div></div>
    <div class="news-card__item__img">
      <img src="${cardObject.mainImgSrc}" alt="${cardObject.description.title}">
    </div>
  </div>
`).join('\n');
