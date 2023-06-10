export default class Accordion{
    showItems(headers){
        headers.forEach(header => {
            header.firstElementChild.addEventListener('click', () => {
                if(header.lastElementChild.classList.contains('hidden')){
                    header.lastElementChild.classList.remove('hidden');
                } else {
                    header.lastElementChild.classList.add('hidden');
                }
                header.firstElementChild.lastElementChild.firstElementChild.classList.add('rotate-180');
                this.hideItems(headers, header);
            })
            const accordionTabs = Array.from(header.lastElementChild.children);
            // console.log(accordionTabs);
            this.showItemTab(accordionTabs);
        });
    }

    hideItems(hs, activeHeader){
        hs.forEach(header => {
            if(header !== activeHeader){
                header.lastElementChild.classList.add('hidden');
                header.firstElementChild.lastElementChild.firstElementChild.classList.remove('rotate-180');
            }
        })
    }

    showItemTab(tabs){
        tabs.forEach(tab => {
            tab.addEventListener('click', e => {
                console.log(e.target.pathname);
                const hrefValue = e.target.pathname;
                console.log(tab);
                // this.pageRequest(hrefValue);
                // e.preventDefault();
            })
        })
    }

    pageRequest(route){
        fetch(route, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            // Update the DOM with the received HTML
            document.querySelector('main').innerHTML = html;
        })
        .catch(error => {
            // Handle any error that occurs during the Fetch request
            console.error(error);
        });
    }
}