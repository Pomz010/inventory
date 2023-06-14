export default class Assets{
    show(assetMenu, tabContent){
        const tabs = Array.from(assetMenu.children);
        tabs.forEach(list => {
            list.addEventListener('click', e => {
                list.setAttribute('class', 'activeTab');

                this.hide(tabs, list);
                // console.log(e.target.innerText);
                // this.hide(tabs, e.target.innerText);
            })
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
        console.log(tab.innerText);
        let table;
        switch (tab.innerText) {
            case 'Hardware':
                table = document.querySelector('#hardwareTable');
                table.classList.remove('hidden');
                this.hideTable(table);
                break;

            case 'All Assets':
                table = document.querySelector('#assetsTable');
                table.classList.remove('hidden');
                this.hideTable(table);
                break;

            case 'Software':
                table = document.querySelector('#softwareTable');
                table.classList.remove('hidden');
                this.hideTable(table);
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
        console.log(tonerTab);
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