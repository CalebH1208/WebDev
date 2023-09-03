<script>
        var prevMsg='';
        window.onerror=function(message, source, lineno, colno, error) {
            let con = parent.parent.document.getElementById("consoleDisp");
            if (con.querySelectorAll("div").length > 100) con.removeChild(con.firstElementChild);
            
            const newDiv = document.createElement("div");
            if (lineno) { // python errors do not have a linenumber
              newDiv.innerHTML = "Error on line " + (lineno-31)+": "+message;
              con.appendChild(newDiv);
            }
            else if (prevMsg != message) {  // prevent duplicate messages
              prevMsg = message;
              newDiv.innerHTML = message
              con.appendChild(newDiv);
            }
            newDiv.style.color="red";
            con.scrollTop = con.scrollHeight;
        };
        console.log = function() {
            let con = parent.parent.document.getElementById("consoleDisp");
            if (con.querySelectorAll("div").length > 100) con.removeChild(con.firstElementChild);
            const newDiv = document.createElement("div");
            if (typeof arguments[0] === 'object') 
              newDiv.innerHTML = JSON.stringify(arguments[0], null, 4);
            else
              for (let i in arguments) newDiv.innerHTML += arguments[i];
            con.appendChild(newDiv);
            con.scrollTop = con.scrollHeight;     
        };
        </script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>MARIO TIME</title>
  <style>
    div#mario {
      position: fixed;
      height: 50px;
      width: 50px;

    }

    #bg {
      position: fixed;
      z-index: -10;

    }

    #blocks {
      position: fixed;
      z-index: -4;
    }

    #coins {
      position: fixed;
      z-index: 20;
    }

    body {
      background-color: black;
    }

    blk {
      margin: 0px;
    }

    #goo {
      position: fixed;

    }
    #goo2{
      position:fixed;
    }

    #floor {
      position: fixed;
      z-index: -2;
    }

    #flag {
      position: fixed;
      z-index: -2;
    }

    #pipes {
      position: fixed;
      z-index: 1
    }

    #pipes2 {
      position: fixed;
      z-index: 1
    }

    #plant {
      position: fixed;
      z-index: -3
    }

    #myCanvas {
      position: fixed;
      margin-left: -10px;
      z-index: 1000;
      width: 101vw;
      height: 101vw;
    }

    pipe {
      background-color: red;
    }

    tr {
      width: 100%;
      background-color: black;
      color: fuchsia;
      border: 2px double fuchsia;
    }

    table {
      position: fixed;
      width: 90vw;
      left: 100px;
      top: 900px;
    }
  </style>
  <script src='library.js'></script>
  <script>
    // global variable to keep track of the last key that was pressed
    var key = -1;
    var keyx = -1
    var keyy = -1
    var t = 1
    var v = 15
    var z = 4
    var gs1 = 2
    var gs2 = 2
    var lives = 3
    var pt = 0
    var win = false
    var coinstotal = 0
    var timerNumKill

    function keys() {
      // get key code and store in global variable - that's all
      key = event.keyCode;
      if (win == false) {
        if (key == 37) {
          keyx = 37

        }
        else if (key == 39) {
          keyx = 39

        }
        else if (key == 40) {
          keyy = 40
        }
        else if (key == 38) {
          keyy = 38
        }
        else {
          key = -1
        }

      }
      else if (win == true) {
        alert("YOU ALREADY WON STOP TRYING TO PLAY")
      }
    }

    function move1() {

      var x = getCSS("bg", "left");
      x = parseInt(x);
      var b = getCSS("blocks", "left")
      b = parseInt(b);
      var f = getCSS("floor", "left")
      f = parseInt(f);
      var p = getCSS("pipes", "left")
      p = parseInt(p);
      var g = getCSS("goo", "left")
      g = parseInt(g);
      var g2 = getCSS("goo2", "left")
      g2 = parseInt(g2);


      if (keyx == 37) {
        if (collisionx("mario", "blk") == "right") {
          
        }
        else if (collisionx("mario", "pipes") == "right") {

        }
        else if (collisionx("mario", "pipes2") == "right") {

        }
        else if (collisionx("mario", "blk2") == "right") {

        }
        else if (collisionx("mario", "blk3") == "right") {

        }
        else if (collisionx("mario", "blk4") == "right") {

        }
        else if (collisionx("mario", "blk6") == "right") {

        }
        else if (collisionx("mario", "blk5") == "right") {

        }
        else if (collisionx("mario", "blk7") == "right") {

        }
        else if (collisionx("mario", "blk8") == "right") {

        }
        else if (collisionx("mario", "blk9") == "right") {

        }
        else if (collisionx("mario", "blk10") == "right") {

        }

        else if (collisionx("mario", "blk11") == "right") {

        }
        else if (collisionx("mario", "blk12") == "right") {

        }
        else if (collisionx("mario", "blk13") == "right") {

        }
        else if (collisionx("mario", "blk14") == "right") {

        }
        
        else if (collisionx("mario", "blk16") == "right") {

        }
        else if (collisionx("mario", "blk15") == "right") {

        }
        else if (collisionx("mario", "blk17") == "right") {

        }
        else if (collisionx("mario", "blk18") == "right") {

        }
        else if (collisionx("mario", "blk19") == "right") {

        }


        else if (collisionx("mario", "goo") == "right") {

          death()

        }
        else if (collisionx("mario", "goo2") == "right") {

          death()

        }


        else {
          x = x + t;
          b = b + z
          f = f + z
          p = p + z
          g = g + z
          g2 = g2+z
          changesrc("Marioimg", "mariorun2.png");
        }
      }

      else if (keyx == 39) {
        if (collisionx("mario", "blk") == "left") {

        }
        else if (collisionx("mario", "pipes") == "left") {

        }
        else if (collisionx("mario", "pipes2") == "left") {

        }
        else if (collisionx("mario", "blk2") == "left") {

        }
        else if (collisionx("mario", "blk3") == "left") {

        }
        else if (collisionx("mario", "blk4") == "left") {

        }
        else if (collisionx("mario", "blk5") == "left") {

        }
        else if (collisionx("mario", "blk6") == "left") {

        }
        else if (collisionx("mario", "blk7") == "left") {

        }
        else if (collisionx("mario", "blk8") == "left") {

        }
        else if (collisionx("mario", "blk9") == "left") {

        }
        else if (collisionx("mario", "blk10") == "left") {

        }
        else if (collisionx("mario", "blk11") == "left") {

        }
        else if (collisionx("mario", "blk12") == "left") {

        }
        else if (collisionx("mario", "blk13") == "left") {

        }
        else if (collisionx("mario", "blk14") == "left") {

        }
        
        
        else if (collisionx("mario", "blk15") == "left") {

        }
        else if (collisionx("mario", "blk16") == "left") {

        }
        else if (collisionx("mario", "blk17") == "left") {

        }
        else if (collisionx("mario", "blk18") == "left") {

        }
        else if (collisionx("mario", "blk19") == "left") {

        }

        else if (collisionx("mario", "goo") == "left") {

         death()
        }
        else if (collisionx("mario", "goo2") == "left") {

         death()
        }
        
        else {
          x = x - t;
          b = b - z
          f = f - z
          p = p - z
          g = g - z
          g2=g2-z
          changesrc("Marioimg", "mariorun.png");
        }

      }

      if (x < -1710) {
        x = -1710
        setCSS("bg", "left", x + "px");

      }
      else if (x > 40) {
        x = 40
        setCSS("bg", "left", x + "px");
      }
      else if (x <= 400 && x >= -2110) {
        setCSS("bg", "left", x + "px");
        setCSS("blocks", "left", 0 + "px");
        setCSS("blocks", "left", b + "px");
        setCSS("coins", "left", b + "px");
        setCSS("floor", "left", f + "px");
        setCSS("flag", "left", f + 3000 + "px");
        setCSS("pipes", "left", p + "px");
        setCSS("pipes2", "left", p + 1000 + "px");
        setCSS("plant", "left", p + 1005 + "px");
        setCSS("goo", "left", g + gs1 + "px");
        setCSS("goo", "left", g2 + gs2 + "px");
      }
      if (collision("mario", "flag") == true) {
        alert("you Win")
        setCSS("mario", "left", "600px")
        win = true
        keyx = -1
        win()
      }
      
    }

    function stop() {
      upkey = event.keyCode;
      if (upkey == 37 || upkey == 39)
        keyx = -1;
      changesrc("Marioimg", "mariofront.png");
    }



    function movey() {
      var y = parseInt(getCSS("mario", "top"))

      if (keyy == 38 && v == 15) {
        v = -15
        keyy = -1
      }
      else if (v > 15) {
        v = 15
      }
      else {
        v = v + 1
      }



      if (collisiony2("mario", "blk") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk") == "above t") {

        y = parseInt(getCSS("blk", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "pipes") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "pipes") == "above t") {

        y = parseInt(getCSS("pipes", "top")) - 50
        v = 0
      }
      else if (collisiony2("mario", "pipes2") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "pipes2") == "above t") {

        y = parseInt(getCSS("pipes2", "top")) - 50
        v = 0
      }
      else if (collisiony2("mario", "blk2") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk2") == "above t") {

        y = parseInt(getCSS("blk2", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk2") == "below") {
        y = parseInt(getCSS("blk2", "top")) + 65
        v = 0
      }
      else if (collisiony2("mario", "blk4") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk4") == "above t") {

        y = parseInt(getCSS("blk4", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk4") == "below") {
        y = parseInt(getCSS("blk4", "top")) + 65
        v = 0
      }

      else if (collisiony2("mario", "blk3") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk3") == "above t") {

        y = parseInt(getCSS("blk3", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk3") == "below") {
        y = parseInt(getCSS("blk3", "top")) + 65
        v = 0
      }
      else if (collisiony2("mario", "blk5") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk5") == "above t") {

        y = parseInt(getCSS("blk5", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk5") == "below") {
        y = parseInt(getCSS("blk5", "top")) + 65
        v = 0
      }
      else if (collisiony2("mario", "blk6") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk6") == "above t") {

        y = parseInt(getCSS("blk6", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk6") == "below") {
        y = parseInt(getCSS("blk6", "top")) + 65
        v = 0
      }
      else if (collisiony2("mario", "blk7") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk7") == "above t") {

        y = parseInt(getCSS("blk7", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk7") == "below") {
        y = parseInt(getCSS("blk7", "top")) + 65
        v = 0
      }

      else if (collisiony2("mario", "blk8") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk8") == "above t") {

        y = parseInt(getCSS("blk8", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk8") == "below") {
        y = parseInt(getCSS("blk8", "top")) + 65
        v = 0
      }

      else if (collisiony2("mario", "blk9") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk9") == "above t") {

        y = parseInt(getCSS("blk9", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk9") == "below") {
        y = parseInt(getCSS("blk9", "top")) + 65
        v = 0
      }

      else if (collisiony2("mario", "blk10") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk10") == "above t") {

        y = parseInt(getCSS("blk10", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk10") == "below") {
        y = parseInt(getCSS("blk10", "top")) + 65
        v = 0
      }

      else if (collisiony2("mario", "blk11") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk11") == "above t") {

        y = parseInt(getCSS("blk11", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk11") == "below") {
        y = parseInt(getCSS("blk11", "top")) + 65
        v = 0
      }

      else if (collisiony2("mario", "blk12") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk12") == "above t") {

        y = parseInt(getCSS("blk12", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk12") == "below") {
        y = parseInt(getCSS("blk12", "top")) + 65
        v = 0
      }
      else if (collisiony2("mario", "blk13") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk13") == "above t") {

        y = parseInt(getCSS("blk13", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk13") == "below") {
        y = parseInt(getCSS("blk13", "top")) + 65
        v = 0
      }
      else if (collisiony2("mario", "blk14") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk14") == "above t") {

        y = parseInt(getCSS("blk14", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk14") == "below") {
        y = parseInt(getCSS("blk14", "top")) + 65
        v = 0
      }
      
      
      else if (collisiony2("mario", "blk15") == "above t") {

        y = parseInt(getCSS("blk15", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk15") == "below") {
        y = parseInt(getCSS("blk15", "top")) + 65
        v = 0
      }
      else if (collisiony2("mario", "blk16") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk16") == "above t") {

        y = parseInt(getCSS("blk16", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk16") == "below") {
        y = parseInt(getCSS("blk16", "top")) + 65
        v = 0
      }
      else if (collisiony2("mario", "blk17") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk17") == "above t") {

        y = parseInt(getCSS("blk17", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk17") == "below") {
        y = parseInt(getCSS("blk17", "top")) + 65
        v = 0
      }

      else if (collisiony2("mario", "blk18") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk18") == "above t") {

        y = parseInt(getCSS("blk18", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk18") == "below") {
        y = parseInt(getCSS("blk18", "top")) + 65
        v = 0
      }

      else if (collisiony2("mario", "blk19") == "above t" && keyy == 38) {
        v = -15
        keyy = -1
        y = y + v
      }
      else if (collisiony2("mario", "blk19") == "above t") {

        y = parseInt(getCSS("blk19", "top")) - 42
        v = 0
      }
      else if (collisiony2("mario", "blk19") == "below") {
        y = parseInt(getCSS("blk19", "top")) + 65
        v = 0
      }
      
      
      

      else if (collisiony2("mario", "goo") == "above t") {
        changesrc("goomba", "squishedgoomba.png")


        v = -8
        timerNumKill = setTimeout("kill('goo')", 500)
        gs1 = 0
      }
      else if (collisiony2("mario", "goo2") == "above t") {
        changesrc("goo2", "squishedgoomba.png")


        v = -8
        timerNumKill = setTimeout("kill('goo2')", 500)
        gs1 = 0
      }
      else {
        y = y + v
      }



      if (y > 750) {
        y = 750
        setCSS("mario", "top", y + "px")
      }
      else if (y < 50) {
        y = 50
        setCSS("mario", "top", y + "px")
      }
      else {
        setCSS("mario", "top", y + "px")
      }

    }

    function changesrc(id, newText) {
      var e = document.getElementById(id);
      if (e == null) {
        console.log("There is no element with an id of " + id);
        return;
      }
      e.src = newText;
    }




    function plant() {

      if (pt < 105) {
        setCSS("plant", "top", (730 - pt) + "px")
        pt = pt + 1

      }
      else if (pt > 605 && pt < 710) {
        setCSS("plant", "top", 730 - (710 - pt) + "px")
        pt = pt + 1
      }
      else if (pt == 1210) {
        pt = 0
      }
      else {
        pt = pt + 1
      }
      if (collision("mario", "plant") == true) {

        death()

      }
    }

    function gumbmove() {
      var gumb = parseInt(getCSS("goo", "left"))

      if (collisionx("goo", "blk") == "left" || collisionx("goo", "pipes") == "left") {
        gs1 = -1
        changesrc("goomba", "goombaleft.png")
      }
      else if (collisionx("goo", "blk") == "right" || collisionx("goo", "pipes") == "right") {
        changesrc("goomba", "goomba.png")
        gs1 = 1
      }
      gumb = gumb + gs1
      setCSS("goo", "left", gumb + "px");
      
    }
    
    
   
    


    function kill(gn) {
      setCSS(gn, "top", -100 + "px");
    clearInterval(timerNumKill);
   
    console.log(55);
    
    }




    function win() {
      setCSS("marioimg", "transform", "rotate(500deg)");
      changesrc("Marioimg", "mariofront.png")

    }

    function death() {
      
      setCSS("bg", "left", -20 + "px");
      x = parseInt(getCSS("bg", "left"))
      setCSS("mario", "top", 200 + "px")
      setCSS("blocks", "left", 0 + "px");
      setCSS("floor", "left", -180 + "px");
      setCSS("flag", "left", 500 + 3000 + "px");
      setCSS("pipes", "left", 1000 + "px");
      setCSS("pipes2", "left", 2000 + "px");
      setCSS("plant", "left", 2000 + 5 + "px");
      setCSS("goo", "left", 700 + "px");
      setCSS("goo", "top", 750 + "px");
      setCSS("goo2", "left", 2250 + "px");
      setCSS("goo2", "top", 750 + "px");
      
      gs1 = 1
      x = parseInt(getCSS("bg", "left"))
      b = parseInt(getCSS("blocks", "left"))
      f = parseInt(getCSS("floor", "left"))
      p = parseInt(getCSS("pipes", "left"))
      g = parseInt(getCSS("goo", "left"))
      g2 = parseInt(getCSS("goo2", "left"))
      keyx = -1
      lives = lives - 1
      if (lives == 0) {
        alert("GAME OVER")
        changesrc("bgi", "FakeNihar.JPG")
        change("lives", "lives: " + lives)
      }
      else {
        alert("You lost a life")

        change("lives", "lives: " + lives)
      }
    }

    function coin() {
      if (collision("mario", "coin11") == true) {
        coincollection("coin11")
      }
      else if (collision("mario", "coin12") == true) {
        coincollection("coin12")
      }
      else if (collision("mario", "coin20") == true) {
        coincollection("coin20")
      }
      else if (collision("mario", "coin13") == true) {
        coincollection("coin13")
      }
      else if (collision("mario", "coin14") == true) {
        coincollection("coin14")
      }
      else if (collision("mario", "coin15") == true) {
        coincollection("coin15")
      }
      else if (collision("mario", "coin16") == true) {
        coincollection("coin16")
      }
      else if (collision("mario", "coin17") == true) {
        coincollection("coin17")
      }
      else if (collision("mario", "coin18") == true) {
        coincollection("coin18")
      }
      else if (collision("mario", "coin19") == true) {
        coincollection("coin19")
      }

      if (collision("mario", "coin1") == true) {
        coincollection("coin1")
      }
      else if (collision("mario", "coin2") == true) {
        coincollection("coin2")
      }
      else if (collision("mario", "coin10") == true) {
        coincollection("coin10")
      }
      else if (collision("mario", "coin3") == true) {
        coincollection("coin3")
      }
      else if (collision("mario", "coin4") == true) {
        coincollection("coin4")
      }
      else if (collision("mario", "coin5") == true) {
        coincollection("coin5")
      }
      else if (collision("mario", "coin6") == true) {
        coincollection("coin6")
      }
      else if (collision("mario", "coin7") == true) {
        coincollection("coin7")
      }
      else if (collision("mario", "coin8") == true) {
        coincollection("coin8")
      }
      else if (collision("mario", "coin9") == true) {
        coincollection("coin9")
      }

    }


    function coincollection(coinnum) {
      setCSS(coinnum, "top", "-100px")
      coinstotal = coinstotal + 1
      change("coincount", "coins: " + coinstotal)
    }

    var timerNum = setInterval("move1()", 10);
    var timerNumy = setInterval("movey()", 15);
    var timerNumgumb = setInterval("gumbmove()", 20);
   
    var timernumplant = setInterval("plant()", 10);
    var timernumcoin = setInterval("coin()", 10);
  </script>
</head>

<body onkeydown="keys()" onkeyup="stop()">
  <div id="bg" style="top:80px; left: -20px;"> <img id=bgi src="Hills2.jpg"></div>
  <div id="mario" style=" top: 200px; left: 400px;"><img id="Marioimg" src='mariofront.png' style='width:50px; height:50px'></div>

  <div id=blocks style="left:0px; height:1000px; width:10000px;">

    <img id=blk src='marioblock.png' style='width:50px; height:50px; top:742px; left:600px; position:absolute;'>

    <img id=blk2 src='marioblock.png' style='width:50px; height:50px;top:650px; left:700px; position: absolute;'>

    <img id=blk3 src='marioblock.png' style='width:50px; height:50px;top:600px; left:1200px; position: absolute;'>

    <img id=blk4 src='marioblock.png' style='width:50px; height:50px;top:600px; left:1150px; position: absolute;'>

    <img id=blk5 src='marioblock.png' style='width:50px; height:50px;top:650px; left:2150px; position: absolute;'>

    <img id=blk6 src='marioblock.png' style='width:50px; height:50px;top:600px; left:1250px; position: absolute;'>

    <img id=blk7 src='marioblock.png' style='width:50px; height:50px;top:600px; left:1400px; position: absolute;'>

    <img id=blk8 src='marioblock.png' style='width:50px; height:50px;top:550px; left:1600px; position: absolute;'>

    <img id=blk9 src='marioblock.png' style='width:50px; height:50px;top:500px; left:1800px; position: absolute;'>

    <img id=blk10 src='marioblock.png' style='width:50px; height:50px;top:500px; left:1850px; position: absolute;'>

    <img id=blk11 src='marioblock.png' style='width:50px; height:50px;top:650px; left:2450px; position: absolute;'>

    <img id=blk12 src='marioblock.png' style='width:50px; height:50px;top:650px; left:2400px; position: absolute;'>

    <img id=blk13 src='marioblock.png' style='width:50px; height:50px;top:650px; left:2200px; position: absolute;'>

    <img id=blk14 src='marioblock.png' style='width:50px; height:50px;top:650px; left:2250px; position: absolute;'>
    
    <img id=blk15 src='marioblock.png' style='width:50px; height:50px;top:650px; left:2500px; position: absolute;'>
    
    <img id=blk16 src='marioblock.png' style='width:50px; height:50px;top:550px; left:2400px; position: absolute;'>
    
    <img id=blk17 src='marioblock.png' style='width:50px; height:50px;top:550px; left:2250px; position: absolute;'>
    
    <img id=blk18 src='marioblock.png' style='width:50px; height:50px;top:475px; left:2300px; position: absolute;'>
    
    <img id=blk19 src='marioblock.png' style='width:50px; height:50px;top:475px; left:2350px; position: absolute;'>
  </div>
  <div id=pipes style="top:725px; left:1000px;">
    <img class=pip src='pip.png' style='width:75px; height:75px;'>
  </div>
  <div id=pipes2 style="top:725px; left:2000px;">
    <img class=pip src='pip.png' style='width:75px; height:75px;'>
  </div>
  <div id=plant style="top:730px; left:2000px;">

    <img class=plnt src='plant2.png' style='width:62px; height:100px;'>
  </div>
  <div id=floor style="top:800px; left:-180px;">
    <img class=ground src='ground2.jpg'>
  </div>
  <div id=flag style="top:400px; left:500px;">
    <img class=ground src='flag.png'>
  </div>
  <div id=goo style="top:750px; left:750px;" >
    <img id=goomba class=goom src='goomba.png' style='width:50px; height:50px; '>
    </div>

    
  <div id=coins style="left:0px; height:1000px; width:10000px;">

    <img id=coin1 src="mariocoin.gif" style="width:25px;height:25px; left:800px; top:500px; position:absolute;">
    <img id=coin2 src="mariocoin.gif" style="width:25px;height:25px; left:850px; top:500px; position:absolute;">
    <img id=coin3 src="mariocoin.gif" style="width:25px;height:25px; left:975px; top:770px; position:absolute;">
    <img id=coin4 src="mariocoin.gif" style="width:25px;height:25px; left:750px; top:550px; position:absolute;">
    <img id=coin5 src="mariocoin.gif" style="width:25px;height:25px; left:900px; top:550px; position:absolute;">
    <img id=coin6 src="mariocoin.gif" style="width:25px;height:25px; left:1550px; top:450px; position:absolute;">
    
    <img id=coin7 src="mariocoin.gif" style="width:25px;height:25px; left:1812px; top:450px; position:absolute;">
    
    <img id=coin8 src="mariocoin.gif" style="width:25px;height:25px; left:1450px; top:500px; position:absolute;">
    <img id=coin9 src="mariocoin.gif" style="width:25px;height:25px; left:1500px; top:450px; position:absolute;">
    
    <img id=coin10 src="mariocoin.gif" style="width:25px;height:25px; left:1862px; top:450px; position:absolute;">

    <img id=coin11 src="mariocoin.gif" style="width:25px;height:25px; left:1025px; top:500px; position:absolute;">
    <img id=coin12 src="mariocoin.gif" style="width:25px;height:25px; left:1325px; top:500px; position:absolute;">
    <img id=coin13 src="mariocoin.gif" style="width:25px;height:25px; left:1500px; top:770px; position:absolute;">
    <img id=coin14 src="mariocoin.gif" style="width:25px;height:25px; left:1550px; top:770px; position:absolute;">
    <img id=coin15 src="mariocoin.gif" style="width:25px;height:25px; left:1975px; top:770px; position:absolute;">
    
    <img id=coin16 src="mariocoin.gif" style="width:25px;height:25px; left:2162px; top:600px; position:absolute;">
    <img id=coin17 src="mariocoin.gif" style="width:25px;height:25px; left:2512px; top:600px; position:absolute;">
    <img id=coin18 src="mariocoin.gif" style="width:25px;height:25px; left:2312px; top:425px; position:absolute;">
    <img id=coin19 src="mariocoin.gif" style="width:25px;height:25px; left:2352px; top:425px; position:absolute;">
    
    <img id=coin20 src="mariocoin.gif" style="width:25px;height:25px; left:2750px; top:400px; position:absolute;">


  </div>
 

  <canvas id="myCanvas"></canvas>

  <script>
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    ctx.fillStyle = "black";
    ctx.fillRect(0, 0, 10, 300);
    ctx.fillRect(289, 0, 10, 300);
  </script>
  <table>
    <tr>
      <td id=lives>lives: 3</td>
      <td id=coincount>Coins: 0</td>

    </tr>
  </table>
</body>

</html>