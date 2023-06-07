export default class ModalForm{
    showModal(headers){
        // console.log(headers);
        headers.forEach(header => {
            const accordionItems = Array.from(header.lastElementChild.children);
            const accordionModal = document.querySelector('#accordionModal');
            // console.log(accordionItems);
            accordionItems.forEach(item => {
                // console.log(item);
                item.addEventListener('click', () => {
                    console.log(accordionModal.classList.remove('hidden'));
                })
            })
        })
    }
}