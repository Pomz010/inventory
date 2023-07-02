export default class Assets{

    selectCategory(category){
        category.addEventListener('change', e => {
            console.log(category.value);
            this.showTable(category.value);
        })
    }

    // Displays submenu from main nav
    show(assetMenu){

        const tabs = Array.from(assetMenu.children); //Sub menu items

        tabs.forEach(tab => {
            let tableName; 

            if(tab.childElementCount > 1 ) { // Runs when submenu item is a dropdown item
                const tables = Array.from(tab.lastElementChild.children);
                tables.forEach(table => {
                    tableName = table.innerText; // Gets the selected table name

                    if(tableName === 'Business Unit' || tableName === 'Department'){
                        console.log(localStorage.getItem('navIndex'));
                    } else {
                        table.addEventListener('click', e => {
                            tableName = table.innerText; // Gets the selected table name when clicked
                            this.hide(tabs, tableName) // Hides the table that is not selected 
                            this.showTable(tableName); // Shows the table of the selected table name
                            e.preventDefault();
                        })
                    }

                })
            } else {
                tab.addEventListener('click', e => { // Runs when submenu is not a dropdown menu
                    tab.setAttribute('class', 'activeTab'); // Show as selected or active tab when selected 
                    this.hide(tabs, tab); // Removes as active tab 
                    this.showTable(tab.innerText); // Displays table for the tab that is selected from the submenu
                    e.preventDefault();
                })

                if(tab.classList.contains('activeTab')){ // Displays default table based on default selected tab from submenu
                    this.showTable(tab.innerText);
                    this.hide(tabs, tab);
                    console.log(tab.innerText);
                }
            }

        })
    }

    hide(tabs, activeTab){ // Removes css properties menu tabs that are not currently active
        tabs.forEach(tab => {
            if(tab.classList.contains('activeTab') && tab !== activeTab){
                tab.classList.remove('activeTab', 'bg-blue-600');
                tab.classList.add('btnPadding');
            }
        })
    }

    showTable(tab){ // Displays table based on the selected menu tab
        console.log(tab)   
        const tonerTab = document.querySelector('#tonerTab');
        const categories = Array.from(document.querySelector('#categories').children);
        let visibleTable;

        switch (tab) {
            case 'Hardware':
                visibleTable = document.querySelector('#hardwareTable');
                visibleTable.classList.remove('hidden');
                this.hideTable(visibleTable);
                break;

            case 'Software':
                visibleTable = document.querySelector('#softwareTable');
                visibleTable.classList.remove('hidden');
                this.hideTable(visibleTable);
                break;

            case 'Balance':
                visibleTable = document.querySelector('#tonerBalanceTable');
                visibleTable.classList.remove('hidden');
                this.hideTable(visibleTable);
                tonerTab.setAttribute('class', 'activeTab')
                // console.log(table);
                break;

            case 'Transactions':
                visibleTable = document.querySelector('#tonerTransactionsTable');
                visibleTable.classList.remove('hidden');
                this.hideTable(visibleTable);
                tonerTab.setAttribute('class', 'activeTab')
                break;

            case 'Business Unit':
                visibleTable = document.querySelector('#businessUnit');
                visibleTable.classList.remove('hidden');
                this.hideTable(visibleTable);
                break;

            case 'Departments':
                visibleTable = document.querySelector('#departmentsTable');
                visibleTable.classList.remove('hidden');
                this.hideTable(visibleTable);
                break;

            case 'Section':
                visibleTable = document.querySelector('#sectionsTable');
                visibleTable.classList.remove('hidden');
                this.hideTable(visibleTable);
                break;

            case 'all-assets':
                visibleTable = document.querySelector('#assetsTable');
                categories.forEach(category => {
                    if(category.id !== 'all-assets'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            case 'system unit':
                visibleTable = document.querySelector('#systemUnit');
                categories.forEach(category => {
                    if(category.id !== 'systemUnit'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            case 'laptop':
                visibleTable = document.querySelector('#laptop');
                categories.forEach(category => {
                    if(category.id !== 'laptop'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            case 'monitor':
                visibleTable = document.querySelector('#monitor');
                categories.forEach(category => {
                    if(category.id !== 'monitor'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            case 'printer':
                visibleTable = document.querySelector('#printer');
                categories.forEach(category => {
                    if(category.id !== 'printer'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            case 'ups':
                visibleTable = document.querySelector('#ups');
                categories.forEach(category => {
                    if(category.id !== 'ups'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            case 'router':
                visibleTable = document.querySelector('#router');
                categories.forEach(category => {
                    if(category.id !== 'router'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            case 'firewall':
                visibleTable = document.querySelector('#firewall');
                categories.forEach(category => {
                    if(category.id !== 'firewall'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            case 'switch':
                visibleTable = document.querySelector('#switch');
                categories.forEach(category => {
                    if(category.id !== 'switch'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            case 'access point':
                visibleTable = document.querySelector('#accessPoint');
                categories.forEach(category => {
                    if(category.id !== 'accessPoint'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            case 'mobile devices':
                visibleTable = document.querySelector('#mobileDevice');
                categories.forEach(category => {
                    if(category.id !== 'mobileDevice'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            case 'others':
                visibleTable = document.querySelector('#others');
                categories.forEach(category => {
                    if(category.id !== 'others'){
                        category.classList.add('hidden');
                    }
                })
                visibleTable.classList.remove('hidden');
                break;

            default:
                break;
        }
    }

    hideTable(visibleTable){ // Hides table when category is not already selected
        const tables = Array.from(document.querySelector('#tableContainer').children);
        tables.forEach(table => {
            if(table !== visibleTable) {
                table.classList.add('hidden');
            }
        })
    }

    dropdown(hoveredTab){ // Hover dropdown menu feature
        hoveredTab.addEventListener('mouseover', e => {
            const dropdownContainer = hoveredTab.lastElementChild;
            const dropdownItems = Array.from(hoveredTab.lastElementChild.children);

            hoveredTab.addEventListener('mouseleave', e => {
                dropdownContainer.classList.add('hidden');
            })

            dropdownItems.forEach(item => {
                item.addEventListener('click', e => {
                    dropdownContainer.classList.add('hidden');
                    this.show(item);
                })
            })

            dropdownContainer.classList.remove('hidden')
        })
    }

}