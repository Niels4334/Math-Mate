var GetalInvoer;
var GetalTot;
var resultaat;



function calcAns() {
    document.getElementById("SomAntwoorden").innerHTML = "";
    resultaat = "";
    var keus = document.getElementById("mySelect").value;
    switch (keus) {
        case "Talstelsels":
            document.getElementById("SomAntwoorden").innerHTML = Talstelsels();
            break;
        case "Factorizer":
            document.getElementById("SomAntwoorden").innerHTML = Factorizer();
            break;
    }
}


function displayShow() {
    document.getElementById("opGetal1").style.width = "200px";
    document.getElementById("opGetal1").style.right = "69.5vw";
    document.getElementById("opGetal2").style.visibility = "visible";
    document.getElementById("opGetal3").style.visibility = "visible";
    document.getElementById("SomAntwoorden").innerHTML = "";
    document.getElementById("helpQm1").style.visibility = "visible";
    document.getElementById("helpQm2").style.visibility = "hidden";
    document.getElementById("helpQm3").style.visibility = "hidden";
    document.getElementById("helpQm4").style.visibility = "hidden";
}

function displayHide1() {
    document.getElementById("opGetal1").style.width = "20vw";
    document.getElementById("opGetal1").style.right = "50vw";
    document.getElementById("opGetal2").style.visibility = "hidden";
    document.getElementById("opGetal3").style.visibility = "hidden";
    document.getElementById("helpQm1").style.visibility = "hidden";
    document.getElementById("helpQm2").style.visibility = "visible";
}

function mousOver() {
    document.getElementById("uitleg").style.visibility = "visible";
}

function mousOut() {
    document.getElementById("uitleg").style.visibility = "hidden";
}

function mousOver2() {
    document.getElementById("uitleg1").style.visibility = "visible";
}

function mousOut2() {
    document.getElementById("uitleg1").style.visibility = "hidden";
}


function Talstelsels() {
    GetalVanaf = document.getElementById("opGetal1").value;
    GetalInvoer = document.getElementById("opGetal2").value;
    naarToe = document.getElementById("opGetal3").value; 

    

    
}

function Factorizer() {
    GetalInvoer = document.getElementById("opGetal1").value;
}


