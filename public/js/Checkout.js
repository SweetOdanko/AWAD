let button = document.querySelector(".button");
let spin = document.querySelector(".dot-spinner");

button.addEventListener("click", function (e) {
  e.preventDefault();
  spin.style.opacity = "1";
  spin.style.zIndex = "1";

  setTimeout(function () {
    spin.style.opacity = "0";
    spin.style.zIndex = "-1";
    window.alert("Payment Successful");
    window.location.href = "./includes/deleteAllCart.php";
  }, 2000);
});
