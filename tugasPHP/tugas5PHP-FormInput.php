<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Input</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    form {
        width: 300px;
        margin: 0 auto;
    }
    input[type="text"], input[type="number"],input[type="email"], textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }
    textarea {
        height: 100px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<h1> <center> FORM INPUT DATA MAHASISWA </center></h1>
<form action="process.php" method="POST">   
        <label for="nim">NIM:</label>
        <input type="number" id="nim" name="nim" required>
    
        <label for="name">Nama:</label>
        <input type="text" id="name" name="nama" required>
    
        <label for="text">Kuliah:</label>
        <input type="text" id="kuliah" name="kuliah" required>
    
        <label for="text">Mata Kuliah:</label>
        <input type="text" id="matkul" name="matkul" required>

        <label for="text">Nilai Matkul :</label>
        <input type="number" id="nilai" name="nilai" required>
    
        <input type="submit" value="simpan" name="simpan">
</form>

</body>
</html>
