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
      console.log("The " + property + " property is not defined for the element with id " + id);
      return;
    }
    return e.style[property];
  }

  function collision(id1, id2) {

    // first get elements

    let e1 = document.getElementById(id1);
    if (e1 == null) {
      console.log("There is no element with an id of " + id1);
      return;
    }
    let e2 = document.getElementById(id2);
    if (e2 == null) {
      console.log("There is no element with an id of " + id2);
      return;
    }

    // get their "bounding rectangle"

    let r1 = e1.getBoundingClientRect();
    let r2 = e2.getBoundingClientRect();

    if (r1.right < r2.left) {
      return false;
    }
    else if (r2.right < r1.left) {
      return false;
    }
    else if (r1.bottom < r2.top) {
      return false;
    }
    else if (r2.bottom < r1.top) {
      return false;
    }
    else {
      return true;
    }

  }

  function collisiony(id1, id2) {
    let e1 = document.getElementById(id1);
    if (e1 == null) {
      console.log("There is no element with an id of " + id1);
      return;
    }
    let e2 = document.getElementById(id2);
    if (e2 == null) {
      console.log("There is no element with an id of " + id2);
      return;
    }

    // get their "bounding rectangle"

    let r1 = e1.getBoundingClientRect();
    let r2 = e2.getBoundingClientRect();

    if (r1.bottom - 1 > r2.top - 3 && r1.left + 2 < r2.right) {
      if (r1.left + 2 < r2.right && r1.left + 2 > r2.left) {
        return "above t";
      }
      else if (r1.right - 2 > r2.left && r1.right - 2 < r2.right) {
        return "above t";

      }

    }
    else if (r1.top > r2.bottom) {
      if (r1.left + 2 < r2.right && r1.left + 2 > r2.left) {
        return "below";
      }
      else if (r1.right - 2 > r2.left && r1.right - 2 < r2.right) {
        return "below";

      }
    }
    else {
      return "none c";
    }

  }

  function collisionx(id1, id2) {
    let e1 = document.getElementById(id1);
    if (e1 == null) {
      console.log("There is no element with an id of " + id1);
      return;
    }
    let e2 = document.getElementById(id2);
    if (e2 == null) {
      console.log("There is no element with an id of " + id2);
      return;
    }

    // get their "bounding rectangle"

    let r1 = e1.getBoundingClientRect();
    let r2 = e2.getBoundingClientRect();

    if (r1.left <= r2.right && r1.right > r2.right) {
      if (r1.bottom - 1 >= r2.top && r1.bottom - 1 <= r2.bottom) {
        return "right";
      }
      else if (r1.top <= r2.bottom && r1.top >= r2.top) {
        return "right";
      }
      else {
        return "none right";
      }
    }
    else if (r1.right > r2.left && r1.left < r2.left) {
      if (r1.bottom - 1 >= r2.top && r1.bottom - 1 <= r2.bottom) {
        return "left";
      }
      else if (r1.top <= r2.bottom && r1.top >= r2.top) {
        return "left";
      }
      else {
        return "none left";
      }

    }

    else {
      return "bananas";
    }




  }






  function collisiony2(id1, id2) {
    let e1 = document.getElementById(id1);
    if (e1 == null) {
      console.log("There is no element with an id of " + id1);
      return;
    }
    let e2 = document.getElementById(id2);
    if (e2 == null) {
      console.log("There is no element with an id of " + id2);
      return;
    }

    // get their "bounding rectangle"

    let r1 = e1.getBoundingClientRect();
    let r2 = e2.getBoundingClientRect();

    if (r1.bottom - 1 > r2.top - 3 && r1.bottom-1<r2.top +23) {
      if (r1.left + 2 < r2.right && r1.left + 2 > r2.left) {
        return "above t";
      }
      else if (r1.right - 2 > r2.left && r1.right - 2 < r2.right) {
        return "above t";
      }
      else {
        return "bananas m";
      }

    }
    else if (r1.top < r2.bottom && r1.top>r2.bottom-20) {
      if (r1.left + 2 < r2.right && r1.left + 2 > r2.left) {
        return "below";
      }
      else if (r1.right - 2 > r2.left && r1.right - 2 < r2.right) {
        return "below";

      }
      else {
        return "bananas but below";
      }
    }
    else {
      return "none j";
    }

  }