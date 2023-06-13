export default class Assets{
    show(assetMenu, tabContent){
        console.log(tabContent.children);
        console.log(assetMenu.children);
        const menu = Array.from(assetMenu.children);
        menu.forEach(list => {
            list.addEventListener('click', e => {
                console.log(e.target);
            })
        })
    }

}