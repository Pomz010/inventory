import UserMenu from "./modules/UserMenu.mjs"
import Assets from "./modules/Assets.mjs";
import MainNav from "./modules/MainNav.mjs";


  // Code to run when the DOM content has finished loading
  // const mainNavItems = Array.from(document.querySelector('#mainNav').children);
  const assets = new Assets();
  const mainNav = new MainNav();

  if(window.location.pathname === '/'){
    document.addEventListener('DOMContentLoaded', () => { 
        const avatarIcon = document.querySelector('#userAvatar');
        const entryBtn = document.querySelector('#newEntry');
        const userMenu = new UserMenu();
          userMenu.show(avatarIcon);

          localStorage.setItem('navIndex', 1);
          mainNav.activeNav(localStorage.getItem('navIndex'));
    })
  }
  

  if(window.location.pathname === '/assets' || window.location.pathname.includes('/create-asset')){
    document.addEventListener('DOMContentLoaded', () => { 
      try {
        const assetMenu = document.querySelector('#assetMenu');
        const tableContainer = document.querySelector('#tableContainer');
        const newAssetEntryTable = document.querySelector('#newEntryTable');
        const toner = document.querySelector('#toner');
        const hardwareCategory = document.querySelector('#hardwareCategory');
        assets.show(assetMenu, tableContainer);
        assets.dropdown(newAssetEntryTable);
        assets.dropdown(toner);
        assets.selectCategory(hardwareCategory);
  
        localStorage.setItem('navIndex', 2);
        console.log(localStorage.getItem('navIndex'));
        mainNav.activeNav(localStorage.getItem('navIndex'));
      } catch (error) {
      }
    })
  }

  
  if(window.location.pathname.includes('/create-asset')){
    document.addEventListener('DOMContentLoaded', () => { 
      // const mainNavItems = Array.from(document.querySelector('#mainNav').children);
      const entryBtn = document.querySelector('#newEntry');
  
      mainNav.activeNav(localStorage.getItem('navIndex'));
  
      if(entryBtn !== null){
        assets.dropdown(entryBtn);
      }
    })
  }

