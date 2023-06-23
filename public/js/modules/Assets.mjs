export default class Assets{

    selectCategory(category){
        // const categories = Array.from(document.querySelector('#categories').children);
        // this.showTable(category.value);

        category.addEventListener('change', e => {
            console.log(category.value);
            this.showTable(category.value);
        })
    }

    show(assetMenu, tabContent){
        const tabs = Array.from(assetMenu.children);
        // console.log(assetMenu);
        tabs.forEach(list => {
            
            let tableName;
            if(list.childElementCount > 1) {
                const tables = Array.from(list.lastElementChild.children);
                tables.forEach(table => {
                    table.addEventListener('click', e => {
                        tableName = table.innerText;
                        // console.log(table.parentElement.parentElement);
                        this.hide(tabs, tableName)
                        this.showTable(tableName);
                    })
                })
            } else {
                list.addEventListener('click', e => {
                    list.setAttribute('class', 'activeTab');
                    this.hide(tabs, list);
                    this.showTable(list.innerText);
                })

                if(list.classList.contains('activeTab')){
                    this.showTable(list.innerText);
                    this.hide(tabs, list);
                    console.log(list.innerText);
                }
            }

        })
    }

    hide(tabs, activeTab){
        tabs.forEach(tab => {
            if(tab.classList.contains('activeTab') && tab !== activeTab){
                tab.classList.remove('activeTab', 'bg-blue-600');
                tab.classList.add('btnPadding');
                this.showTable(activeTab);
            }
        })
    }

    showTable(tab){    
        console.log(tab)   
        let table;
        const tonerTab = document.querySelector('#toner');
        const categories = Array.from(document.querySelector('#categories').children);
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
                // tonerTab = document.querySelector('#toner');
                table = document.querySelector('#tonerBalanceTable');
                table.classList.remove('hidden');
                this.hideTable(table);
                tonerTab.setAttribute('class', 'activeTab')
                // console.log(table);
                break;

            case 'Transactions':
                // tonerTab = document.querySelector('#toner');
                table = document.querySelector('#tonerTransactionsTable');
                table.classList.remove('hidden');
                this.hideTable(table);
                tonerTab.setAttribute('class', 'activeTab')
                // console.log(table);
                break;

            case 'all-assets':
                table = document.querySelector('#assetsTable');
                categories.forEach(category => {
                    if(category.id !== 'all-assets'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                this.hideTable(table);
                // console.log(table);
                break;

            case 'system unit':
                // tonerTab = document.querySelector('#toner');
                table = document.querySelector('#systemUnit');
                categories.forEach(category => {
                    if(category.id !== 'systemUnit'){
                        category.classList.add('hidden');
                    }
                })
                table.classList.remove('hidden');
                break;

            case 'laptop':
                // tonerTab = document.querySelector('#toner');
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

    hideTable(visibleTable){
        const tables = Array.from(document.querySelector('#tableContainer').children);
        tables.forEach(assetTable => {
            if(assetTable !== visibleTable) {
                assetTable.classList.add('hidden');
            }
        })
    }

    dropdown(tonerTab){
        tonerTab.addEventListener('mouseover', e => {
            const tonerDropdown = tonerTab.lastElementChild;
            const tonerDropdownItems = Array.from(tonerTab.lastElementChild.children);

            tonerDropdown.addEventListener('mouseleave', e => {
                tonerDropdown.classList.add('hidden');
            })

            tonerTab.addEventListener('mouseleave', e => {
                tonerDropdown.classList.add('hidden');
            })

            tonerDropdownItems.forEach(item => {
                item.addEventListener('click', e => {
                    tonerDropdown.classList.add('hidden');
                    this.show(item);
                })
            })

            tonerDropdown.classList.remove('hidden')
        })
    }

}