function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Default open tab
document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.tablinks').click();
});

const mainTabParent = document.querySelector('.library_services__page__nav');
const mainTabParentLeftNavs = [...mainTabParent.querySelectorAll('.library_services__page__nav__left')];
const mainTabParentRightNavs = [...mainTabParent.querySelectorAll('.library_services__page__nav__right__links__item')];

mainTabParent.onclick = ({ target }) => {
    const isLibraryServicesItem = target.classList.contains('library_services__page__nav__right__links__item');  
    
    if (!isLibraryServicesItem) {
        return;
    }

    const targetElementId = target.dataset.target;

    if (!targetElementId) {
        return;
    }

    const targetElement = document.getElementById(targetElementId);

    mainTabParentLeftNavs.forEach(leftNav => {
        if (leftNav === targetElement) {
            leftNav.classList.add('active');
        } else {
            leftNav.classList.remove('active')
        }
    })

    mainTabParentRightNavs.forEach(rightNav => {
        if (rightNav === target) {
            rightNav.classList.add('active');
        } else {
            rightNav.classList.remove('active')
        }
    })
}