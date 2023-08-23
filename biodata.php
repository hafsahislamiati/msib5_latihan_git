<div class="container pt-5">
<div class="p-3 mb-2 bg-danger text-white">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Biodata Diri</title>
</head>
<body>

    <?php
    // Data biodata
    $nama = "Hafsah Islamiati Ayuningtyas";
    $nama_panggilan = "Hafsah";
    $asal_kampus = "Universitas Langlangbuana";
    $program_studi = "Teknik Informatika";
    $hobi = "Berenang dan Olahraga Badminton";
    $motto_hidup = "Setiap kesulitan selalu ada kemudahan dan setiap masalah pasti ada solusi"
    ?>

    <center>
    <h2>Biodata Diri</h2>
    <hr>
    <p>Nama: <?php echo $nama; ?></p>
    <p>Nama Panggilan: <?php echo $nama_panggilan; ?></p>
    <p>Asal Kampus: <?php echo $asal_kampus; ?></p>
    <p>Program Studi: <?php echo $program_studi; ?></p>
    <p>Hobi: <?php echo $hobi; ?></p>
    <p>Motto Hidup: <?php echo $motto_hidup; ?></p>
    </center>
    </div>
</body>
</html>
