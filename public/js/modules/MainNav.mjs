export default class MainNav{
    constructor(mainNavItems){
        this.mainNavItems = mainNavItems;
    }

    setIndex(){
        const navLogo = document.querySelector('#navLogo');

        this.mainNavItems.forEach(item => {
            item.addEventListener('click', e => {
                let navIndex = this.mainNavItems.indexOf(item) + 1;
                localStorage.setItem('navIndex', navIndex);
                // console.log(navIndex);
                // e.preventDefault();
            })

            if(window.location.href === 'http://127.0.0.1:8000/'){
                localStorage.clear();
                localStorage.setItem('navIndex', 1);
                this.activeNav(1);
            }

        });

        navLogo.addEventListener('click', e => {
            localStorage.clear();
            localStorage.setItem('navIndex', 1);
            // e.preventDefault();
        })

        
    }

    activeNav(index){        
        document.querySelector(`#mainNav li:nth-child( ${ index } )`).classList.add('activeNav');
        console.log(index);
    }
}