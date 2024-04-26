    <?php
    class Mahasiswa{
        public $nama;
        public $nim;
        public $kuliah;
        public $matkul;
        public $nilai;   
    }
        $data = new Mahasiswa();
        
        $data->nama = $_POST['nama'] ;
        $data->nim = $_POST['nim'] ;
        $data->kuliah = $_POST['kuliah'] ;
        $data->matkul = $_POST['matkul'];
        $data->nilai = $_POST['nilai'];
        
        
        if($data->nilai>=85){
            $grade = "A";
            $predikat = "Sangat Memuaskan";
            $status = "lulus";
        }
    
        else if($data->nilai>=76 && $data->nilai <= 84){
            $grade = "B";
            $predikat = "Memuaskan";
            $status = "lulus";
        }
    
        else if($data->nilai>=50 && $data->nilai <= 75){
            $grade = "C";
            $predikat = "cukup";
            $status = "lulus";
        }
    
        else if ($data->nilai >= 30 && $data->nilai <= 49){
            $grade = "D";
            $predikat = "Kurang";
            $status = "lulus";
        }
    
        else{
            $grade = "E";
            $predikat = "Sangat Kurang";
            $status = "lulus";
        }
        
          
           
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
        <title>Document</title>
    </head>
    <body>
        <h1 class="font" align='center'>  Daftar Nilai Ujian Mahasiswa</h1>
        <table cellspacing='0'  cellpadding='5' width="100%">
            <thead>
                <tr>
                   <th> NIM</th>
                   <th> NAMA</th>
                   <th> KULIAH</th>
                   <th> MATKUL</th>
                   <th> NILAI</th>
                   <th> GRADE</th>
                   <th> PREDIKAT</th>
                   <th> STATUS </th>
                </tr>
            </thead>
            <tbody>
               <tr>
                   <td> <?php echo $data->nim;  ?></td>
                   <td> <?php echo $data->nama ?></td>
                   <td> <?php echo $data->kuliah ?></td>
                   <td> <?php echo$data->matkul?></td>
                   <td> <?php echo $data->nilai ?></td>
                   <td> <?php echo $grade?></td> 
                   <td> <?php echo $predikat?></td>
                   <td> <?php echo $status?></td>
                </tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </body>
    </html>
