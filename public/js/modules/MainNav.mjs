export default class MainNav{
    // constructor(mainNavItems){
    //     this.mainNavItems = mainNavItems;
    // }

    // setIndex(){
    //     const navLogo = document.querySelector('#navLogo');
    //     const mainNavItems = Array.from(document.querySelector('#mainNav').children);
    //     console.log(mainNavItems);

    //     mainNavItems.forEach(item => {
    //         item.addEventListener('click', e => {
    //             let navIndex = mainNavItems.indexOf(item);
    //             localStorage.setItem('navIndex', navIndex);
    //             console.log(typeof(navIndex));
    //             this.activeNav(localStorage.getItem('navIndex'));
    //             console.log(localStorage.getItem('navIndex'));
    //             e.preventDefault();
    //         })

    //         if(window.location.href === 'http://127.0.0.1:8000/'){
    //             localStorage.clear();
    //             localStorage.setItem('navIndex', 1);
    //             this.activeNav(1);
    //         }
    //     });

    //     navLogo.addEventListener('click', e => {
    //         localStorage.clear();
    //         localStorage.setItem('navIndex', 1);
    //         e.preventDefault();
    //     })
    // }

    activeNav(index){        
        // document.addEventListener('DOMContentLoaded', () => {
            document.querySelector(`#mainNav li:nth-child( ${ index } )`).classList.add('activeNav');
            console.log(index);
            // console.log(window.location.pathname);
            // const str = window.location.pathname;
            // if(str.includes('/create-asset')){
            //     console.log('pogi');
            // }
        // })
    }
}