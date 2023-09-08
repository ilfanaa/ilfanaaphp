<?php 
// $mahasiswa = [
//     ["ilfanaa", "3456787654", "ilfanaa ac.id", "rekayasa perangkat lunak"],
//     ["ramadhani ananta putra", "3456787647", "ramadhanii@gmail.com", "rpl"]
// ];

//array associative
//definisinya sama seperti array numerik, kecuali
//key nya adalah string yang kita buat sendiri
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
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs ["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>

