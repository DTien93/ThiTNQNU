var timer = 60 * 20;
var min = 0;
var sec = 0;

function startTimer() {
  min = parseInt(timer / 60);
  sec = parseInt(timer % 60);
  if (timer < 1) {
    document.write("Vui lòng nộp bài !");
    window.location = "./index.php";
  }
  document.getElementById("time").innerHTML = "  <b>Thời gian bắt đầu: </b>" + min.toString() + ":" + sec.toString();
  timer--;
  setTimeout(function() {
    startTimer();
  }, 1000);
}