export default class Assets{

    selectCategory(category){
        // const categories = Array.from(document.querySelector('#categories').children);
        // this.showTable(category.value);

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

            if(tab.childElementCount > 1) { // Runs when submenu item is a dropdown item
                const tables = Array.from(tab.lastElementChild.children);
                tables.forEach(table => {
                    table.addEventListener('click', e => {
                        tableName = table.innerText; // Gets the selected table name
                        this.hide(tabs, tableName) // Hides the table that is not selected 
                        this.showTable(tableName); // Shows the table of the selected table name
                        e.preventDefault();
                    })
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
        let table;

        switch (tab) {
            case 'Hardware':
                table = document.querySelector('#hardwareTable');
                table.classList.remove('hidden');
                this.hideTable(table);
                break;

            case 'Software':
                table = document.querySelector('#softwareTable');
                table.classList.remove('hidden');
                this.hideTable(table);
                // console.log(table);
                break;

            case 'Balance':
                table = document.querySelector('#tonerBalanceTable');
                table.classList.remove('hidden');
                this.hideTable(table);
                tonerTab.setAttribute('class', 'activeTab')
                // console.log(table);
                break;

            case 'Transactions':
                table = document.querySelector('#tonerTransactionsTable');
                table.classList.remove('hidden');
                this.hideTable(table);
                tonerTab.setAttribute('class', 'activeTab')
                // console.log(table);
                break;

            case 'Business Unit':
                table = document.querySelector('#businessUnitTable');
                table.classList.remove('hidden');
                break;

            case 'all-assets':
                table = document.querySelector('#assetsTable');
                categories.forEach(category => {
                    if(category.id !== 'all-assets'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'system unit':
                table = document.querySelector('#systemUnit');
                categories.forEach(category => {
                    if(category.id !== 'systemUnit'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'laptop':
                table = document.querySelector('#laptop');
                categories.forEach(category => {
                    if(category.id !== 'laptop'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'monitor':
                table = document.querySelector('#monitor');
                categories.forEach(category => {
                    if(category.id !== 'monitor'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'printer':
                table = document.querySelector('#printer');
                categories.forEach(category => {
                    if(category.id !== 'printer'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'ups':
                table = document.querySelector('#ups');
                categories.forEach(category => {
                    if(category.id !== 'ups'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'router':
                table = document.querySelector('#router');
                categories.forEach(category => {
                    if(category.id !== 'router'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'firewall':
                table = document.querySelector('#firewall');
                categories.forEach(category => {
                    if(category.id !== 'firewall'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'switch':
                table = document.querySelector('#switch');
                categories.forEach(category => {
                    if(category.id !== 'switch'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'access point':
                table = document.querySelector('#accessPoint');
                categories.forEach(category => {
                    if(category.id !== 'accessPoint'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'mobile devices':
                table = document.querySelector('#mobileDevice');
                categories.forEach(category => {
                    if(category.id !== 'mobileDevice'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'others':
                table = document.querySelector('#others');
                categories.forEach(category => {
                    if(category.id !== 'others'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            default:
                break;
        }
    }

    hideTable(visibleTable){ // Hides table when category is not already selected
        const tables = Array.from(document.querySelector('#tableContainer').children);
        tables.forEach(assetTable => {
            if(assetTable !== visibleTable) {
                assetTable.classList.add('hidden');
            }
        })
    }

    dropdown(hoveredTab){ // Hover dropdown menu feature
        hoveredTab.addEventListener('mouseover', e => {
            // console.log(hoveredTab);
            const dropdownContainer = hoveredTab.lastElementChild;
            const dropdownItems = Array.from(hoveredTab.lastElementChild.children);

            // dropdownContainer.addEventListener('mouseleave', e => {
            //     dropdownContainer.classList.add('hidden');
            // })

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