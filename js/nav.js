if(window.screen.width <= 1024){
    document.getElementById('first-nav').classList.add('show-mobile')
}
window.onresize = function() { 
    if(window.screen.width <= 1024){
        document.getElementById('first-nav').classList.add('show-mobile')
    }          
    if(window.screen.width > 1024){
        document.getElementById('first-nav').classList.remove('show-mobile')
    }
}; 
async function showMenu(){
    var firstNav = await document.getElementById('first-nav');
    var crossBtn = await document.getElementById('cross-btn');
    firstNav.classList.add('open') 
    crossBtn.style.left = '70%';
}

async function hideMenu(){
    var firstNav = await document.getElementById('first-nav');
    var crossBtn = await document.getElementById('cross-btn');
    firstNav.classList.remove('open') 
    crossBtn.style.left = '-30%';
}