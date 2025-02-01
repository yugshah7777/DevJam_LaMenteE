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

