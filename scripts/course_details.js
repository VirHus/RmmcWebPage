function showContent(id) {
    const tabs = document.querySelectorAll('.course__content__left__bottom__tabs__tab');
    const contents = document.querySelectorAll('.course__content__left__bottom__content');
    tabs.forEach(course__content__left__bottom__tabs__tab => course__content__left__bottom__tabs__tab.classList.remove('active'));
    contents.forEach(course__content__left__bottom__content => course__content__left__bottom__content.style.display = 'none');
    document.getElementById(id).style.display = 'block';
    document.querySelector(`.course__content__left__bottom__tabs__tab[onclick="showContent('${id}')"]`).classList.add('active');
}