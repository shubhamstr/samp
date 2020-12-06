var n1 = document.getElementById("n1");
var n2 = document.getElementById("n2");
var oper = document.getElementById("oper");
oper.addEventListener("click", function () {
  if (isNaN(n1.value) || isNaN(n2.value)) {
    alert("Enter Digits Only");
  }
});
