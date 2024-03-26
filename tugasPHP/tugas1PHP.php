<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <h2> Masukan data anda disini yaa</h2>
    <label for="nama"> Masukan nama anda</label>
    <input type="text" name="nama" placeholder="Input Nama Anda" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"> 
    <hr>
    <label for="pekerjaan">Masukkan Pekerjaan anda</label> 
    <input type="text" name="pekerjaan" placeholder="Input Pekerjaan Anda" value="<?=isset($_POST['pekerjaan']) ? $_POST['pekerjaan'] : ''?>">
    <hr>
    <label for="hobi">Masukkan hobi anda</label>
    <input type="text" name="hobi" placeholder="Input hobi anda" value="<?=isset($_POST['hobi']) ? $_POST['hobi'] : ''?>">
    <button type="submit" name="submit" value="simpan"> Click disini yakkk</button>

</form>

<?php
    if(isset($_POST['submit'])){

        echo "<strong>Nama : </strong>". $_POST['nama']. "<hr>";
        echo "<strong>Pekerjaan : </strong>". $_POST['pekerjaan']. "<hr>";
        echo "<strong>Hobi : </strong>". $_POST['hobi']. "<hr>";
    }
?>
</body>
</html>

