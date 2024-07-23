var nav_menu_container_id = document.querySelector('#nav_menu_container_id');
var showNav = false;
var label_nav_collapsed = document.querySelector('#label_nav_collapsed');
var nav_collapsed = document.querySelector('#nav_collapsed');

if (showNav == true) {
    label_nav_collapsed.classList.remove("opacity-0", "hidden");
    label_nav_collapsed.classList.add("fixed", "opacity-70");
    nav_collapsed.classList.remove("nav-collapsed") ;
    nav_collapsed.classList.add("fixed", "nav-show") ;
} else {
    label_nav_collapsed.classList.remove("opacity-70");
    label_nav_collapsed.classList.add("opacity-0", "hidden");
    nav_collapsed.classList.remove("nav-show");
    nav_collapsed.classList.add("hidden", "nav-collapsed");
}

var handleNav = () => {
    showNav = !showNav;
    if (showNav == true) {
        label_nav_collapsed.classList.remove("opacity-0", "hidden");
        label_nav_collapsed.classList.add("fixed", "opacity-70");
        nav_collapsed.classList.remove("hidden", "nav-collapsed") ;
        nav_collapsed.classList.add("fixed", "nav-show") ;
    } else {
        label_nav_collapsed.classList.remove("opacity-70");
        label_nav_collapsed.classList.add("opacity-0", "hidden");
        nav_collapsed.classList.remove("nav-show");
        nav_collapsed.classList.add("nav-collapsed");
    }
}

window.onscroll = () => {
    let y = window.pageYOffset;
    if (y <= 144) {
        if (nav_menu_container_id.classList.contains('fixed')) {
            nav_menu_container_id.classList.remove('fixed', 'top-0');
        }
    } else {
        if (!nav_menu_container_id.classList.contains('fixed')) {
            nav_menu_container_id.classList.add('fixed', 'top-0');
        }
    }
}
