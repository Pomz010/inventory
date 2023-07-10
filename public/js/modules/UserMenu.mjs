export default class UserMenu{
    constructor(avatarIcon, avatarMenu){
        this.avatarIcon = avatarIcon;
        this.avatarMenu = avatarMenu;
    }

    get show(){
        // Shows & hide menu when user's avatar is clicked
        this.avatarIcon.addEventListener('click', () => {
            this.avatarMenu.classList.toggle('hidden');
            this.hide(avatarIcon, avatarMenu);
            // console.log(icon);
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