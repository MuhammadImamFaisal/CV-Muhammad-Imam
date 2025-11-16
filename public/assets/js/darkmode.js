// === DARK / LIGHT MODE TOGGLE ===

// Elemen tombol toggle dari navbar
const themeToggle = document.getElementById("themeToggle");
const body = document.body;

// Set default mode (dark)
body.classList.add("dark-mode");

// Jika localStorage punya data theme
if (localStorage.getItem("theme") === "light") {
    body.classList.remove("dark-mode");
    body.classList.add("light-mode");
    if (themeToggle) themeToggle.textContent = "☀️";
} else {
    if (themeToggle) themeToggle.textContent = "🌙";
}

// Jika tombol ada di halaman
if (themeToggle) {
    themeToggle.addEventListener("click", () => {
        if (body.classList.contains("dark-mode")) {
            body.classList.remove("dark-mode");
            body.classList.add("light-mode");
            themeToggle.textContent = "☀️";
            localStorage.setItem("theme", "light");
        } else {
            body.classList.remove("light-mode");
            body.classList.add("dark-mode");
            themeToggle.textContent = "🌙";
            localStorage.setItem("theme", "dark");
        }
    });
}
