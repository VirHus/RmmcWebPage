// const menuItemsButton= document.querySelector('.menu_items_button');
// const menuHeaderMainMenu = document.querySelector('.menu_header_main_menu');

// menuItemsButton.onclick = () => menuHeaderMainMenu.classList.toggle('active');

// const colleges_List = document.querySelector('.colleges_list');
// const colleges_cont = document.querySelector('.colleges_content');

// colleges_List.onclick = () => colleges_cont.classList.toggle('active')

// const menuItemsParent = document.querySelector('.menu_header_main_menu')

// menuItemsParent.onclick = event=> {
//     const sublistCollection = [...document.querySelectorAll('.menu_header_main_menu_has_children__sublist')];
// ``

//     if(sublistCollection && sublistCollection.length > 0){
//         sublistCollection.forEach(sublist => sublist.classList.remove("active"));
//     }
//     /**
//      * @type {HTMLElement}
//      */
//     const isMenuItemTitle = event.target.classList.contains("menu_header_main_menu_has_children");

//     if(isMenuItemTitle){
//         const sublist = event.target.querySelector('.menu_header_main_menu_has_children__sublist');
//         if(!sublist){
//             return;
//         }

//         sublist.classList.add("active")
//     }
// }

// //for colleges js function adding toggle

const menuItemsButton = document.querySelector('.menu_items_button');
const menuHeaderMainMenu = document.querySelector('.menu_header_main_menu');

menuItemsButton.onclick = () => menuHeaderMainMenu.classList.toggle('active');

const menuItemsParent = document.querySelector('.menu_header_main_menu');

menuItemsParent.onclick = (event) => {
  const sublistCollection = [
    ...document.querySelectorAll(
      '.menu_header_main_menu_has_children__sublist'
    ),
  ];

  const innerSublistCollection = Array.from(
    document.querySelectorAll(
      '.menu_header_main_menu_has_children__sublist__sublist'
    )
  );

  // close all active inner sublist
  if (innerSublistCollection && innerSublistCollection.length > 0) {
    innerSublistCollection.forEach((sublist) =>
      sublist.lastElementChild.classList.remove('active')
    );
  }

  // open specific inner sublist
  const clickedOnInnerSublist = event.target.classList.contains(
    'menu_header_main_menu_has_children__sublist__sublist'
  );

  if (clickedOnInnerSublist) {
    event.target.lastElementChild.classList.add('active');
    return;
  }

  if (sublistCollection && sublistCollection.length > 0) {
    sublistCollection.forEach((sublist) => sublist.classList.remove('active'));
  }
  /**
   * @type {HTMLElement}
   */
  const isMenuItemTitle = event.target.classList.contains(
    'menu_header_main_menu_has_children'
  );

  if (isMenuItemTitle) {
    const sublist = event.target.querySelector(
      '.menu_header_main_menu_has_children__sublist'
    );

    if (!sublist) {
      return;
    }

    sublist.classList.add('active');
  }
};
