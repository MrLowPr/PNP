<?php
// Data perkenalan diri (ubah sesuai profilmu)
$name = "Nama Kamu";
$title = "Profesional di Bidang XYZ";
$bio   = "Saya adalah ... (deskripsi singkat dan profesional)";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Profil - <?=htmlspecialchars($name)?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-inner">
        <div class="front">
          <h1><?=htmlspecialchars($name)?></h1>
          <h2><?=htmlspecialchars($title)?></h2>
        </div>
        <div class="back">
          <p><?=nl2br(htmlspecialchars($bio))?></p>
          <a href="#contact" class="btn">Hubungi Saya</a>
        </div>
      </div>
    </div>
  </div>

  <section id="contact">
    <h3>Kontak</h3>
    <form method="post" action="script.js" id="contactForm">
      <input type="text" name="nama" placeholder="Nama" required>
      <input type="email" name="email" placeholder="Email" required>
      <textarea name="pesan" placeholder="Pesan" required></textarea>
      <button type="submit" class="btn">Kirim</button>
    </form>
    <div id="status"></div>
  </section>

  <script src="script.js"></script>
</body>
</html>
