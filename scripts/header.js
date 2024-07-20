const menuItemsButton = document.querySelector('.menu_header__left__button');
const menuHeaderMainMenu = document.querySelector('.menu_header__right');

menuItemsButton.onclick = () => menuHeaderMainMenu.classList.toggle('active');

const menuItemsParent = document.querySelector('.menu_header__right');

// This code is a simple concept of, if a ul exist inside an li, set it active.
menuItemsParent.onclick = (event) => {
  const ulCollection = [...menuItemsParent.querySelectorAll('ul')];

  if (ulCollection.length <= 0) {
    return;
  }

  // Clears all open sublist
  ulCollection.forEach((ulElement) => {
    //  Except if the target is a nested sublist, it prevents its active parent to be closed
    if (ulElement.contains(event.target)) {
      return;
    }

    ulElement.classList.remove('active');
  });

  // Opens the targeted sublist
  if (event.target.tagName === 'LI') {
    const listElements = [...event.target.children].filter((child) => child.tagName === 'UL');
    const sublist = listElements.length > 0 ? listElements[0] : null;

    if (!sublist) {
      return;
    }

    sublist.classList.toggle('active');
  }
};
