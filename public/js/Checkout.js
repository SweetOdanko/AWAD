document.addEventListener("DOMContentLoaded", function () {
  let button = document.querySelector(".button");
  let spin = document.querySelector(".dot-spinner");

  button.addEventListener("click", function (e) {
      e.preventDefault();
      spin.style.opacity = "1";
      spin.style.zIndex = "1";

      fetch("/checkout", {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
      })
      .then(response => {
          if (response.ok) {
              return response.json();
          } else {
              throw new Error('Payment failed');
          }
      })
      .then(data => {
        spin.style.opacity = "0";
        spin.style.zIndex = "-1";
        window.alert("Payment Successful");
        window.location.href = "/";
    })
      .catch(error => {
          console.error(error);
          window.alert("Payment failed");
          spin.style.opacity = "0";
          spin.style.zIndex = "-1";
      });
  });
});