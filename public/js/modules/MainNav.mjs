export default class MainNav{
    activeNav(index){
        document.querySelector(`#mainNav li:nth-child( ${ index } )`).classList.add('activeNav');
    }
}