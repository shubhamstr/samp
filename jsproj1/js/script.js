var time = document.getElementById("time");

var i = setInterval(myfun, 1000);
function myfun() {
    var date = new Date;
    var t = date.toLocaleTimeString();
    console.log(t);
    time.innerHTML = t;
}