<?php
$nim = '202410101122';
$nama = 'AULIA SINTA RAHMALIA PUTRI';
$data = [
  [
    'judul' => 'Jadi Aplikasi Investasi Favorit Milenial, Bibit.id Hadirkan Fitur-Fitur Seru',
    'gambar' => 'https://static.republika.co.id/uploads/images/inpicture_slide/angie-anandita-tjhatra-selaku-head-of-digital-marketing-bibit_220403094726-528.PNG',
    'penulis' => 'Gita Amanda - Republika.co.id',
    'isi' => 'Menyikapi hal ini, di tahun 2021 Bibit telah mengadakan lebih dari 80 sesi edukasi secara gratis kepada publik. Di tahun 2022, upaya-upaya serupa akan dilanjutkan dan digencarkan dengan cara bermitra dengan berbagai organisasi seperti lembaga pendidikan, pelaku industri di sektor jasa keuangan, media massa, komunitas profesi, komunitas hobi, dan lembaga nonprofit.',
  ],
  [
    'judul' => 'Berita Gunung Merapi Hari Ini 4 April 2022: 37 Gempa Guguran',
    'gambar' => 'https://mmc.tirto.id/image/otf/700x0/2022/03/10/antarafoto-aktivitas-gunung-merapi-100322-ajn-2_ratio-16x9.jpg',
    'penulis' => 'Alexander Haryanto - tirto.id',
    'isi' => 'Kondisi Gunung Merapi hari ini, Senin, 4 April 2022 mengalami 37 kali gempa guguran. Peristiwa itu diketahui berdasarkan periode pengamatan pukul 12.00-18.00 WIB. Menurut laman resmi magma.esdm.go.id, status gunung api yang terletak di perbatasan Jawa Tengah dan Daerah Istimewa Yogyakarta masih dinyatakan Siaga Level III. Oleh karena itu, masyarakat diminta untuk tidak melakukan kegiatan apapun di daerah potensi bahaya.',
  ],
  [
    'judul' => 'Siapa Siti Latifah Herawati Diah yang Jadi Google Doodle Hari Ini?',
    'gambar' => 'https://asset.kompas.com/crops/Xq4fcaJCbIyRWho7Ss1zkulF7Rw=/203x49:1056x618/750x500/data/photo/2022/04/03/6248e9812f488.jpg',
    'penulis' => 'Diva Lufiana Putri - Kompas.com',
    'isi' => ' Google Doodle hari ini, Minggu (3/4/2022), menampilkan seorang wanita dengan tiga penampilan berbeda, yakni memakai toga, berkebaya sembari menggenggam koran, serta menulis. Sosok wanita tersebut adalah Siti Latifah Herawati Diah, seorang jurnalis wanita kenamaan Indonesia. Sebagai perayaan 105 tahun hari kelahirannya, Google Doodle mempersembahkan sosoknya dalam balutan gambar yang sesuai dengan sepak terjangnya.',
  ],
];
?>

<!doctype html>
<html lang="en">

<head>
  <style>
    div {
      text-align: justify;
      text-justify: inter-word;
    }
  </style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Tugas Index Page</title>
</head>

<body>
  <main class="container my-3">
    <section class="text-center">
      <h4><?= $nama . "_" . $nim ?></h4>
    </section>
    <?php foreach ($data as $item) : ?>
      <section>
        <div class="card mb-4" style="width: 100%;">
          <img src="<?= $item['gambar'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $item['judul'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $item['penulis'] ?></h6>
            <p class="card-text"><?= $item['isi'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
      </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>