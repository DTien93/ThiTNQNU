var timer = 5;
var min = 0;
var sec = 0;

function startTimer() {
  min = parseInt(timer / 60);
  sec = parseInt(timer % 60);
  if (timer < 2) {
    alert("Quá thời gian quy định, bài làm sẽ làm mới lại");
    window.location = "result.php";
  }
  document.getElementById("time").innerHTML = "Thời gian bắt đầu: " + min.toString() + ":" + sec.toString();
  timer--;
  setTimeout(function() {
    startTimer();
  }, 1000);
}