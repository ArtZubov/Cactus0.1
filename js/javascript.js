//alert('Zа наших!')
//console.log('Za nashih!');
//console.log('1970'+'52');
//let phone = '+79091903233';
//console.log(phone);
//const COLOR_RED="F0F0F0"
//console.log(COLOR_RED)
//const colors=['#F0F0F0', '#FFFFFF', 'black', 'red'];
//console.log(colors)
//let int = 5;
//let float = 5.98;
//let int = 010;
//int=055;
//int =0xFF;
//int = 0xB8;
//let str1= '"ECMAScript"';
/*function myFunc(str) {
    console.log(str);
}
const result = myFunc('Javascript');
console.log(result);
function sum(a, b) {
    console.log(a + b);
}
sum(2, 3);
//document.getElementById("main").textContent = "Zа наших!"
const $btn = document.querySelector('#my-btn');
$btn.onclick = function() {
    alert('Nissan Z');
}
function changeBgColor() {
    document.body.backgroundColor = `rgb(${Math.round(Math.random() * 255)}, ${Math.round(Math.random() * 255)},)`;
    document.onclick = changeBgColor;}
let text = 'Вкусный суп';
let a = text.charAt(0);
console.log(a);

let a = ['Тише', 'мыши', 'кот на крыше'];
let b = a.join(',');
console.log(b);
for(let i= 1; 1<=3; 1++ ){
    console.log(i)
}*/

/*
function CalcSum(a=0, b=0, c=5){
    var d = a + b + c;
    if(d < 10){
        return 0;
    }else if (10 < d && d < 20){
        return d + 50;
    }else if(100 < d){
        return 100;
    }
    return d;
}
var x = 7, y = 15, z = 5
let a = CalcSum(x,y,z);
console.log(a);*/

const button = document.getElementById('button');
function changeBgColor() {
    document.body.style.backgroundColor = `rgb(${Math.round(Math.random() * 255)}, ${Math.round(Math.random() * 255)}, ${Math.round(Math.random() * 255)})`;
}
button.onclick = changeBgColor;