
function add() {
    var value1 = parseInt(document.getElementById("value1").value);
    var value2 = parseInt(document.getElementById("value2").value);

    var result = value1 + value2;

    document.getElementById("result").innerHTML = result;
}

function subtract() {
    var value1 = parseInt(document.getElementById("value1").value);
    var value2 = parseInt(document.getElementById("value2").value);

    var result = value1 - value2;

    document.getElementById("result").innerHTML = result;
}
 function multiply() {
    var value1 = parseInt(document.getElementById("value1").value);
    var value2 = parseInt(document.getElementById("value2").value);

    var result = value1 * value2;

    document.getElementById("result").innerHTML = result;
}
 function divide() {
    var value1 = parseInt(document.getElementById("value1").value);
    var value2 = parseInt(document.getElementById("value2").value);

    var result = value1 / value2;

    document.getElementById("result").innerHTML = result;
}
function squareroot() {
    var value1 = parseInt(document.getElementById("value1").value);
    var value2 = parseInt(document.getElementById("value2").value);

    var result = Math.sqrt(value1);

    document.getElementById("result").innerHTML = result;
}
function pi() {
    var value1 = parseInt(document.getElementById("value1").value);
    var value2 = parseInt(document.getElementById("value2").value);

    var result = Math.PI * value1 * value1;

    document.getElementById("result").innerHTML = result;
}
function circumference(){
    var radius = parseInt(document.getElementById("radius").value);
    
    var result = radius * 2 * Math.PI;
    document.getElementById("circumference").innerHTML = result;
}
function findAngle(){
    var angle1 = parseInt(document.getElementById("angle1").value);
    var angle2 = parseInt(document.getElementById("angle2").value);
    var result = 180- angle1 -angle2 ;
    document.getElementById("circumference").innerHTML = result;
}