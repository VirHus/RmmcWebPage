const menuItemsButton= document.querySelector('.menu_items_button');
const menuHeaderMainMenu = document.querySelector('.menu_header_main_menu');

menuItemsButton.onclick = () => menuHeaderMainMenu.classList.toggle('active');

const menuItemsParent = document.querySelector('.menu_header_main_menu')

menuItemsParent.onclick = event=> {
// console.log(event.target);
    /**
     * @type {HTMLElement}
     */
    const isMenuItemTitle = event.target.classList.contains("menu_header_main_menu_has_children");
    
    if(isMenuItemTitle && event.target.lastElementChild.tagName === 'UL' ){
        event.target.lastElementChild.classList.toggle("active")
    }
}