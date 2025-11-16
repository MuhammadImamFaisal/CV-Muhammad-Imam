<?= $this->include('cv/layout/header'); ?>

<style>
/* ======= TITLE ======= */
h2 {
    color: #ffca2c;
    text-shadow: 0 0 14px rgba(255,200,0,0.5);
    margin-bottom: 35px;
}

/* ======= CARD WRAPPER ======= */
.card-container {
    padding: 8px 16px;
}

/* ======= CARD CUSTOM ======= */
.card-custom {
    background: #1a1308;
    border: 1px solid #cfa43c;
    border-radius: 16px;
    padding: 25px;
    height: 100%;
    transition: .25s ease;
    box-shadow: 0 0 18px rgba(255,200,0,0.12);
    position: relative;
}

/* Hover Effect */
.card-custom:hover {
    border-color: #ffdd72;
    transform: translateY(-6px);
    box-shadow: 0 0 30px rgba(255,200,0,0.45);
}

/* Text Coloring */
.text-gold {
    color: #ffe7a3;
    text-shadow: 0 0 6px rgba(255,200,0,0.35);
}

.text-light-gold {
    color: #f5d788;
}

.card-custom p,
.card-custom small {
    line-height: 1.55;
}

/* ===== LIGHT MODE FIX ===== */
body.light-mode .card-custom {
    background: #ffffff;
    border-color: #e8d28f;
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
    <h2 class="fw-bold">💼 Pengalaman</h2>

    <div class="row g-4"> <!-- g-4 = jarak antar card lebih rapi -->
        <?php foreach ($pengalaman as $p): ?>
            <div class="col-md-6">
                <div class="card-custom">

                    <h5 class="text-gold"><?= esc($p['posisi']); ?></h5>

                    <p class="text-light-gold" style="margin-bottom: 4px;">
                        <strong>Tempat:</strong> <?= esc($p['tempat']); ?>
                    </p>

                    <small class="text-light-gold">
                        <?= esc($p['tahun_mulai']); ?> - <?= esc($p['tahun_selesai']); ?>
                    </small>

                    <p class="mt-3 text-gold"><?= esc($p['deskripsi']); ?></p>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->include('cv/layout/footer'); ?>
