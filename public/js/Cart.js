document.addEventListener("DOMContentLoaded", function() {
let price = document.querySelectorAll(".price");
let total = document.querySelector(".total_price");
let middlecard = document.querySelector(".middle_card");
updatePrice();

if (middlecard.children.length === 0) {
    console.log("Parent element has no child nodes");
    setTimeout(function () {
        window.alert("No Item In Cart");
        window.location.href = "./index.php"; // Update to correct route name
    }, 100);
}


function updatePrice() {
    let totalprice = 4.95;
    for (let a = 0; a < price.length; a++) {
        totalprice += Number(price[a].innerHTML.slice(2));
    }
    total.innerHTML = `RM${totalprice}`;
}
});