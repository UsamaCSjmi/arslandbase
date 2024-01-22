// document.body.addEventListener("onload", ()=>{
//     viewProperties();
// });
const viewProperties = async (type="residential") => {
    allbtns = document.getElementsByClassName("btn-select");
    for(i = 0 ; i < allbtns.length; i++){
        btn = allbtns[i];
        if(btn.classList.contains("active-btn")){
            await btn.classList.remove("active-btn");
        }
    }
    carousel = document.getElementById("quick-info");
    button = document.getElementById("btn-"+type);
    button.classList.add("active-btn");
    await clean("quick-info");
    allProperties = document.getElementById('informative-properties');
    thisType = allProperties.getElementsByClassName(type);
    for(var i = 0 ; i < thisType.length; i++ ){
        element = thisType[i];
        newelement = element.cloneNode(true);
        newelement.classList.add("itemsd");
        // console.log(newelement);
        carousel.appendChild(newelement);
    }
}

function clean(id){
    info = document.getElementById(id);
    info.innerHTML = "";
}

viewProperties();