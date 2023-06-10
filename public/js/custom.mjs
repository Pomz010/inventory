import Accordion from "./modules/Accordion.mjs";
import UserMenu from "./modules/UserMenu.mjs"
// import HardwareAssets from "./modules/HardwareAssets.mjs";


document.addEventListener("DOMContentLoaded", function() {
  // Code to run when the DOM content has finished loading
  try {
    const accordionContainer = document.querySelector('#sidebar');
    const accordionHeaders = Array.from(accordionContainer.children);
    const avatarIcon = document.querySelector('#userAvatar');
    // const tabHeaders = document.querySelector('#hardwareTabs');
    const accordion = new Accordion();
    const userMenu = new UserMenu();
    // const assets = new HardwareAssets();
      accordion.showItems(accordionHeaders);
      userMenu.show(avatarIcon);
      // assets.showTabContent(tabHeaders);
  } catch (error) {
    
  }
});

