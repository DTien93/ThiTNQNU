var timer = 5;
var min = 0;
var sec = 0;

function startTimer() {
  min = parseInt(timer / 60);
  sec = parseInt(timer % 60);
  if (timer < 1) {
    alert("Vui lòng nộp bài, quá thời gian trang sẽ load lại bài thi");
    window.location = "result.php";
  }
  document.getElementById("time").innerHTML = "Thời gian bắt đầu: " + min.toString() + ":" + sec.toString();
  timer--;
  setTimeout(function() {
    startTimer();
  }, 1000);
}