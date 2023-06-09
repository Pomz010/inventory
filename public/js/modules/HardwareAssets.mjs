export default class HardwareAssets{
    showTabContent(ht){
        ht.children.forEach(htItem => {
            tab.addEventListener('click', () => {
                console.log(htItem);
            })
        });
        
    }
}