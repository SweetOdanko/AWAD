const filter = document.querySelector("#categoryFilter");
const searchInput = document.querySelector("#searchInput");
const searchbtt = document.querySelector("#submitButton");
const allname = document.querySelectorAll("h5");
const allice = document.querySelectorAll(".ice");
const showAllbtt = document.querySelector("#showAll");

const header1 = document.querySelector(".header1");
const header2 = document.querySelector(".header2");

let navsearch = document.querySelector("#searchContainer");
let navbutton = document.querySelector("#navbutton");
//handle seacrh from mainpage
searchMain();

navsearch.style.display = "none";

//event for filter
filter.addEventListener("change", function () {
  searchInput.value = "";
  filterProduct(filter.value);
});

//event for search button current page
searchbtt.addEventListener("click", function (e) {
  e.preventDefault();
  for (const ice of allice) {
    ice.style.visibility = "visible";
    ice.style.removeProperty("position");
  }
  let input = searchInput.value.toLowerCase();
  if (input !== "") {
    searchByname(input);
    showAllbtt.style.display = "block";
  }
});

//event for show all button current page
showAllbtt.addEventListener("click", function (e) {
  e.preventDefault();
  searchInput.value = "";
  showAllbtt.style.display = "none";
  filterProduct("all");
});

///////////////////////////////////////////////////////////////////////////
//function
//function declare have hoisting
//express no hoisting
function searchByname(findname) {
  header1.style.display = "block";
  header2.style.display = "block";
  for (const ice of allice) {
    ice.style.visibility = "hidden";
    ice.style.position = "absolute";
  }
  const name = Array.from(allname).filter((name) =>
    name.textContent.toLowerCase().includes(findname)
  );

  let cup = 0;
  let cone = 0;
  for (const ice of name) {
    if (ice.parentNode.parentNode.classList.contains("cup")) {
      cup++;
    } else if (ice.parentNode.parentNode.classList.contains("cone")) {
      cone++;
    }
    ice.parentNode.parentNode.style.visibility = "visible";
    ice.parentNode.parentNode.style.removeProperty("position");
  }
  if (cup <= 0) {
    header1.style.display = "none";
  }
  if (cone <= 0) {
    header2.style.display = "none";
  }
}

function filterProduct(type) {
  header1.style.display = "block";
  header2.style.display = "block";
  for (const ice of allice) {
    //ice.style.display = "none";
    ice.style.visibility = "hidden";
    ice.style.position = "absolute";
  }
  for (const ice of allice) {
    if (type === "all") {
      header1.style.display = "block";
      header2.style.display = "block";
      ice.style.visibility = "visible";
      ice.style.removeProperty("position");
    } else if (ice.classList.contains(type)) {
      ice.style.visibility = "visible";
      ice.style.removeProperty("position");
    }
  }
}

function searchMain() {
  let smain = document.querySelector("#search_main");
  if (smain != null) {
    searchByname(smain.value);
    showAllbtt.style.display = "block";
  }
}
