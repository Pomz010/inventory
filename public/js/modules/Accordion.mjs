export default class Accordion{
    show(headers){
        headers.forEach(header => {
            header.addEventListener('click', () => {
                header.lastElementChild.classList.remove('hidden');
                header.firstElementChild.lastElementChild.firstElementChild.classList.add('rotate-180');
                this.hide(headers, header);
                console.log(header.firstElementChild.lastElementChild.firstElementChild);
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