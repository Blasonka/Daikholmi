import './bootstrap';

// Theme button!
document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById("themeToggle");
    const htmlElement = document.documentElement;

    // Ellenőrizzük, hogy van-e elmentett téma
    let theme = localStorage.getItem("theme") || "light";
    htmlElement.setAttribute("data-bs-theme", theme);
    updateButton(theme);

    themeToggle.addEventListener("click", function () {
        theme = (theme === "light") ? "dark" : "light";
        htmlElement.setAttribute("data-bs-theme", theme);
        localStorage.setItem("theme", theme);
        updateButton(theme);
    });

    function updateButton(theme) {
        if (theme === "light") {
            //themeToggle.classList.remove("btn-dark");
            //themeToggle.classList.add("btn-light");
            themeToggle.innerHTML = "🌙";
        } else {
            //themeToggle.classList.remove("btn-light");
            //themeToggle.classList.add("btn-dark");
            themeToggle.innerHTML = "☀️";
        }
    }
});
