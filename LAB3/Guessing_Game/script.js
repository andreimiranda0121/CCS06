var y = Math.floor(Math.random() * 100 +1);
var guess = 1;
var life = 10;

function guessNum(){
    var x = document.getElementById("guessField").value;
    if (guess == 10){
        alert("Try again!!!");
        reset();
    }
    else if(x == y){
        alert("Congrats !!! You guessed it right with just" + guess + " try !!!");
    }else if(x > y){
        var life = 10 - guess;
        alert("TRY A LOWER NUMBER !!! You have " + life + " guess left");
        guess++;
    }else{
        var life = 10 - guess;
        alert("TRY A HIGHER NUMBER !!! You have " + life + " guess left");
        guess++;
    }
}

function reset(){
    y = Math.floor(Math.random() * 100 +1);
    guess = 1;
}