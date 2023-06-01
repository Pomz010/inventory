export default class Accordion{
    show(headers){
        console.log(headers);
        headers.forEach(header => {

            header.addEventListener('click', function(){
                console.log(this);
            })
            // header.lastElementChild.classList.remove('hidden');
        });
        
        // this.hide();
    }

    hide(header){
        console.log('hide');
        header.lastElementChild.classList.add('hidden');
    }
}