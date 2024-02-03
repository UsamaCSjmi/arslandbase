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
function isChar(s){
    if((s>='A' && s<='Z')||(s>='a'&&s<='z')||(s==' ')){
        return true;
    }
    else{
        return false;
    }
}
function isName(str){
    let isValid = true;
    for(i=0;i<str.length;i++){
        if(!isChar(str[i])){
            isValid=false;
            break;
        }
    }
    return isValid;
}
// let forms = document.querySelectorAll('form');
// forms.forEach((form)=>{
//     form.addEventListener('submit',(event)=>{
//         event.preventDefault();
//         let str = form.querySelector('[name="name"]');
//         if(str.value!=null && !isName(str.value)){
//             str.value="";
//             str.classList.add("invalid-input");
//         }
//         else{
//             str.classList.remove("invalid-input");
//             form.submit();
//         }
//     });

// });
let nameElements = document.querySelectorAll("input[name='name']");
nameElements.forEach((name)=>{
    name.addEventListener('change',(event)=>{
        if(name.value!="" && !isName(name.value)){
            name.value="";
            name.classList.add("invalid-input");
        }
        else{
            name.classList.remove("invalid-input");
        }
    });
});