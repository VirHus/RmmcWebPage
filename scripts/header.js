// const menuItemsButton= document.querySelector('.menu_header__left__button');
// const menuHeaderMainMenu = document.querySelector('.menu_header__right');

// menuItemsButton.onclick = () => menuHeaderMainMenu.classList.toggle('active');

// const colleges_List = document.querySelector('.colleges_list');
// const colleges_cont = document.querySelector('.colleges_content');

// colleges_List.onclick = () => colleges_cont.classList.toggle('active')

// const menuItemsParent = document.querySelector('.menu_header__right')

// menuItemsParent.onclick = event=> {
//     const sublistCollection = [...document.querySelectorAll('.menu_header__right__item__list')];
// ``

//     if(sublistCollection && sublistCollection.length > 0){
//         sublistCollection.forEach(sublist => sublist.classList.remove("active"));
//     }
//     /**
//      * @type {HTMLElement}
//      */
//     const isMenuItemTitle = event.target.classList.contains("menu_header__right__item");

//     if(isMenuItemTitle){
//         const sublist = event.target.querySelector('.menu_header__right__item__list');
//         if(!sublist){
//             return;
//         }

//         sublist.classList.add("active")
//     }
// }

// //for colleges js function adding toggle

const menuItemsButton = document.querySelector('.menu_header__left__button');
const menuHeaderMainMenu = document.querySelector('.menu_header__right');

menuItemsButton.onclick = () => menuHeaderMainMenu.classList.toggle('active');

const menuItemsParent = document.querySelector('.menu_header__right');

menuItemsParent.onclick = (event) => {
  // pass
};
