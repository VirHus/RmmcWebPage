const menuItemsButton = document.querySelector('.menu_header__left__button');
const menuHeaderMainMenu = document.querySelector('.menu_header__right');

menuItemsButton.onclick = () => menuHeaderMainMenu.classList.toggle('active');

const menuItemsParent = document.querySelector('.menu_header__right');

menuItemsParent.onclick = event => {

  // Clears all open sublist
  const ulCollection = [...menuItemsParent.querySelectorAll('ul')];

  if (ulCollection.length > 0) {
    ulCollection.forEach(ul => {
      if (!ul.contains(event.target)) {
        ul.classList.remove('active');
      }
    });
  }

  // Code to open sublists
  if (event.target.tagName == 'LI' ) {
    const listElements = [...event.target.children].filter(child => child.tagName == 'UL');
    const sublist = listElements.length > 0 ? listElements[0] : null;

    if (!sublist) {
      return;
    }

    sublist.classList.toggle('active');
  }
};
