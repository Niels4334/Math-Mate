var GetalInvoer;
var GetalTot;
var resultaat;



function calcAns() {
    document.getElementById("SomAntwoorden").innerHTML = "";
    resultaat = "";
    var keus = document.getElementById("mySelect").value;
    switch (keus) {
        case "Tafels":
            document.getElementById("SomAntwoorden").innerHTML = Tafel();
            break;
        case "Machtreeks":
            document.getElementById("SomAntwoorden").innerHTML = macht();
            break;
        case "Breukenreeks":
            document.getElementById("SomAntwoorden").innerHTML = breuk();
            break;
        case "Kwadratenreeks":
            document.getElementById("SomAntwoorden").innerHTML = kwadraat();
            break;
        default:                                                                                                                                                                                                                                                         
            break;
    }
}


function displayShow() {
    document.getElementById("opGetal2").style.visibility = "visible";
    document.getElementById("SomAntwoorden").innerHTML = "";
    document.getElementById("helpQm1").style.visibility = "visible";
    document.getElementById("helpQm2").style.visibility = "hidden";
    document.getElementById("helpQm3").style.visibility = "hidden";
    document.getElementById("helpQm4").style.visibility = "hidden";
}

function displayHide1() {
    document.getElementById("opGetal2").style.visibility = "hidden";
    document.getElementById("helpQm1").style.visibility = "hidden";
    document.getElementById("helpQm2").style.visibility = "visible";
    document.getElementById("helpQm3").style.visibility = "hidden";
    document.getElementById("helpQm4").style.visibility = "hidden";
}

function displayHide2() {
    document.getElementById("opGetal2").style.visibility = "hidden";
    document.getElementById("helpQm1").style.visibility = "hidden";
    document.getElementById("helpQm2").style.visibility = "hidden";
    document.getElementById("helpQm3").style.visibility = "visible";
    document.getElementById("helpQm4").style.visibility = "hidden";
}

function displayHide3() {
    document.getElementById("opGetal2").style.visibility = "hidden";
    document.getElementById("helpQm1").style.visibility = "hidden";
    document.getElementById("helpQm2").style.visibility = "hidden";
    document.getElementById("helpQm3").style.visibility = "hidden";
    document.getElementById("helpQm4").style.visibility = "visible";
}



function Tafel() {
    GetalInvoer = document.getElementById("opGetal1").value;
    GetalTot = document.getElementById("opGetal2").value;

    for (var i = 0; i <= GetalTot; i++) {
        resultaat += i + " x " + GetalInvoer + " = " + (i * GetalInvoer) + "<br />";
    }
    return resultaat;
}

function macht() {
    GetalInvoer = document.getElementById("opGetal1").value;

    for (var i = 0; i <= 15; i++) {
        resultaat += GetalInvoer + "<sup>" + i + "</sup> = " + (Math.pow(GetalInvoer, i)) + "<section />";
    }
    return resultaat;
}

function breuk() {
    GetalInvoer = document.getElementById("opGetal1").value;

    for (var i = 0; i <= GetalInvoer; i++) {
        resultaat += GetalInvoer + "÷" + i + "=" + (GetalInvoer / i) + "<br />";
    }
    return resultaat;
}

function kwadraat() {
    GetalInvoer = document.getElementById("opGetal1").value;

    for (var i = 0; i <= GetalInvoer; i++) {
        resultaat += GetalInvoer + "<sup>" + i + "</sup = " + (Math.sqrt(GetalInvoer, i)) + "<section />";
    }
    return resultaat;
}





