let btn = document.getElementById("btn");
let res = document.getElementById("result");

n1.focus();

btn.addEventListener("click", function () {
  let n1 = document.getElementById("n1").value;
  let n2 = document.getElementById("n2").value;

  if (n1 == "" || n2 == "") {
    alert("Please Enter Values");
    document.getElementById("n1").focus();
  } else if (!isNaN(n1) || !isNaN(n2)) {
    alert("Only Characters Allowed");
    document.getElementById("n1").focus();
  } else if (
    n1.length < 3 ||
    n1.length > 15 ||
    n2.length < 3 ||
    n2.length > 15
  ) {
    alert("Between 3 to 15 letters only");
    document.getElementById("n1").focus();
  } else {
    let l = Math.random() * 100;
    l = Math.floor(l);
    res.innerText = l + " %";
    btn.style.display = "none";
  }
});
n2.addEventListener("focus", function () {
  btn.style.display = "block";
});
