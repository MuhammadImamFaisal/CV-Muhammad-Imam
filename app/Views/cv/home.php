<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
/* ========================= */
/*           HERO            */
/* ========================= */
.hero-center {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.home-title {
    color: #32e4ff;
    font-size: 48px;
    font-weight: 700;
    text-shadow: 0 0 14px rgba(0,255,255,0.35);
}

.home-desc {
    color: #9bb4c7;
    font-size: 18px;
    max-width: 700px;
    margin-top: 14px;
    text-shadow: 0 0 8px rgba(0,255,255,0.15);
}

.btn-glow {
    background: #0d141a;
    border: 1px solid #2cf5ff;
    color: #2cf5ff;
    transition: .25s;
    box-shadow: 0 0 12px rgba(0,255,255,0.15);
}
.btn-glow:hover {
    background: #2cf5ff;
    color: #000;
    box-shadow: 0 0 22px rgba(0,255,255,0.45);
    transform: translateY(-3px);
}

/* Icons */
.social-icons i {
    font-size: 32px;
    margin: 0 12px;
    color: #2cf5ff;
    cursor: pointer;
    transition: .25s;
    text-shadow: 0 0 12px rgba(0,255,255,0.25);
}
.social-icons i:hover {
    color: #fff;
    transform: scale(1.2);
    text-shadow: 0 0 22px rgba(0,255,255,0.6);
}

/* ========================= */
/*        BIODATA CV         */
/* ========================= */
.biodata-wrapper {
    margin-top: 90px;
    padding: 40px;
    border-radius: 20px;
    background: #0b0f15;
    border: 1px solid #1a2333;
    box-shadow: 0 0 22px rgba(0,255,255,0.12);
}

.section-title {
    font-size: 24px;
    font-weight: bold;
    color: #32e4ff;
    margin-bottom: 15px;
    text-shadow: 0 0 12px rgba(0,255,255,0.35);
}

.card-block {
    background: #0e141b;
    padding: 20px;
    border-radius: 14px;
    border: 1px solid #1a2333;
    box-shadow: 0 0 18px rgba(0,255,255,0.08);
    margin-bottom: 25px;
    transition: .3s ease;
}

.card-block:hover {
    border-color: #32e4ff;
    transform: translateY(-6px);
    box-shadow: 0 0 25px rgba(0,255,255,0.3);
}

.card-block h5 { color: #2cf5ff; margin-bottom: 10px; }
.card-block p, .card-block small, .card-block li { color: #c9d9e5; }

/* Profile Photo */
.profile-photo {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
    border: 3px solid #2cf5ff;
    box-shadow: 0 0 18px rgba(0,255,255,0.4);
    transition: .3s;
}
.profile-photo:hover {
    box-shadow: 0 0 30px rgba(0,255,255,0.75);
    transform: scale(1.05);
}

ul { padding-left: 20px; }
</style>

<!-- ========================= -->
<!--          HERO             -->
<!-- ========================= -->
<div class="container hero-center" data-aos="fade-up">

    <h1 class="home-title">Halo, Saya <?= $biodata['nama'] ?></h1>

    <p class="home-desc"><?= $biodata['deskripsi'] ?></p>

    <div class="social-icons mt-3">
        <a href="https://wa.me/6283874151326" target="_blank">
            <i class="bi bi-whatsapp"></i>
        </a>
        <a href="https://github.com/usernamekamu" target="_blank">
            <i class="bi bi-github"></i>
        </a>
    </div>

    <a href="#biodata" class="btn btn-glow mt-4 px-4 py-2">Lihat Selengkapnya</a>
</div>

<!-- ========================= -->
<!--        BIODATA CV         -->
<!-- ========================= -->
<div class="container biodata-wrapper" id="biodata" data-aos="fade-up">

    <div class="text-center mb-4" data-aos="zoom-in">
        <img src="<?= base_url('assets/img/foto.jpg'); ?>" class="profile-photo">
    </div>

    <div class="mb-4" data-aos="fade-right">
        <div class="section-title">📌 Biodata Diri</div>

        <div class="card-block">
            <p><strong>Nama:</strong> <?= $biodata['nama']; ?></p>
            <p><strong>Email:</strong> <?= $biodata['email']; ?></p>
            <p><strong>Telepon:</strong> <?= $biodata['telepon']; ?></p>
            <p><strong>Alamat:</strong> <?= $biodata['alamat']; ?></p>

            <p><strong>Tempat Lahir:</strong> <?= $biodata['tempat_lahir']; ?></p>
            <p><strong>Tanggal Lahir:</strong> <?= date('d M Y', strtotime($biodata['tanggal_lahir'])); ?></p>
        </div>
    </div>

    <!-- PENGALAMAN -->
    <div class="mb-4" data-aos="fade-left">
        <div class="section-title">💼 Pengalaman</div>
        <?php foreach ($pengalaman as $p): ?>
        <div class="card-block">
            <h5><?= $p['posisi']; ?> — <?= $p['tempat']; ?></h5>
            <small><?= $p['tahun_mulai']; ?> - <?= $p['tahun_selesai']; ?></small>
            <p class="mt-2"><?= $p['deskripsi']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- PENDIDIKAN -->
    <div class="mb-4" data-aos="fade-right">
        <div class="section-title">🎓 Pendidikan</div>
        <?php foreach ($pendidikan as $p): ?>
        <div class="card-block">
            <h5><?= $p['jenjang']; ?></h5>
            <p><?= $p['institusi']; ?></p>
            <small><?= $p['tahun_mulai']; ?> - <?= $p['tahun_selesai']; ?></small>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- ORGANISASI -->
    <div class="mb-4" data-aos="fade-left">
        <div class="section-title">👥 Organisasi</div>
        <?php foreach ($organisasi as $o): ?>
        <div class="card-block">
            <h5><?= $o['posisi']; ?></h5>
            <p><?= $o['organisasi']; ?></p>
            <small><?= $o['tahun']; ?></small>
            <p class="mt-2"><?= $o['deskripsi']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- SKILLS -->
    <div class="mb-4" data-aos="fade-right">
        <div class="section-title">🛠 Skills</div>
        <div class="card-block">
            <ul>
                <?php foreach ($skills as $s): ?>
                    <li><?= $s['skill']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- PORTOFOLIO -->
    <div class="mb-4" data-aos="fade-left">
        <div class="section-title">📁 Portofolio</div>
        <?php foreach ($portofolio as $p): ?>
        <div class="card-block">
            <h5><?= $p['judul']; ?></h5>
            <p><?= $p['deskripsi']; ?></p>
            <?php if ($p['link']): ?>
                <a href="<?= $p['link']; ?>" target="_blank" style="color:#32e4ff;">Lihat</a>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>

</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>

<?= $this->include('cv/layout/footer'); ?>
