<style>
    .navbar-futuristic {
        background: #0b0e15;
        border-bottom: 1px solid #182030;
        box-shadow: 0 0 18px rgba(0, 200, 255, 0.12);
        transition: 0.3s;
    }

    .navbar-futuristic .navbar-brand {
        color: #25d6ff !important;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-shadow: 0 0 10px rgba(0, 255, 255, 0.35);
    }

    /* ========================= */
    /* NAV LINK STYLE */
    /* ========================= */

    .navbar-futuristic .nav-link {
        position: relative;
        color: #8ea4b8 !important;
        font-weight: 500;
        margin-left: 16px;
        transition: 0.3s ease;
        padding-bottom: 5px;
    }

    /* TEXT COLOR ON HOVER / ACTIVE */
    .navbar-futuristic .nav-link:hover,
    .navbar-futuristic .nav-link.active {
        color: #32e4ff !important;
        font-weight: 700;
        text-shadow: 0 0 10px rgba(0, 255, 255, 0.45);
    }

    /* ========================= */
    /* FUTURISTIC GLOW UNDERLINE */
    /* ========================= */

    .navbar-futuristic .nav-link::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -6px;
        transform: translateX(-50%);
        width: 0;
        height: 2px;
        background: #32e4ff;
        border-radius: 2px;
        opacity: 0;
        box-shadow: 0 0 10px #32e4ff, 0 0 20px #32e4ff;
        transition: 0.3s ease;
    }

    /* SHOW UNDERLINE ON HOVER & ACTIVE */
    .navbar-futuristic .nav-link:hover::after,
    .navbar-futuristic .nav-link.active::after {
        width: 60%;
        opacity: 1;
    }


    /* ========================= */
    /* LIGHT MODE OVERRIDE */
    /* ========================= */

    body.light-mode .navbar-futuristic {
        background: #ffffff !important;
        border-bottom: 1px solid #ccd3dd !important;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.07);
    }

    body.light-mode .navbar-futuristic .navbar-brand {
        color: #003b5a !important;
        text-shadow: none;
    }

    body.light-mode .navbar-futuristic .nav-link {
        color: #555 !important;
    }

    body.light-mode .navbar-futuristic .nav-link:hover,
    body.light-mode .navbar-futuristic .nav-link.active {
        color: #000 !important;
        font-weight: 700;
        text-shadow: none;
    }

    /* UNDERLINE LIGHT MODE */
    body.light-mode .navbar-futuristic .nav-link::after {
        background: #000;
        box-shadow: 0 0 6px #000;
    }

    /* ========================= */
    /* THEME TOGGLE BUTTON */
    /* ========================= */

    #themeToggle {
        cursor: pointer;
        font-size: 20px;
        margin-left: 18px;
        color: #32e4ff;
        transition: 0.25s;
    }

    body.light-mode #themeToggle {
        color: #333;
    }

    #themeToggle:hover {
        opacity: 0.6;
    }
</style>

<?php 
    // DETEK URL SEKARANG UNTUK ACTIVE MENU
    $uri = service('uri')->getSegment(1);
?>

<nav class="navbar navbar-expand-lg navbar-futuristic py-3 sticky-top">
    <div class="container">

        <a class="navbar-brand" href="<?= base_url('/') ?>">Curriculum Vitae</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">
                    <a class="nav-link <?= $uri == '' ? 'active' : '' ?>" 
                       href="<?= base_url('/') ?>">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $uri == 'pendidikan' ? 'active' : '' ?>" 
                       href="<?= base_url('pendidikan') ?>">Pendidikan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $uri == 'organisasi' ? 'active' : '' ?>" 
                       href="<?= base_url('organisasi') ?>">Organisasi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $uri == 'skills' ? 'active' : '' ?>" 
                       href="<?= base_url('skills') ?>">Keahlian</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $uri == 'pengalaman' ? 'active' : '' ?>" 
                       href="<?= base_url('pengalaman') ?>">Pengalaman</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $uri == 'portofolio' ? 'active' : '' ?>" 
                       href="<?= base_url('portofolio') ?>">Portofolio</a>
                </li>

                <!-- 🔘 Dark / Light Toggle -->
                <li class="nav-item">
                    <span id="themeToggle">🌙</span>
                </li>

            </ul>
        </div>

    </div>
</nav>

<script>
    // === Toggle Theme ===
    const body = document.body;
    const themeToggle = document.getElementById("themeToggle");

    // Load saved theme
    if (localStorage.getItem("theme") === "light") {
        body.classList.remove("dark-mode");
        body.classList.add("light-mode");
        themeToggle.textContent = "☀️";
    }

    // Toggle when clicked
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
</script>
