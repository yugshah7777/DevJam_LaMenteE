document.addEventListener("DOMContentLoaded", function () {
    function scrollToSection(sectionId) {
        const target = document.getElementById(sectionId);
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 70, // Adjust for navbar height
                behavior: "smooth"
            });
        }
    }

    document.querySelectorAll(".nav-link").forEach(link => {
        link.addEventListener("click", function (event) {
            const sectionMap = {
                "Features": "featured-3",
                "FAQs": "icon-grid",
                "Reviews": "reviews"
            };

            const targetSection = sectionMap[this.textContent.trim()];
            
            if (targetSection) {
                event.preventDefault(); // Prevent default link action
                scrollToSection(targetSection);
            }
        });
    });
});

AOS.init({
    duration: 1200, // Slower animations for more impact
    easing: 'ease-out-cubic',
    once: true,
    offset: 100 // Start animation when 100px before element enters viewport
});

document.querySelectorAll(".nav-link").forEach(link => {
    link.addEventListener("click", function (event) {
        event.preventDefault();
        const sectionId = this.getAttribute("href").substring(1);
        const target = document.getElementById(sectionId);
        window.scrollTo({
            top: target.offsetTop - 70,
            behavior: "smooth"
        });
    });
});

