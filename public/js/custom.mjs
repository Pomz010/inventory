import UserMenu from "./modules/UserMenu.mjs"
import Assets from "./modules/Assets.mjs";


document.addEventListener("DOMContentLoaded", function() {
  // Code to run when the DOM content has finished loading
  try {
    const avatarIcon = document.querySelector('#userAvatar');
    const tableContainer = document.querySelector('#tableContainer');
    const assetMenu = document.querySelector('#assetMenu');
    const toner = document.querySelector('#toner');
    const hardwareCategory = document.querySelector('#hardwareCategory');
    const userMenu = new UserMenu();
    const assets = new Assets();
      userMenu.show(avatarIcon);
      assets.show(assetMenu, tableContainer);
      assets.dropdown(toner);
      assets.selectCategory(hardwareCategory);
  } catch (error) {
    
  }
});

