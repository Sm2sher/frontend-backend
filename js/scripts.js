
var countDownDate = new Date("feb10, 2025 14:41:25").getTime();
var x = setInterval(function() {
    var counter = document.querySelector("#count");
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  counter.innerHTML = days + " يوم " + hours + " ساعة "
  + minutes + " دقائق " + seconds + " ثواني ";
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "لقد وصلت متأخر";
  }
}, 1000);








