const navtoggler =document.querySelector("#navtoggler");
const navlinks =document.querySelector("#navlinks");
const navbutton =document.querySelector("#navbutton");

if(navtoggler){
    navtoggler.addEventListener('click',()=>{
        if(navlinks.classList.contains('hidden')){
            navlinks.classList.remove('hidden');
        }else{
            navlinks.classList.add('hidden');
        }
    })
}
