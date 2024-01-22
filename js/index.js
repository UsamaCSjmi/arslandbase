const scrollToTop = () => {
    window.scrollTo(0, 0);
}
function call(){
    window.location.href = "tel:+919999820674";
}
function read(e){
    
    console.log(e.target);
    
} 
let readMoreBtns = document.querySelectorAll(".read-more");
readMoreBtns.forEach((btn)=>{
    btn.addEventListener("click",(e)=>{
        let span = e.target.parentElement.getElementsByTagName("span")[0];
        if(span.style.display == "none"){
            span.style.display = "block";
            e.target.innerText = "Show Less";
        }
        else{
            span.style.display = "none";
            e.target.innerText = "Read More";
        }
    })
});
function hide_career(){
    document.getElementById("career-form").style.display = "none";
}
function show_career(){
    document.getElementById("career-form").style.display = "flex";
}
function show_properties(){
    var type = document.getElementById("type_search").value;
    var areaWithSpaces = document.getElementById("area_search").value;
    areaWithSpaces = areaWithSpaces.trim(); 
    area = areaWithSpaces.split(" ");
    var formatted = "";
    for(i = 0 ; i < area.length-1 ; i ++ ){
        if(area[i] != " "){
            formatted = formatted + area[i] + "-";
        }
    }
    if(area[i] != " "){
        formatted = formatted + area[i];
    }
    const url = "properties/services/"+type+"/"+formatted;
    window.location.href = url;
}
function showQuickEnq(){
    let quick = document.getElementById("quick-enq");
    quick.style.display = "flex";
}
function hideQuickEnq(){
    let quick = document.getElementById("quick-enq");
    quick.style.display = "none";
}