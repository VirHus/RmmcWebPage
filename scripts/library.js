function updatePosition(togglerParent, dropdown) {
  const parent = togglerParent;
  const target = dropdown;

  const parentRectangle = parent.getBoundingClientRect();
  target.style.width = `${parentRectangle.width}px`;
  target.style.left = `${parentRectangle.left}px`;
  target.style.top = `${parentRectangle.top + parentRectangle.height + 10}px`;
}

// eslint-disable-next-line no-unused-vars
const hoursParent = document.getElementById('library-top-hours-menus');

function hideAllDropdowns() {
  const allDropdowns = [...document.querySelectorAll('.library-top-hours-menus__dropdown')];
  allDropdowns.forEach((item) => {
    const newItem = item;
    newItem.style.display = 'none';
  });
}

hoursParent.onclick = ({ target }) => {
  const element = target;
  const clickedOnDropdownToggler = target.classList.contains('library-top-hours-menus__search-item');

  if (!clickedOnDropdownToggler) {
    return;
  }

  const targetDropdown = document.getElementById(element.dataset.target);

  // Chances when clicking the same active dropdown toggler will close it.
  if (targetDropdown.style.display === 'flex') {
    targetDropdown.style.display = 'none';
    updatePosition(hoursParent, targetDropdown);
    window.removeEventListener('scroll', () => {
      updatePosition(hoursParent, targetDropdown);
    });

    return;
  }

  hideAllDropdowns();

  if (targetDropdown.style.display === 'block') {
    targetDropdown.style.display = 'none';
    window.removeEventListener('scroll', () => {
      updatePosition(hoursParent, targetDropdown);
    });
    return;
  }

  targetDropdown.style.display = 'flex';
  updatePosition(hoursParent, targetDropdown);
  window.addEventListener('scroll', () => {
    updatePosition(hoursParent, targetDropdown);
  });
};

document.addEventListener('click', (event) => {
  if (!hoursParent.contains(event.target)) {
    hideAllDropdowns();
  }
});
