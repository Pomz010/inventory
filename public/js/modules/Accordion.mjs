export default class Accordion{
    show(headers){
        headers.forEach(header => {
            header.firstElementChild.addEventListener('click', () => {
                if(header.lastElementChild.classList.contains('hidden')){
                    header.lastElementChild.classList.remove('hidden');
                } else {
                    header.lastElementChild.classList.add('hidden');
                }
                header.firstElementChild.lastElementChild.firstElementChild.classList.add('rotate-180');
                this.hide(headers, header);
            })
        });
    }

    hide(hs, activeHeader){
        hs.forEach(header => {
            if(header !== activeHeader){
                header.lastElementChild.classList.add('hidden');
                header.firstElementChild.lastElementChild.firstElementChild.classList.remove('rotate-180');
            }
        })
    }
}