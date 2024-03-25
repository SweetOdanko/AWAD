checklogin();
updatetime();

setInterval(updatetime, 1000);
function updatetime() {
  var now = new Date();
  var dayOfWeek = now.getDay();
  var greetings = [
    "Happy Sunday!",
    "Happy Monday!",
    "Happy Tuesday!",
    "Happy Wednesday!",
    "Happy Thursday!",
    "Happy Friday!",
    "Happy Saturday!",
  ];
  var greeting = greetings[dayOfWeek];
  var hours = now.getHours();
  var minutes = now.getMinutes();
  var seconds = now.getSeconds();
  var timeString =
    hours.toString().padStart(2, "0") +
    ":" +
    minutes.toString().padStart(2, "0") +
    ":" +
    seconds.toString().padStart(2, "0");

  var message = greeting + " It is currently " + timeString;
  document.getElementById("clock").textContent = message;
}

function checklogin() {
  let welcome = document.querySelector("#welcome");
  let button = document.querySelector("#hbttn");
  if (welcome === null) {
    button.innerHTML = "Login Now";
    button.addEventListener("click", () => {
      window.location.href = "login.php";
    });
  } else {
    button.innerHTML = "Logout";
    button.addEventListener("click", () => {
      window.location.href = "./includes/Logout.php";
    });
  }
}
