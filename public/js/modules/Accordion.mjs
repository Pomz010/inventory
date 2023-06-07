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
}