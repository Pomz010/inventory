import Accordion from "./modules/Accordion.mjs";

const accordionItems = document.querySelector('#accordionItems');
const accordionContainer = document.querySelector('#sidebar');
const accordionHeaders = Array.from(accordionContainer.children);


accordionHeaders.forEach(header => {
    const accordion = new Accordion();
    header.addEventListener('click', function(){
        accordion.show(accordionHeaders);
    });
});