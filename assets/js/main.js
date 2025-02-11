
window.addEventListener("scroll", function () {
    var navbar = document.querySelector(".image-container");
    if (window.scrollY > 300) { 
        navbar.classList.add("fixed");
    } else {
        navbar.classList.remove("fixed");
    }
});

window.addEventListener("scroll", function () {
    var navbar = document.querySelector(".menu-toggle");
    if (window.scrollY > 300) { // Adjust trigger point for better effect
        navbar.classList.add("fixed");
    } else {
        navbar.classList.remove("fixed");
    }
});
window.addEventListener("scroll", function () {
    var navbar = document.querySelector(".arrow");
    if (window.scrollY > 100) { // Adjust trigger point for better effect
        navbar.classList.add("fixed");
    } else {
        navbar.classList.remove("fixed");
    }
});


const menuToggle = document.getElementById("menuToggle");
const navContainer = document.querySelector(".nav-container");

menuToggle.addEventListener("click", function () {
    navContainer.classList.toggle("show");
});

// Close menu when clicking outside
document.addEventListener("click", function (event) {
    if (!menuToggle.contains(event.target) && !navContainer.contains(event.target)) {
        navContainer.classList.remove("show");
    }
});
window.addEventListener("scroll", function () {
    var navbar = document.querySelector(".nav-container");
    if (window.scrollY < 300) { 
        navbar.classList.remove("show");
    }
});



const sidmenuToggle = document.getElementById("sidmenuToggle");
const sidemenu = document.querySelector(".sidemenu");

sidmenuToggle.addEventListener("click", function () {
    sidemenu.classList.toggle("show");
});

// Close menu when clicking outside
document.addEventListener("click", function (event) {
    if (!sidmenuToggle.contains(event.target) && !sidemenu.contains(event.target)) {
        sidemenu.classList.remove("show");
    }
});

const scrollBtn = document.getElementById("sidmenuToggle");

window.addEventListener("scroll", function () {
    if (window.scrollY > 200) {
        scrollBtn.style.display = "block";
    } 
});

scrollBtn.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
});


