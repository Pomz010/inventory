import Accordion from "./modules/Accordion.mjs";
import UserMenu from "./modules/UserMenu.mjs"


document.addEventListener("DOMContentLoaded", function() {
  // Code to run when the DOM content has finished loading
  try {
    const accordionContainer = document.querySelector('#sidebar');
    const accordionHeaders = Array.from(accordionContainer.children);
    const avatarIcon = document.querySelector('#userAvatar');
    const accordion = new Accordion();
    const userMenu = new UserMenu();
      accordion.show(accordionHeaders);
      userMenu.show(avatarIcon);
  } catch (error) {
    
  }
});