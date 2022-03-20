document.addEventListener("DOMContentLoaded", function () {
    const navTop = document.querySelector("#nav-top");

    // NAVTOP
    const navTopLinks = document.querySelectorAll("#nav-top a");
    const mediaQuery = window.matchMedia("(max-width: 992px)");

    if (mediaQuery.matches) {
        navTop.addEventListener("click", (event) => {
            const elem = event.target;
            const isLink = !!elem.getAttribute("href");

            if (isLink) {
                navTopLinks.forEach((link) => {
                    link.classList.remove("current");

                    if (elem === link) {
                        link.classList.add("current");
                        navTop.classList.toggle("active");
                    }
                });
            }
        });
    } else {
        navTop.addEventListener("click", (event) => {
            const elem = event.target;
            const isLink = !!elem.getAttribute("href");

            if (isLink) {
                navTopLinks.forEach((link) => {
                    link.classList.remove("current");

                    elem === link && link.classList.add("current");
                });
            }
        });
    }

    // BURGER
    const burgerButton = document.querySelector("#burger-btn");

    burgerButton.addEventListener("click", () => {
        navTop.classList.toggle("active");
    });
});
