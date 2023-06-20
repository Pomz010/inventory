import UserMenu from "./modules/UserMenu.mjs"
import Assets from "./modules/Assets.mjs";
import MainNav from "./modules/MainNav.mjs";


document.addEventListener("DOMContentLoaded", () => {
  // Code to run when the DOM content has finished loading
  try {
    const avatarIcon = document.querySelector('#userAvatar');
    const tableContainer = document.querySelector('#tableContainer');
    const assetMenu = document.querySelector('#assetMenu');
    const toner = document.querySelector('#toner');
    const newAssetEntryTable = document.querySelector('#newEntryTable');
    const newAssetEntryForm = document.querySelector('#newEntryForm');
    const hardwareCategory = document.querySelector('#hardwareCategory');
    const userMenu = new UserMenu();
    const assets = new Assets();
      userMenu.show(avatarIcon);
      assets.show(assetMenu, tableContainer);
      assets.dropdown(toner);
      assets.dropdown(newAssetEntryTable);
      assets.dropdown(newAssetEntryForm);
      assets.selectCategory(hardwareCategory);
  } catch (error) {
    // console.log(error);
  }

  const mainNavItems = Array.from(document.querySelector('#mainNav').children);
  const mainNav = new MainNav(mainNavItems);
  let activeNav = localStorage.getItem('navIndex')*1;

  mainNav.setIndex();
  mainNav.activeNav(activeNav);
  // localStorage.setItem('navIndex', 1);
  console.log(localStorage.getItem('navIndex'));
});

