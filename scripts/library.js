function toggleDropdown(id) {
    var content = document.getElementById(id);
    var allContents = document.getElementsByClassName('dropdown-content');

    for (var i = 0; i < allContents.length; i++) {
        if (allContents[i] !== content) {
            allContents[i].style.display = 'none';
        }
    }

    if (content.style.display === 'block') {
        content.style.display = 'none';
    } else {
        content.style.display = 'block';
    }
}