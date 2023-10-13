const time = document.querySelector("#time");

function updateTime() {
  const now = new Date();
  const currentTime = now.toLocaleTimeString();
  time.textContent = currentTime;
}

setInterval(updateTime, 1000);

console.log(time);
