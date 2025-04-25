<!-- nav&footer -->
<?= $this->extend('layout/template') ?>

<?= $this->section('title') ?>
Matkul   
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- header -->
<header class="header-img">
    <img src="<?= base_url('/asset/gambar/' .esc($matkul['image'])) ?>" alt="<?= esc($matkul['name']) ?>">
    <h1 class="matkul-jdl"><?= esc($matkul['name'])?></h1>
</header>

<!-- tentang matkul -->
<section class="intro-matkul">
    <h2>Mengenal MK <?= esc($matkul['name'])?></h2>
    <p><?= esc($matkul['description'])?></p>

    <h3>Tujuan</h3>
    <ul>
        <?php foreach (explode("\n", $matkul['goals']) as $tujuan): ?>
            <li><?= esc($tujuan) ?></li>
        <?php endforeach; ?>
    </ul>
</section>

<!-- info matkul -->
<section class="info-kelas">
    <h2>Informasi kelas</h2>
    <ul>
        <li><strong>Nama Kelas:</strong><?= esc($matkul['name']) ?></li>
        <li><strong>SKS:</strong><?= esc($matkul['sks']) ?></li>
        <li><strong>Dosen Pengampu:</strong><?= esc($matkul['lecturer']) ?></li>
        <li><strong>Jadwal:</strong><?= esc($matkul['schedule']) ?></li>
    </ul>
    <div class="btn-kelas">
        <a href="<?= esc($matkul['classroom_link']) ?>" target="_blank" class="btn">Google Classroom</a>
        <a href="<?= esc($matkul['wa_link']) ?>" target="_blank" class="btn btn-wa">Hubungi via WhatsApp</a>
    </div>
</section>
<?= $this->endSection() ?>