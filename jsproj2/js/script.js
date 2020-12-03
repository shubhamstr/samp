let btn = document.getElementById("calc");

btn.addEventListener("click", function () {
  let amt = document.getElementById("amt").value;
  let per = document.getElementById("per").value;
  amt = parseInt(amt);
  per = parseInt(per);
  let gst = (amt * per) / 100;
  let netprice = amt + gst;
  document.getElementById("result").innerText = netprice;
});
