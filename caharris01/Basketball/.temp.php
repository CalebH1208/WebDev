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
              for (i in arguments) newDiv.innerHTML += arguments[i];
            con.appendChild(newDiv);
            con.scrollTop = con.scrollHeight;     
        };
        </script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title></title>
  <style>
  </style>
</head>

<body>
<script>
  var t
  t <- 5
  t = 5
  document.write(t)
</script>
</body>

</html>
