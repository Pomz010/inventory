export default function getIndex(tabName){
    
    let activeTab = '';
    const mainNavTabs = Array.from(document.querySelector('#mainNav').children);

    mainNavTabs.forEach(tab => {

        if(tabName === tab.innerText.toLowerCase()){
            activeTab = mainNavTabs.indexOf(tab)+1;
        }
        
    });

    return activeTab;

}

// export default function 