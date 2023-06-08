let hide_text_btn =document.getElementById('hide_text_btn');

let hide_text=document.getElementById('hide_text');

hide_text_btn.addEventListener('click',toogletext);

function toogletext(){
    hide_text.classList.toggle('show');
}