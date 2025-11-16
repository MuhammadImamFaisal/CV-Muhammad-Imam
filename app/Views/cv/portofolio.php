<?= $this->include('cv/layout/header'); ?>

<style>
h2 {
    color: #a97dff;
    text-shadow: 0 0 12px rgba(150,0,255,0.45);
    margin-bottom: 35px;
}

/* Jarak antar card menggunakan g-4 */
.row {
    row-gap: 25px;
}

/* ===== CARD ===== */
.card-custom {
    background: #160f24;
    border: 1px solid #7c4ae0;
    border-radius: 16px;
    padding: 22px;
    height: 100%; /* supaya rata tinggi */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 0 18px rgba(150,0,255,0.15);
    transition: 0.28s ease;
}

.card-custom:hover {
    border-color: #c4a0ff;
    transform: translateY(-6px);
    box-shadow: 0 0 32px rgba(150,0,255,0.45);
}

.card-custom h5 {
    color: #e9d7ff;
    font-weight: 600;
    text-shadow: 0 0 8px rgba(180,140,255,0.45);
    margin-bottom: 10px;
}

.card-custom p {
    color: #d0bee8;
    margin-bottom: 16px;
    line-height: 1.55;
}

/* ===== BUTTON ===== */
.btn-purple {
    border: 1px solid #c4a0ff;
    color: #e7d9ff;
    background: transparent;
    transition: .25s;
    padding: 6px 14px;
    font-weight: 500;
    border-radius: 8px;
}

.btn-purple:hover {
    background: #c4a0ff;
    color: #000;
    box-shadow: 0 0 14px rgba(200,160,255,0.4);
}

/* ===== LIGHT MODE FIX ===== */
body.light-mode .card-custom {
    background: #ffffff;
    border-color: #d5baff;
    box-shadow: 0 0 10px rgba(0,0,0,0.06);
}

body.light-mode .card-custom * {
    color: #222 !important;
    text-shadow: none !important;
}

body.light-mode .btn-purple {
    border-color: #8a5eff !important;
    color: #4a2f7f !important;
}

body.light-mode .btn-purple:hover {
    background: #a67cff !important;
    color: #fff !important;
}

body.light-mode h2 {
    color: #444 !important;
    text-shadow: none !important;
}

</style>

<div class="container py-5">
    <h2 class="fw-bold">📁 Portofolio</h2>

    <div class="row g-4">
        <?php foreach ($portofolio as $p): ?>
            <div class="col-md-4">
                <div class="card-custom">

                    <h5><?= esc($p['judul']); ?></h5>

                    <p><?= esc($p['deskripsi']); ?></p>

                    <?php if (!empty($p['link'])): ?>
                        <a href="<?= esc($p['link']); ?>" 
                           target="_blank" 
                           class="btn btn-purple mt-auto">
                            Lihat
                        </a>
                    <?php endif; ?>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->include('cv/layout/footer'); ?>
