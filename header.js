const menuItemsButton= document.querySelector('.menu_items_button');
const menuHeaderMainMenu = document.querySelector('.menu_header_main_menu');

menuItemsButton.onclick = () => menuHeaderMainMenu.classList.toggle('active');