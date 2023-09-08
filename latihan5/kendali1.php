<?php
// $_GET
$mahasiswa = [
    [
    "nama" => "ilfanaa",
    "nrp" => "3456787654",
    "email" => "ilfanaa ac.id",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "gambar1.jpeg"
    ],
    [
     "nama" => "ramadhani ananta putra",
    "nrp" => "3456787647",
    "email" => "ramadhanii@gmail.com",
    "jurusan" => "rpl",
    "gambar" => "gambar2.jpeg"
    
    ]
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li>
            <a href="kendali2.php?nama=<?= $mhs["nama"]; ?>&nrp= <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a> 
        </li>
        <?php endforeach; ?>

    </ul>
</body>
</html>