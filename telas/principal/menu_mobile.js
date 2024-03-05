let button_mobile = document.getElementById("button-mobile-icon");
let nav_list = document.getElementById("nav-list-mobile");
let open_menu = false;

button_mobile.addEventListener("click", () => {
    open_menu = !open_menu;
    nav_list.style.display = open_menu ? "block" : "none";
});