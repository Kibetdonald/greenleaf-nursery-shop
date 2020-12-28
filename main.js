const menuIcon = document.getElementById("menu-icon");
const mainav = document.getElementById("mainav");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

searchIcon.addEventListener('click', function () {
  if (searchBox.style.top == '72px') {
    searchBox.style.top = '24px';
    searchBox.style.pointerEvents = 'none';
  } else {
    searchBox.style.top = '72px';
    searchBox.style.pointerEvents = 'auto';
  }
});

menuIcon.addEventListener('click', function () {
  if (mainav.style.opacity == "1") {
    mainav.style.opacity = '0';
    mainav.style.pointerEvents = 'none';
  } else {
    mainav.style.opacity = '1';
    mainav.style.pointerEvents = 'auto';
  }
})