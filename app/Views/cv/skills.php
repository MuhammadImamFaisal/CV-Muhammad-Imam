<?= $this->include('cv/layout/header'); ?>

<style>
/* Title */
h2 {
    color: #32e4ff;
    text-shadow: 0 0 12px rgba(0,255,255,0.45);
}

/* Futuristic Skill Card */
.card-custom {
    background: #0c1218;
    border: 1px solid rgba(44, 245, 255, 0.35);
    border-radius: 14px;
    padding: 22px 20px;
    transition: .28s ease-in-out;
    box-shadow: 
        0 0 12px rgba(0,255,255,0.08), 
        inset 0 0 14px rgba(0,255,255,0.05);
    position: relative;
    overflow: hidden;
}

/* soft glow background */
.card-custom::after {
    content: "";
    position: absolute;
    inset: -20px;
    background: radial-gradient(
        circle at center,
        rgba(0,255,255,0.12),
        transparent 70%
    );
    opacity: 0.3;
    transition: .3s ease-in-out;
    z-index: 0;
}

/* Hover Glow */
.card-custom:hover {
    border-color: #2cf5ff;
    transform: translateY(-6px);
    box-shadow: 
        0 0 25px rgba(0,255,255,0.35),
        inset 0 0 18px rgba(0,255,255,0.18);
}

.card-custom:hover::after {
    opacity: 0.55;
}

/* Text */
.skill-text {
    color: #d7e9f5;
    font-size: 17px;
    font-weight: 600;
    letter-spacing: .6px;
    text-shadow: 0 0 6px rgba(0,255,255,0.45);
    position: relative;
    z-index: 1;
}

/* === LIGHT MODE FIX === */
body.light-mode .card-custom {
    background: #ffffff;
    border: 1px solid #cfcfcf;
    box-shadow: 0 0 8px rgba(0,0,0,0.06);
}

body.light-mode .card-custom * {
    color: #222 !important;
    text-shadow: none !important;
}

body.light-mode h2 {
    color: #333 !important;
    text-shadow: none !important;
}


</style>

<div class="container py-5">
    <h2 class="mb-4 fw-bold">🛠 Skills</h2>

    <div class="row">
        <?php foreach ($skills as $s): ?>
            <div class="col-md-3 mb-3">
                <div class="card card-custom text-center">
                    <strong class="skill-text"><?= esc($s['skill']); ?></strong>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->include('cv/layout/footer'); ?>
