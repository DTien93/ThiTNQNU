var timer = 60 * 20;
var min = 0;
var sec = 0;

function startTimer() {
  min = parseInt(timer / 60);
  sec = parseInt(timer % 60);
  if (timer < 1) {
    window.location = "Chúc mừng bạn hoàn thành bài thi";
  }
  document.getElementById("time").innerHTML = "Thời gian bắt đầu: " + min.toString() + ":" + sec.toString();
  timer--;
  setTimeout(function() {
    startTimer();
  }, 1000);
}