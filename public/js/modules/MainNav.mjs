export default class MainNav{
    constructor(mainNavItems){
        this.mainNavItems = mainNavItems;
    }

    setIndex(){
        const navLogo = document.querySelector('#navLogo');

        navLogo.addEventListener('click', e => {
            localStorage.setItem('navIndex', 1);
            console.log(e.target);
            // e.preventDefault();
        })

        this.mainNavItems.forEach(item => {
            item.addEventListener('click', e => {
                let navIndex = this.mainNavItems.indexOf(item) + 1;
                console.log(e.target);
                localStorage.setItem('navIndex', navIndex);
                // e.preventDefault();
            })
        });
    }

    activeNav(index){
        console.log(index);
        document.querySelector(`#mainNav li:nth-child( ${ index } )`).classList.add('activeNav');
    }
}