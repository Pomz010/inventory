export default class UserMenu{
    show(icon){
        icon.addEventListener('click', () => {
            icon.nextElementSibling.classList.remove('hidden');
        })
    }
}