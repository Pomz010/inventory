export default class UserMenu{
    show(icon){
        // Shows & hide menu when user's avatar is clicked
        icon.addEventListener('click', () => {
            const avatarMenu = icon.nextElementSibling;
            avatarMenu.classList.toggle('hidden');
            this.hide(icon, avatarMenu);
        })
    }

    hide(icon, menu){
        // Hides menu when user clicks anywhere on the browser except on the user's avartar and inside the menu itself.
        document.addEventListener('click', (event) => {
            if(!menu.contains(event.target) && !icon.contains(event.target)){
                menu.classList.add('hidden');
            }
        })
    }
}