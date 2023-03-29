function clearScreen() {
        document.getElementById("result").value = "";
    }
     
    // This function display values
    function display(value) {
        document.getElementById("result").value += value;
        document.getElementById("message").value += value;
    }
     
    // This function evaluates the expression and returns result
    function calculate() {
        var p = document.getElementById("result").value;
        var q = eval(p);
        document.getElementById("result").value = q;
    }
function clearScreen() {
    document.getElementById("result").value = "";
}
 
// This function display values
function display(value) {
    document.getElementById("result").value += value;
}
 
// This function evaluates the expression and returns result
function calculate() {
    var p = document.getElementById("result").value;
    var q = eval(p);
    document.getElementById("result").value = q;
}

function del(){
    document.getElementById("result").value = document.getElementById("result").value.toString().slice(0,-1);
}
function square(){
    var p = document.getElementById("result").value;
    var q = p*p;
    document.getElementById("result").value = q;document.getElementById("result").value = q;
}