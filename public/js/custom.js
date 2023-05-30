const accordionItems = document.querySelector('#accordionItems');
const accordionContainer = document.querySelector('#sidebar');
const accordionHeader = Array.from(accordionContainer.children);


accordionHeader.forEach(header => {
    header.addEventListener('click', function(){
        console.log(header.lastElementChild.classList.toggle('hidden'));
    });
});