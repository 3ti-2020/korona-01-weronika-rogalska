const btn1 = document.querySelector(".btn1");
const btn2 = document.querySelector(".btn2");
const btn3 = document.querySelector(".btn3");

btn1.addEventListener('click',
function(){
    console.log('Epoki włączone');
    document.querySelector(".item1").style.visibility="visible";
})

btn2.addEventListener('click',
function(){
    console.log('Obrazy włączone');
    document.querySelector(".item2").style.visibility="visible";
})

btn3.addEventListener('click',
function(){
    console.log('+++ włączone');
    document.querySelector(".item3").style.visibility="visible";
})