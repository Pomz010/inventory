export default class MainNav{
    constructor(tabIndex){
        this.tabIndex = tabIndex;
    }

    setActiveTab(){
        localStorage.setItem('tabIndex', this.tabIndex);
        this._showActiveTab(localStorage.getItem('tabIndex'));
    }

    _showActiveTab(tabIndex){
        // localStorage.getItem('tabIndex');
        document.querySelector(`#mainNav li:nth-child( ${ tabIndex } )`).classList.add('activeNav');
    }
}