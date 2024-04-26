<?php

    // data array dari mahasiswa

    $mhs1=['nama'=>'Andi Santono','nim'=>'0111111','nilai'=> 95];
    $mhs2=['nama'=>'Budi Kurniawan','nim'=>'0111112','nilai'=>80];
    $mhs3=['nama'=>'Candi Badur','nim'=>'0111113','nilai'=>78];
    $mhs4=['nama'=>'Denis Caputra','nim'=>'011114','nilai'=>76];
    $mhs5=['nama'=>'Erik Manahel','nim'=>'011115','nilai'=>86];
    $mhs6=['nama'=>'Fatril Nusonto','nim'=>'0111116','nilai'=>50];
    $mhs7=['nama'=>'Gayama Harusita','nim'=>'011117','nilai'=>20];
    $mhs8=['nama'=>'Isma Lotono','nim'=>'011118','nilai'=>30];
    $mhs9=['nama'=>'Jami Sayir','nim'=>'011119','nilai'=>70];
    $mhs10=['nama'=>'Karni Buato','nim'=>'011120','nilai'=>65];

    $mahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5, $mhs6, $mhs7,$mhs8, $mhs9, $mhs10];
    $judul = ['NO','NAMA MAHASISWA','NIM','NILAI','KETERANGAN','GRADE','PREDIKAT'];

    $nilai= array_column($mahasiswa,'nilai');
    $nilaiTinggi = max($nilai);
    $nilaiRendah = min($nilai);
    $jumlahNilai = array_sum($nilai);
    $avgNilai = $jumlahNilai / count($mahasiswa);
    $hasilKeterangan = [
        'Nilai Tertinggi' => $nilaiTinggi,
        'Nilai Terendah ' => $nilaiRendah,
        'Rata-Rata Nilai' => $avgNilai,
        'Jumlah Mahasiswa' => count($mahasiswa), 
        'Jumlah Nilai Keseluruhan' => $jumlahNilai,
    ];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrauuf Reza Firmansyah</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<h3 class="font" align='center'>DAFTAR HASIL KELULUSAN MAHASISWA </h3>
    <table cellspacing='0' cellpadding='7' width="100%">
        <thead>
            <tr>
                <?php
                    foreach ($judul as $judul) {
                ?>
                    <th><?= $judul ?></th>
                <?php
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($mahasiswa as $datMahasiswa) {

                    $nilaiKet = $datMahasiswa['nilai'];
                    $keterangan_lulus = ($nilaiKet >= 65) ? "Lulus" : "Gagal";

                    if($nilaiKet>=85){
                        $grade = "A";
                    }
                
                    else if($nilaiKet>=76 && $nilaiKet <= 84){
                        $grade = "B";
                    }
                
                    else if($nilaiKet>=50 && $nilaiKet <= 75){
                        $grade = "C";
                    }
                
                    else if ($nilaiKet >= 30 && $nilaiKet <= 49){
                        $grade = "D";
                    }
                
                    else{
                        $grade = "E";
                    }
                
                    switch($grade){
                        case 'A':
                            $predikat = "Memuaskan";
                            break;
                        case 'B':
                            $predikat = "Bagus";
                            break;
                        case 'C':
                            $predikat = "Cukup";
                            break;
                        case 'D': 
                            $predikat = "Kurang";
                            break;
                        case 'E': 
                            $predikat = "Buruk";
                    }
                    ?>
                <tr>
                    <td> <?= $no++; ?>.</td>
                    <td><?= $datMahasiswa['nama']; ?></td>
                    <td><?= $datMahasiswa['nim']; ?></td>
                    <td><?= $datMahasiswa['nilai']; ?></td>
                    <td><?= $keterangan_lulus;?></td>
                    <td><?= $grade;?></td>
                    <td><?= $predikat; ?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
        <tfoot>
            
            <td colspan="7"> <center> TOTAL NILAI </center> </td>
            <?php
                foreach ($hasilKeterangan as $ket => $hasil) {
            ?>
            
            <tr>
                <td colspan="6"><?= $ket ?></td>
                <td colspan="5"><?= $hasil ?></td>
            </tr>
            <?php
                }
            ?>
        </tfoot>
</body>
</html>
