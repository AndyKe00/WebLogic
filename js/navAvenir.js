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

    if (check1.checked == true) {
        sec1.style.display = "none";
        lab1.style.borderRadius = "30px";
        check1.parentElement.style.transform = "scaleY(-1)";
    }
    else {
        sec1.style.display = "flex";
        lab1.style.borderBottomLeftRadius = "0px";
        lab1.style.borderBottomRightRadius = "0px";
        check1.parentElement.style.transform = "scaleY(1)";
    }
});

lab2.addEventListener('click',function verifieCheck2() {

if (check2.checked == true) {
    sec2.style.display = "none";
    lab2.style.borderRadius = "30px";
    check2.parentElement.style.transform = "scaleY(-1)";
}
else {
    sec2.style.display = "flex";
    lab2.style.borderBottomLeftRadius = "0px";
    lab2.style.borderBottomRightRadius = "0px";
    check2.parentElement.style.transform = "scaleY(1)";
}
});
lab3.addEventListener('click',

function verifieCheck3() {

if (check3.checked == true) {
    sec3.style.display = "none";
    lab3.style.borderRadius = "30px";
    check3.parentElement.style.transform = "scaleY(-1)";
}
else {
    sec3.style.display = "flex";
    lab3.style.borderBottomLeftRadius = "0px";
    lab3.style.borderBottomRightRadius = "0px";
    check3.parentElement.style.transform = "scaleY(1)";
}
});
lab4.addEventListener('click',
function verifieCheck4() {

if (check4.checked == true) {
    sec4.style.display = "none";
    lab4.style.borderRadius = "30px";
    check4.parentElement.style.transform = "scaleY(-1)";
}
else {
    sec4.style.display = "flex";
    lab4.style.borderBottomLeftRadius = "0px";
    lab4.style.borderBottomRightRadius = "0px";
    check4.parentElement.style.transform = "scaleY(1)";
}
});

function verifieCheck1() {

if (check1.checked == true) {
    sec1.style.display = "none";
    lab1.style.borderRadius = "30px";
}
else {
    sec1.style.display = "flex";
    lab1.style.borderBottomLeftRadius = "0px";
    lab1.style.borderBottomRightRadius = "0px";
}
}

function verifieCheck2() {

if (check2.checked == true) {
    sec2.style.display = "none";
    lab2.style.borderRadius = "30px";
}
else {
    sec2.style.display = "flex";
    lab2.style.borderBottomLeftRadius = "0px";
    lab2.style.borderBottomRightRadius = "0px";
}
}

function verifieCheck3() {

if (check3.checked == true) {
    sec3.style.display = "none";
    lab3.style.borderRadius = "30px";
}
else {
    sec3.style.display = "flex";
    lab3.style.borderBottomLeftRadius = "0px";
    lab3.style.borderBottomRightRadius = "0px";
}
}

function verifieCheck4() {

if (check4.checked == true) {
    sec4.style.display = "none";
    lab4.style.borderRadius = "30px";
}
else {
    sec4.style.display = "flex";
    lab4.style.borderBottomLeftRadius = "0px";
    lab4.style.borderBottomRightRadius = "0px";
}
}



