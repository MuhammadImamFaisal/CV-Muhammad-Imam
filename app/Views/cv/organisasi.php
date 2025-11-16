<?= $this->include('cv/layout/header'); ?>

<style>
/* ======= TITLE ======= */
h2 {
    color: #ff4dff;
    text-shadow: 0 0 14px rgba(255, 0, 255, 0.45);
    margin-bottom: 35px;
}

/* ======= CARD WRAPPER ======= */
.card-wrapper {
    padding: 10px 18px;
}

/* ======= CARD CUSTOM ======= */
.card-custom {
    background: #120b18;
    border: 1px solid #7b1b7e;
    border-radius: 18px;
    padding: 25px;
    height: 100%; /* biar semua kartu same height */
    transition: .25s ease-in-out;
    box-shadow: 0 0 18px rgba(255, 0, 255, 0.08);
    position: relative;
}

/* Hover Glow */
.card-custom:hover {
    border-color: #ff4dff;
    transform: translateY(-6px);
    box-shadow: 0 0 30px rgba(255, 0, 255, 0.35);
}

/* Text Color */
.text-magenta {
    color: #ffc9ff;
    text-shadow: 0 0 5px rgba(255,0,255,0.25);
}

/* ORGANISASI SUBTITLE */
.card-custom small {
    color: #d7b8e3 !important;
    font-size: 13px;
}

/* DESKRIPSI */
.card-custom p {
    margin-top: 10px;
    line-height: 1.55;
}

/* ===== LIGHT MODE FIX ===== */
body.light-mode .card-custom {
    background: #ffffff;
    border-color: #d8b4df;
    box-shadow: 0 0 10px rgba(0,0,0,0.08);
}

body.light-mode .card-custom * {
    color: #333 !important;
    text-shadow: none !important;
}

body.light-mode h2 {
    color: #333 !important;
    text-shadow: none !important;
}
</style>


<div class="container py-5">
    <h2 class="fw-bold"><i class="bi bi-people-fill"></i> Organisasi</h2>

    <div class="row g-4"> <!-- g-4 biar jarak antar card lebih rapih -->
        <?php foreach ($organisasi as $o): ?>
            <div class="col-md-6">
                <div class="card-custom">

                    <h5 class="text-magenta"><?= esc($o['posisi']); ?></h5>

                    <p class="text-magenta" style="margin-bottom: 4px;">
                        <?= esc($o['organisasi']); ?>
                    </p>

                    <small><?= esc($o['tahun']); ?></small>

                    <p class="text-magenta"><?= esc($o['deskripsi']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->include('cv/layout/footer'); ?>
