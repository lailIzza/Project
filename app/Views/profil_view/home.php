
<!-- nav&footer -->
<?= $this->extend('layout/template') ?>

<?= $this->section('title') ?> 
Home        
<?= $this->endSection() ?>

<?= $this->section('content') ?> <!-- konten utama -->

<!-- Header -->
<section class="header" id="home">
  <div class="header-content">
    <h3 style="color:green;">Halo, saya</h3>
    <h1>Laila</h1>
    <p>
      Ngoding bukan cuma soal sintaks, tapi tentang bikin sesuatu yang bermakna.  
      Saya suka ngulik desain, utak-atik kode, dan ngebangun hal kecil jadi proyek keren.  
      Masih belajar, tapi semangat terus nyala kayak charger 100 watt! ⚡
    </p>
    <a href="#kontak" class="btn">Hubungi Saya</a>
    <div class="icons">
      <a href="https://github.com/lailIzza"><i class='bx bxl-github'></i></a>
      <a href="https://www.instagram.com/za_laylza_0?igsh=MWsyMXA5bzVoMmRpag=="><i class='bx bxl-instagram'></i></a>
      <a href="https://id.linkedin.com/"><i class='bx bxl-linkedin'></i></i></a>
    </div>
  </div>
</section>

<!-- Tentang saya -->
<section class="about" id="about">
  <h2 class="about-title">Tentang Saya</h2>
  <div class="about-content">

    <div class="about-kiri">
      <h3>Motivasi Belajar Programming</h3>
      <p>
        Saya tertarik pada dunia programming karena ingin menciptakan 
        solusi yang bermanfaat, bukan cuma nulis baris kode. Belajar 
        coding itu kayak main puzzle – tiap potongan logika nyatuin 
        jalan keluar dari masalah nyata.
      </p>
      <br>
      <p>
        Programming bukan sekadar skill, tapi cara berpikir. Makanya, 
        meskipun masih belajar, saya selalu semangat ngulik teknologi 
        dan nerapinnya di project kecil yang meaningful. 🔥
      </p>
    </div>

    <div class="about-kanan">
      <h3>Skill saya :</h3>
      <ul class="skill">
        <li>
          <i class="bx bxs-paint"></i>
          <div>
            <strong>Desain & Ilustrasi</strong><br/>
            Figma, Canva, Adobe Illustrator, IbisPaintX
          </div>
        </li>
        <li>
          <i class="bx bx-code-alt"></i>
          <div>
            <strong>Pemrograman dasar</strong><br/>
            Java, HTML, CSS, Php
          </div>
        </li>
        <li>
          <i class="bx bxs-camera"></i>
          <div>
            <strong>Fotografi & Editing</strong><br/>
            Adobe photoshop, Canva
          </div>
        </li>
      </ul>
    </div>

  </div>
</section>

<!-- Matkul -->
<section class="collage" id="matkul">
  <h2 class="collage-title">Mata Kuliah</h2>
  <p class="collage-subtitle">Berikut adalah beberapa mata kuliah yang sedang saya pelajari.</p>

  <div class="collage-wrapper">
    <?php foreach ($courses as $course) : ?>
    <div class="collage-card" onclick="location.href='<?= site_url('matkul/'.$course['id']) ?>'">
      <img src="<?= base_url('asset/gambar/' .$course['image']) ?>" alt="<?= esc($course['name']) ?>">
      <h3><?= esc($course['name']) ?></h3>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Hubungi Saya -->
<section class="contact" id="kontak">
  <h2 class="contact-title">Hubungi Saya</h2>
  <p class="contact-subtitle">Ada pertanyaan atau ingin ngobrol? Kirim pesan ke saya lewat form di bawah ini</p>

  <form id="wa-form">
    <input type="text" id="name" placeholder="Nama Kamu" required>
    <input type="email" id="email" placeholder="Email Kamu" required>

    <select id="reason" required>
      <option value="">-- Pilih Alasan Menghubungi --</option>
      <option value="Konsultasi">Konsultasi</option>
      <option value="Kolaborasi">Kolaborasi</option>
      <option value="Saran atau Kritik">Saran atau Kritik</option>
      <option value="Lainnya">Lainnya</option>
    </select>

    <textarea id="message" placeholder="Tulis pesanmu..." rows="4" required></textarea>
    <button type="submit">Kirim ke WhatsApp</button>
  </form>
</section>

<script>
  document.getElementById("wa-form").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const reason = document.getElementById("reason").value;
    const message = document.getElementById("message").value;

    const phone = "6283117249177"; // nomer wa
    const text = `Halo! Saya ${name} (${email}) ingin menghubungi kamu untuk: *${reason}*.\n\nPesan:\n${message}`;

    const url = `https://wa.me/${phone}?text=${encodeURIComponent(text)}`;

    window.open(url, "_blank");
  });
</script>

<?= $this->endSection() ?>

