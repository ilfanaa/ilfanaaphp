<?php 
$mahasiswa = [
    ["ilfanaa", "0384373635", "rekayasa perangkat lunak", "ilfanaa.ac.id"],
    ["azzahra", "0384373687", "rpl", "azzaahra@gmail.com"],
    ["rinaa", "6289263839", "tkj", "rinaaa@gmail.com"]
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>


<?php foreach( $mahasiswa as $nhs ) : ?>
<ul>
    <li>Nama : <?=  $nhs[0]; ?></li>
    <li>NRP :<?=  $nhs[1]; ?></li>
    <li>Jurusan :<?=  $nhs[2]; ?></li>
    <li>Email :<?=  $nhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>