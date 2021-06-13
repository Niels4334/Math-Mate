var GetalInvoer;
var GetalTot;
var resultaat;



function calcAns() {
    document.getElementById("SomAntwoorden").innerHTML = "";
    resultaat = "";
    var keus = document.getElementById("mySelect").value;
    switch (keus) {
        case "Fibonacci":
            Fibonacci();
            break;
        case "Priemgetallen":
            document.getElementById("SomAntwoorden").innerHTML = Priemgetallen();
            break;
        default:                                                                                                                                                                                                                                                         
            break;
    }
}

function displayHide1() {
    document.getElementById("helpQm2").style.visibility = "hidden";
    document.getElementById("helpQm4").style.visibility = "visible";
}

function displayHide2() {
    document.getElementById("helpQm2").style.visibility = "visible";
    document.getElementById("helpQm4").style.visibility = "hidden";
}

function displayShow() {
    document.getElementById("SomAntwoorden").innerHTML = "";
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


function Fibonacci() {
    GetalInvoer = document.getElementById("opGetal1").value;

    var a = 0;
    var b = 1;
    document.getElementById("SomAntwoorden").innerHTML = "0";
    var ant = a + b;

    while (ant < GetalInvoer) {
    
        document.getElementById("SomAntwoorden").innerHTML += "</br>" + ant;
        ant = a + b;
        a = b;
        b = ant;
    }
    return ant;
}

function Priemgetallen() {
    GetalInvoer = document.getElementById("opGetal1").value;

    for (var i = 0; i <= 15; i++) {
        resultaat += GetalInvoer + "<sup>" + i + "</sup> = " + (Math.pow(GetalInvoer, i)) + "<section />";
    }
    return resultaat;
}
