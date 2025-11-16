<?= $this->include('cv/layout/header'); ?>

<style>
body {
    background: #06080f;
    color: #dce7f3;
    font-family: 'Poppins', sans-serif;
}

.card-custom {
    background: #0d141a;
    border: 1px solid #5b8dff;
    color: #d9e3ff;
    border-radius: 10px;
    transition: .25s;
    box-shadow: 0 0 15px rgba(0,128,255,0.15);
}

.card-custom:hover {
    transform: translateY(-4px);
    box-shadow: 0 0 22px rgba(0,128,255,0.45);
}
</style>

<div class="container py-5">

    <h2 class="mb-4 fw-bold" style="color:#5b8dff;">🎓 Pendidikan</h2>

    <div class="row">
        <?php foreach ($pendidikan as $p): ?>
            <div class="col-md-4 mb-3">
                <div class="card p-3 shadow-sm card-custom">
                    <h5><?= esc($p['jenjang']); ?></h5>
                    <p><?= esc($p['institusi']); ?></p>
                    <small><?= esc($p['tahun_mulai']); ?> - <?= esc($p['tahun_selesai']); ?></small>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->include('cv/layout/footer'); ?>
