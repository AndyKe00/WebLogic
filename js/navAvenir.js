var check1 = document.getElementById("check1");
var sec1 = document.getElementById("sec1");
var lab1 = document.getElementById("lab1");

var check2 = document.getElementById("check2");
var sec2 = document.getElementById("sec2");
var lab2 = document.getElementById("lab2");

var check3 = document.getElementById("check3");
var sec3 = document.getElementById("sec3");
var lab3 = document.getElementById("lab3");

var check4 = document.getElementById("check4");
var sec4 = document.getElementById("sec4");
var lab4 = document.getElementById("lab4");

verifieCheck1();
verifieCheck2();
verifieCheck3();
verifieCheck4();

lab1.addEventListener('click',function verifieCheck1() {

    console.log("CLick");

if (check1.checked == true) {
    sec1.style.display = "none";
    console.log("Oui");
}
else {
    sec1.style.display = "flex";
    console.log("Non");
}
});

lab2.addEventListener('click',function verifieCheck2() {

    console.log("CLick2");

if (check2.checked == true) {
    sec2.style.display = "none";
}
else {
    sec2.style.display = "flex";
}
});
lab3.addEventListener('click',

function verifieCheck3() {

    console.log("CLick3");

if (check3.checked == true) {
    sec3.style.display = "none";
}
else {
    sec3.style.display = "flex";
}
});
lab4.addEventListener('click',
function verifieCheck4() {

    console.log("CLick4");

if (check4.checked == true) {
    sec4.style.display = "none";
}
else {
    sec4.style.display = "flex";
}
});

function verifieCheck1() {

    console.log("CLick");

if (check1.checked == true) {
    sec1.style.display = "none";
    console.log("Oui");
}
else {
    sec1.style.display = "flex";
    console.log("Non");
}
}

function verifieCheck2() {

    console.log("CLick2");

if (check2.checked == true) {
    sec2.style.display = "none";
}
else {
    sec2.style.display = "flex";
}
}

function verifieCheck3() {

    console.log("CLick3");

if (check3.checked == true) {
    sec3.style.display = "none";
}
else {
    sec3.style.display = "flex";
}
}

function verifieCheck4() {

    console.log("CLick4");

if (check4.checked == true) {
    sec4.style.display = "none";
}
else {
    sec4.style.display = "flex";
}
}



