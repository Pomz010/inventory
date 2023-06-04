import Accordion from "./modules/Accordion.mjs";

const accordionItems = document.querySelector('#accordionItems');
const accordionContainer = document.querySelector('#sidebar');
const accordionHeaders = Array.from(accordionContainer.children);



accordionHeaders.forEach(header => {
    const accordion = new Accordion();

    document.addEventListener("DOMContentLoaded", function() {
        // Code to run when the DOM content has finished loading
        accordion.show(accordionHeaders);
      });
});