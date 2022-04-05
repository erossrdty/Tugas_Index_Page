<?php // Tag pembuka PHP
$nim = '202410101074'; // Variabel NIM
$nama = 'Eross Raditya'; // Variabel nama
// array associative untuk data berita. berisi title, image, source, dan content
$data = [
  [
      #BERITA 1
    'title' => 'Alex Rins Sebut Belum Pikirkan Gelar Juara Dunia MotoGP 2022, Sinyal bakal Menyerah?',
    'image' => 'https://media.suara.com/pictures/653x366/2022/03/05/65967-alex-rins.jpg',
    'source' => 'Cesar Uji Tawakal - suara.com',
    'content' => 'Usai MotoGP Argentina 2022, Alex Rins memang tampil memesona dengan meraih podium ketiga. Ini menjadi podium pertama dirinya di MotoGP 2022. Namun, rekan setim Joan Mir ini mengaku belum memikirkan juara dunia MotoGP 2022. Apakah sinyal bahwa dirinya tak sanggup meraihnya? Ternyata ada alasan sendiri kenapa Alex Rins belum mau memikirkan juara dunia MotoGP 2022. Setelah menjalani 3 seri balapan di MotoGP 2022, penampilannya memang belum begitu konsisten.',
  ],
      #BERITA 2
  [
    'title' => 'Marc Marquez di Ambang Absen di MotoGP Amerika Serikat 2022, Fabio Quartararo atau Alex Rins Juaranya?',
    'image' => 'https://img.okezone.com/content/2022/04/05/38/2573321/marc-marquez-di-ambang-absen-di-motogp-amerika-serikat-2022-fabio-quartararo-atau-alex-rins-juaranya-rhd6jOdIMw.jpg',
    'source' => 'Ramdani Bur - OkeSport',
    'content' => 'Semenjak Circuit of the Americas (COTA) menjadi tuan rumah race MotoGP pada 2013, mereka sudah delapan kali menggelar balapan kelas teratas grand prix. Hasilnya, (The Baby Alien) julukan Marc Marquez memenangkan tujuh balapan di antaranya!',
  ],
      #BERITA 3
  [
    'title' => 'Berhasil Raih Poin Perdana di MotoGP Argentina 2022, Marco Bezzecchi Sampaikan Hal Ini kepada Valentino Rossi',
    'image' => 'https://img.okezone.com/content/2022/04/04/38/2572892/marco-bezzecchi-ucap-terima-kasih-kepada-valentino-rossi-usai-raih-poin-perdana-di-motogp-argentina-2022-6dbxTFHBvv.jpg',
    'source' => 'Quadiliba Al-Farabi - OkeSport',
    'content' => 'PEMBALAP Mooney VR46, Marco Bezzecchi akhirnya berhasil pecah telur. Pira  23 tahun itu sukses mendapat poin pertama di MotoGP Argentina 2022 yang telah berakhir pada Senin (4/4/2022) dini hari WIB, usai finis di urutan kesembilan. Dirinya pun sangat berterima kasih kepada seluruh ofisial Mooney VR46 karena telah membantunya meraup poin perdananya. Selain itu, ia juga mengucapkan terima kasih kepada Valentino Rossi, yang menurutnya sudah berjasa membawa dirinya mentas di MotoGP.',
  ],
];
// Tag penutup PHP
?>

<!doctype html> <!-- Tag pembuka HTML -->
<html lang="en">
<!-- Tag language HTML -->

<head>
  <!-- Tag pembuka Head -->
  <style>
    /* Tag pembuka Style untuk CSS */
    div {
      /* Mengubah atribut pada elemen div */
      text-align: justify;
      /* Mengubah alignment untuk text menjadi justify atau rata kanan kiri */
      text-justify: inter-word;
      /* Justify teks berlaku untuk tiap kata */
    }
  </style>

  <meta charset="utf-8"> <!-- Mengatur set karakter bertipe utf-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mengatur viewport agar responsif -->

  <!-- CDN Bootstrap untuk CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Tugas Index Page</title> <!-- Judul dokumen -->
</head> <!-- Tag penutup Head -->

<body>
  <!-- Tag pembuka Body -->
  <main class="container my-3">
    <!-- class container dari bootstrap untuk menampung elemen -->
    <section class="text-center">
      <!-- section dengan class text-center untuk menengahkan teks -->
      <h4><?= $nama . "_" . $nim ?></h4> <!-- elemen h4 dengan tag php echo untuk menampilkan variabel nama dan nim -->
    </section>
    <?php foreach ($data as $item) : ?>
      <!--  -->
      <section>
        <div class="card mb-4" style="width: 100%;">
          <img src="<?= $item['image'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $item['title'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $item['source'] ?></h6>
            <p class="card-text"><?= $item['content'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
      </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>