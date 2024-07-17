const menuItemsButton= document.querySelector('.menu_items_button');
const menuHeaderMainMenu = document.querySelector('.menu_header_main_menu');

menuItemsButton.onclick = () => menuHeaderMainMenu.classList.toggle('active');

const menuItemsParent = document.querySelector('.menu_header_main_menu')

menuItemsParent.onclick = event=> {
    const sublistCollection = [...document.querySelectorAll('.menu_header_main_menu_has_children__sublist')];

    if(sublistCollection && sublistCollection.length > 0){
        sublistCollection.forEach(sublist => sublist.classList.remove("active"));
    }
    /**
     * @type {HTMLElement}
     */
    const isMenuItemTitle = event.target.classList.contains("menu_header_main_menu_has_children");
    
    if(isMenuItemTitle){
        const sublist = event.target.querySelector('.menu_header_main_menu_has_children__sublist');
        if(!sublist){
            return;
        }

        sublist.classList.add("active")
    }
}