var nav_menu_container_id = document.querySelector('#nav_menu_container_id');
var heroSection = document.querySelector('#hero_section');
var showNav = false;
var label_nav_collapsed = document.querySelector('#label_nav_collapsed');
var nav_collapsed = document.querySelector('#nav_collapsed');
var blindsContainer = document.querySelector('#blinds_container_id');
var blindsContainerCollapse = document.querySelector('#blinds_container_collapse_id');

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
            heroSection.classList.remove('mt-24');
        }
    } else {
        if (!nav_menu_container_id.classList.contains('fixed')) {
            nav_menu_container_id.classList.add('fixed', 'top-0');
            heroSection.classList.add('mt-24');
        }
    }
}

function updateIcon()
{
    if (window.innerWidth >= 768) {
        blindsContainer.innerHTML = '<div id="blinds_id"></div>';
        blindsContainerCollapse.innerHTML = '';
    } else {
        blindsContainer.innerHTML = '';
        blindsContainerCollapse.innerHTML = '<div id="blinds_id"></div>';
    }
}

updateIcon();

window.addEventListener('resize', updateIcon());

document.querySelector('#blinds_id').onclick = () => {
    blindsToggle();
};
let darkStyle = {
    "body": {
        "background-color": "#0a0a0a"
    },
    ".dark-white": {
        "color": "white"
    },
    ".bg-content": {
        "background-color": "#0f0f0f"
    },
    ".hero-section::after": {
        "opacity": "0.0125"
    },
    ".nav": {
        "background-color": "#0a0a0a"
    },
    ".post-container": {
        "background-color": "#0f0f0f"
    },
    ".name-hero": {
        "color": "white"
    },
    ".title-hero": {
        "color": "#c0c0c0"
    },
    ".text": {
        "color": "#c0c0c0"
    },
    ".post-title": {
        "color": "#c0c0c0"
    },
    ".post-desc": {
        "color": "#c0c0c0"
    },
    ".nav-collapse": {
        "background-color": "#0f0f0f"
    },
    ".contact-icons-container a": {
        "color": "white"
    },
    ".pop-up": {
        "background-color": "rgba(0,0,0,0.4)"
    },
    ".pop-up-form-container": {
        "background-color": "black",
        "border-color": "#1f1f1f",
        "color": "white"
    },
    ".hero-cta-btn-question-me": {
        "background": "none"
    },
    ".single-post-content": {
        "background-color": "#0f0f0f",
        "padding": "2rem"
    },
    ".text-black": {
        "color": "white"
    },
    "footer": {
        "background-color": "#1a1a1a",
        "color": "#c0c0c0"
    }
};
setBlindsStyles(darkStyle);
blindsInit();
