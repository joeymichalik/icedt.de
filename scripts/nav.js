const navbar = document.querySelector(".navbar");
const navToggle = document.querySelector(".mobile-nav-toggle");

navToggle.addEventListener("click", () => {
    const visibility = navbar.getAttribute("data-visible");

    if (visibility === "false") {
        navbar.setAttribute("data-visible", true)
    }
    else {
        navbar.setAttribute("data-visible", false)
    }
});