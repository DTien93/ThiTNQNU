var timer = 60 * 2;
var min = 0;
var sec = 0;

function startTimer() {
  min = parseInt(timer / 60);
  sec = parseInt(timer % 60);
  if (timer < 60) {
    alert('Chúc bạn hoàn thành bài thi');
    window.location = "http://localhost:70/ThiTN/ManagerStudent/index.php";
  }
  document.getElementById("time").innerHTML = "Thời gian bù giờ: " + min.toString() + ":" + sec.toString();
  timer--;
  setTimeout(function() {
    startTimer();
  }, 1000);
}