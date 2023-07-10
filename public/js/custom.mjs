import UserMenu from "./modules/UserMenu.mjs"
import MainNav from "./modules/MainNav.mjs";
import getIndex from "./modules/helper.mjs";
import TabContents from "./modules/Assets.mjs";

// Event listener for User Avatar Menu
//Shows menu when user avatar is clicked
document.addEventListener('DOMContentLoaded', e => {

  try {

    const avatarIcon = document.querySelector('#userAvatar');
    const avatarMenu = avatarIcon.nextElementSibling;
    const userMenu = new UserMenu(avatarIcon, avatarMenu);

      userMenu.show; 

  } catch (error) {
  }
})


// Event listener for URL Routing
// Event will only execute for root domain
  if(window.location.pathname === '/'){

    document.addEventListener('DOMContentLoaded', () => {
      
      try {
        
        const indexNumber = getIndex('dashboard');
        const dashboardTab = new MainNav(indexNumber);

        //retrieved stored index number and pass it as an argument to activeNav to show currently selected nav in main nav
        dashboardTab.setActiveTab();

      } catch (error) {
      }

    })
  }
  

// Event will only execute under /assets or /create-asset route
  if(window.location.pathname === '/assets' || window.location.pathname.includes('/create-asset')){
    
    document.addEventListener('DOMContentLoaded', () => { 

      const indexNumber = getIndex('asset monitoring');
      const assetMonitoringTab = new MainNav(indexNumber);
      assetMonitoringTab.setActiveTab();

      try {
        
        const assetMonitoringTabs = document.querySelector('#assetMenu');
        const newAssetEntryTable = document.querySelector('#newEntryTable');
        const tonerTab = document.querySelector('#tonerTab');
        const hardwareCategory = document.querySelector('#hardwareCategory');
        const hardwareTab = new TabContents(assetMonitoringTabs, hardwareCategory);
        
        hardwareTab.showActiveTab(); // Shows submenu from Asset Monitoring main nav 
        hardwareTab.dropdown(newAssetEntryTable); // Select asset category and route to asset entry form
        hardwareTab.dropdown(tonerTab); // Select from Toner Balance or Toner Transactions
        hardwareTab.selectCategory(hardwareCategory); // Select asset category & display asset table

      } catch (error) {
        console.log(error);
      } finally{

        const formEntry = new TabContents();
        const entryBtnForm = document.querySelector('#newEntry');
        formEntry.dropdown(entryBtnForm);

      }
    })
  }

  // Event will only execute under /department or /create-department route
  if(window.location.pathname === '/department' || window.location.pathname.includes('/create-department')){

    document.addEventListener('DOMContentLoaded', () => { 

      const indexNumber = getIndex('department');
      const departmentTab = new MainNav(indexNumber);
      departmentTab.setActiveTab();

      try {

        const departmentTabs = document.querySelector('#departmentTabs');
        const newDepartmentBtn = document.querySelector('#newDepartment');
        const departments = new TabContents(departmentTabs);
        departments.dropdown(newDepartmentBtn);
        departments.showActiveTab();

      } catch (error) {
        console.log(error);
      }

    })
  }


  // Event will only execute under /employees or /create-employee route
  if(window.location.pathname === '/employees' || window.location.pathname.includes('/create-employee')){

    document.addEventListener('DOMContentLoaded', () => { 

      const indexNumber = getIndex('employee list');
      const employeeListTab = new MainNav(indexNumber);
      employeeListTab.setActiveTab();

    })

  }

  // Event will only execute under /users or /create-user route
  if(window.location.pathname === '/users' || window.location.pathname === '/create-user'){

    document.addEventListener('DOMContentLoaded', () => { 

      const indexNumber = getIndex('users');
      const usersTab = new MainNav(indexNumber);
      usersTab.setActiveTab();

    })

  }

  // Event will only execute under /vendors or /create-vendor route
  if(window.location.pathname === '/vendors' || window.location.pathname === '/create-vendor'){

    document.addEventListener('DOMContentLoaded', () => { 

      const indexNumber = getIndex('vendor');
      const vendorsTab = new MainNav(indexNumber);
      vendorsTab.setActiveTab();

    })

  }





