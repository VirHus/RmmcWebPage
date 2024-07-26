// eslint-disable-next-line no-unused-vars
function toggleDropdown(id) {
  const content = document.getElementById(id);
  const allElements = [...document.querySelectorAll('.library__top__hours__content')];

  allElements.forEach((element) => {
    if (element !== content) {
      // eslint-disable-next-line no-param-reassign
      element.style.display = 'none';
    }
  });

  content.style.display = content.style.display === 'block' ? 'none' : 'block';
}
