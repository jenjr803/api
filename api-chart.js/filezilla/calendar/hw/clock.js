let clock = document.getElementById("clock");
function updateTime() {
//   console.log("updated");
  const time = moment();
  const timeReading = time.format("HH:mm:ss");
  // hh: 會是 12hr 制
//   console.log(timeReading);
  clock.textContent = timeReading;
}
setInterval(updateTime, 1000);
updateTime();