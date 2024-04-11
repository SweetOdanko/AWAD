document.addEventListener("DOMContentLoaded", function() {
let plus = document.querySelectorAll(".plus");
let minus = document.querySelectorAll(".minus");
let num = document.querySelectorAll(".num");
let price = document.querySelectorAll(".price");

let total = document.querySelector(".total_price");
let itembox = document.querySelectorAll(".item_box");
let middlecard = document.querySelector(".middle_card");
updatePrice();

if (middlecard.children.length === 0) {
    console.log("Parent element has no child nodes");
    setTimeout(function () {
        window.alert("No Item In Cart");
        window.location.href = "./index.php"; // Update to correct route name
    }, 100);
}

for (let a = 0; a < plus.length; a++) {
    plus[a].addEventListener("click", function () {
        let currentnum = Number(num[a].innerHTML);
        let currentPrice = Number(price[a].innerHTML.slice(2));
        let singlePrice = currentPrice / currentnum;
        currentnum++;
        num[a].innerHTML = currentnum;
        price[a].innerHTML = `RM${(currentPrice += singlePrice)}`;
        updatePrice();
    });
}
for (let a = 0; a < minus.length; a++) {
    minus[a].addEventListener("click", function () {
        let currentnum = Number(num[a].innerHTML);
        let currentPrice = Number(price[a].innerHTML.slice(2));
        let singlePrice = currentPrice / currentnum;
        currentnum--;
        if (currentnum <= 0) {
            this.parentNode.parentNode.parentNode.parentNode.remove();
        }
        num[a].innerHTML = currentnum;
        price[a].innerHTML = `RM${(currentPrice -= singlePrice)}`;
        updatePrice();
    });
}

function updatePrice() {
    let totalprice = 4.95;
    for (let a = 0; a < price.length; a++) {
        totalprice += Number(price[a].innerHTML.slice(2));
    }
    total.innerHTML = `RM${totalprice}`;
}
});
//////////////////ajax
let allAddbtt = document.querySelectorAll(".plus");
let allMinusbtt = document.querySelectorAll(".minus");
let alltotal = document.querySelectorAll(".price");
let allquan = document.querySelectorAll(".num");
let quantity = 1;

for (let a = 0; a < alltotal.length; a++) {
    allAddbtt[a].addEventListener("click", function () {
        const itemId = allAddbtt[a].id;
        const itemprice =
            parseInt(alltotal[a].innerHTML.substring(2)) /
            parseInt(allquan[a].innerHTML);
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "{{ route('cart-increment') }}"); // Update to correct route name
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(`itemId=${itemId}&quantity=${quantity}&itemprice=${itemprice}`);
    });
}
for (let a = 0; a < alltotal.length; a++) {
    allMinusbtt[a].addEventListener("click", function () {
        const itemId = allMinusbtt[a].id;
        const itemprice =
            parseInt(alltotal[a].innerHTML.substring(2)) /
            parseInt(allquan[a].innerHTML);
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "{{ route('cart-decrement') }}"); // Update to correct route name
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(`itemId=${itemId}&quantity=${quantity}&itemprice=${itemprice}`);
    });
}