
/* Exemple rani na template guys, alisda ra ninyo kana tanan naka "${ }" 
ug unsa bah jud tung style para sa pag connect sa database */


/* html */`
  <div class="news-card__item">
    <div class="news-card__item__element">
      <div class="news-card__item__element__author">
        <img id="news-card__item__element__author__img" src="${data.author_img}" alt="">
        <h4>${data.author_name}</h4>
      </div>
      
      <div class="news-card__item__element__description">
          <h2>${data.event_title}</h2>
          <h4>${data.event_sub_details}</h4>
      </div>

      <div class="news-card__item__element__date-and-time">
        <div class="news-card__item__date-and-time__view">
          <h1>${data.view_btn}</h1>
        </div>
        
        <div class="news-card__item__date-and-time__display">
          <h3>${data.date}</h3>
          <h3>${data.time}</h3>
        </div>

      </div>
    </div>

    <img id="news-card__item__img" src="${data.event-img}" alt="">
  </div>
`