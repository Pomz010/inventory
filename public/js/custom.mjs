import Accordion from "./modules/Accordion.mjs";
import UserMenu from "./modules/UserMenu.mjs"
// import ModalForm from "./modules/ModalForm.mjs";


document.addEventListener("DOMContentLoaded", function() {
  // Code to run when the DOM content has finished loading
  try {
    const accordionContainer = document.querySelector('#sidebar');
    const accordionHeaders = Array.from(accordionContainer.children);
    const avatarIcon = document.querySelector('#userAvatar');
    // const accordionItems = document.querySelector('.accordionItems').children;
    const accordion = new Accordion();
    const userMenu = new UserMenu();
    // const modalForm = new ModalForm();
      accordion.showItems(accordionHeaders);
      userMenu.show(avatarIcon);
    //   modalForm.showModal(accordionHeaders);
  } catch (error) {
    
  }
});