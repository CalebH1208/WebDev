  function change(id, newText) {
    var e = document.getElementById(id);
    if (e == null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    e.innerHTML = newText;
  }

  function add(id, toAdd) {
    var e = document.getElementById(id);
    if (e == null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    e.innerHTML += toAdd;
  }

  function equals(id) {
    var e = document.getElementById(id);
    if (e == null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    var exp = e.innerHTML;
    var ans = eval(exp);
    e.innerHTML = ans;
  }

  function get(id) {
    var e = document.getElementById(id);
    if (e == null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    return e.innerHTML;
  }


  function getValue(id) {
    var e = document.getElementById(id);
    if (e == null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    return e.value;
  }

  function setCSS(id, property, value) {
    var e = document.getElementById(id);
    if (e == null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    e.style[property] = value;
  }

  function getCSS(id, property) {
    var e = document.getElementById(id);
    if (e == null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    if (!e.style[property]) {
      console.log ("The " + property + " property is not defined for the element with id " + id);
      return;
    }
    return e.style[property];
  }
function collision (id1, id2) {
  
  // first get elements
  
  let e1 = document.getElementById (id1);
  if (e1 == null) {
    console.log("There is no element with an id of " + id1);
    return;
  }
  let e2 = document.getElementById (id2);
  if (e2 == null) {
    console.log("There is no element with an id of " + id2);
    return;
  }
  
  // get their "bounding rectangle"
  
  let r1 = e1.getBoundingClientRect();
  let r2 = e2.getBoundingClientRect();
  
  if(r1.right<r2.left){
    return false;
  }
  else if(r2.right<r1.left){
    return false;
  }
  else if(r1.bottom<r2.top){
    return false;
  }else if(r2.bottom<r1.top){
    return false;
  }
  else{
    return true;
    }
  
}



function collisionside (id1, id2) {
  
  // first get elements
  
  let e1 = document.getElementById (id1);
  if (e1 == null) {
    console.log("There is no element with an id of " + id1);
    return;
  }
  let e2 = document.getElementById (id2);
  if (e2 == null) {
    console.log("There is no element with an id of " + id2);
    return;
  }
  
  // get their "bounding rectangle"
  
  let r1 = e1.getBoundingClientRect();
  let r2 = e2.getBoundingClientRect();
  
  if(r1.right<r2.left){
    return "right";
  }
  else if(r2.right<r1.left){
    return "left";
  }
  else if(r1.bottom<r2.top){
    return "top";
  }else if(r2.bottom<r1.top){
    return "bottom";
  }
  else{
    return true;
    }
  
}
