import UserMenu from "./modules/UserMenu.mjs"
import Assets from "./modules/Assets.mjs";
import MainNav from "./modules/MainNav.mjs";
// import Helper from "./modules/helper.mjs";


  const assets = new Assets();
  const mainNav = new MainNav();

// Event listener for User Avatar Menu
//Shows menu when user avatar is clicked
document.addEventListener('DOMContentLoaded', e => {
  try {
    const avatarIcon = document.querySelector('#userAvatar');
    const userMenu = new UserMenu();

      userMenu.show(avatarIcon);    
  } catch (error) {
  }
})


// Event listener for URL Routing
// Event will only execute for root domain
  if(window.location.pathname === '/'){
    document.addEventListener('DOMContentLoaded', () => { 
      try {

        //Store index number to local storage and use it to identify active nav state in main nav
        localStorage.setItem('navIndex', 1);

        //retrieved stored index number and pass it as an argument to activeNav to show currently selected nav in main nav
        mainNav.activeNav(localStorage.getItem('navIndex'));
      } catch (error) {
      }
    })
  }
  

// Event will only execute under /assets/* route
  if(window.location.pathname === '/assets' || window.location.pathname.includes('/create-asset')){
    document.addEventListener('DOMContentLoaded', () => { 
      try {
        const assetMenu = document.querySelector('#assetMenu');
        const newAssetEntryTable = document.querySelector('#newEntryTable');
        const tonerTab = document.querySelector('#tonerTab');
        const hardwareCategory = document.querySelector('#hardwareCategory');
        assets.show(assetMenu); // Shows submenu from Asset Monitoring main nav 
        assets.dropdown(newAssetEntryTable); // Select asset category and route to asset entry form
        assets.dropdown(tonerTab); // Select from Toner Balance or Toner Transactions
        assets.selectCategory(hardwareCategory); // Select asset category & display asset table
  
        localStorage.setItem('navIndex', 2);
        mainNav.activeNav(localStorage.getItem('navIndex'));
      } catch (error) {
      }
    })
  }

  // Event will only execute under /department route
  if(window.location.pathname === '/department'){
    document.addEventListener('DOMContentLoaded', () => { 
      try {
        const departmentTabs = document.querySelector('#departmentTabs');
        const newDepartmentBtn = document.querySelector('#newDepartment');
        assets.show(departmentTabs);
        assets.dropdown(newDepartmentBtn);

        localStorage.setItem('navIndex', 3);
        mainNav.activeNav(localStorage.getItem('navIndex'));
      } catch (error) {
      }
    })
  }

  
  if(window.location.pathname.includes('/create-asset')){
    document.addEventListener('DOMContentLoaded', () => { 
      const entryBtn = document.querySelector('#newEntry');
  
      mainNav.activeNav(localStorage.getItem('navIndex'));
      assets.dropdown(entryBtn);
    })
  }


