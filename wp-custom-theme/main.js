// Small JS just so there's something here
document.addEventListener("DOMContentLoaded", () => {
    const heroCta = document.querySelector(".hero-cta");
    if (!heroCta) return;

    heroCta.addEventListener("click", (e) => {
        const href = heroCta.getAttribute("href") || "";
        if (href.startsWith("#")) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({ behavior: "smooth" });
            }
        }
    });
});
