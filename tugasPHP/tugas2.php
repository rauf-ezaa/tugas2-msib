<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
 <div class="kotak_login">
     
 <h2>
    <form action="" method="POST">
        <center> <p class ="tombol_login"> Form Belanja </p> </center>
    
    <label for="nama_pelanggan">Nama Pembeli  </label>
    &nbsp; &emsp;
    <input type="text" name="nama_pelanggan">
    <br>
    <h5>
    <label for="prd">Product Pilihan   </label>
    &nbsp; &emsp;
    <select name="product">
        <option value="Tv"  >TV</option>
        <option value="Kulkas"  >Kulkas</option>
        <option value="MesinCuci"  >Mesin Cuci</option>
    </select>
    <br>
    <h5>
    <label for="jml"> Jumlah Beli  </label>
    &emsp; &nbsp; &emsp;
    <input type="number" name="jumlahBeli" id="jml_beli">
    <br>
    <h2>
    <button class ="tombol_login"type="submit" name="submit" value="submit" > Hitung</button>
        
    </form>
    
 <?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama_pelanggan'];
        $prd = $_POST['product'];
        $product = $_POST['product'];
        $jumlah_beli = $_POST['jumlahBeli'];
        
        switch($product){
            case 'Tv':
                $harga = 1000000;
                break;
                
                case 'Kulkas':
                    $harga = 1200000;
                    break;
                    
                    case 'MesinCuci':
                        $harga = 2000000;
                        break;
                    }     
                 
            $totalBelanja = $harga * $jumlah_beli;
            $hargaDiskon = 0.20 * $totalBelanja;
            $totalSetelahDiskon = $totalBelanja - $hargaDiskon;
            $ppn = 0.10 * ($totalSetelahDiskon - $hargaDiskon);
            $hargaBersih = ($totalBelanja + $hargaDiskon) + $ppn;

            
               echo "<hr>";
               echo "<label> <center> Nama Pelanggan : $nama </center> </label>"; 
               echo "<label> <center> Product yang dipilih  : $product </center> </label>"; 
               echo "<label> <center> Harga Satuan : Rp. $harga </center> </label>"; 
               echo "<label> <center> Total Belanja : Rp. $totalBelanja </center> </label>"; 
               echo "<label> <center> Potongan Diskon :Rp. $totalSetelahDiskon </center> </label>";
               echo "<label> <center> PPN : Rp. $ppn </center> </label>"; 
               echo "<label> <center> harga bersih : Rp. $hargaBersih </center> </label>"; 
                  
}
?>       
 </div>
   
</body>
</html>

