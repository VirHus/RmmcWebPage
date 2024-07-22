const navBottom = document.getElementById('nav-bottom-content-right');

// Shows the nav bottom items when button is clicked on phone
const navBottomItems = document.getElementById('phone-toggle-nav-bottom-content-right');
navBottomItems.onclick = () => navBottom.classList.toggle('active');

// This code is a simple concept of, if a ul exist inside an li, set it active.
navBottom.onclick = (event) => {
  const ulCollection = [...navBottom.querySelectorAll('ul')];

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
