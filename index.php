<!DOCTYPE html>
<html>
<body>
<style>
body {
  background-color: white;
  background-image: none;
  position: absolute;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 14px;
  border: 1px solid #ccc;
  margin-right:20px; 
  margin-left: 20px;
  margin-top: 2px;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  padding: 20px 60px;
  width: 500px;
  box-shadow: 0 0 10px 0 rgba(0,0,0,0.2);
}

.container{
    padding: 16px;
    border: 10px ;
    margin-left: 50px;
    margin-right: 50px;
    border-radius: 10px;

}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/*Rounded button*/
.container form button{
  width: 100%;
    height: 40px;
    padding: 5px 0;
    border: none;
    font-size: 18px;
    color: #fafafa;
    border-radius: 20px;
}
.btn-primary{
    background-color: #1E18EA;
    color: #fafafa;
    border: none;
    border-radius: 20px;
    width: 100px;
    height: 40px;
    padding: 5px 0;
    font-size: 18px;
    margin-top: 10px;
    margin-left: 50px;

}
.btn-danger {
    border-radius: 20px;
    font-size: 18px;
    background-color: #f44336;
    color: #fafafa;
    border: none;
    width: 100px;
    height: 40px;
    padding: 5px 0;
    font-size: 18px;
    margin-top: 10px;
    margin-left: 50px;

}
button:hover {
  opacity: 0.8;
}
.container {
  padding: 16px;
}
h1{
    text-align: center;
    font-size: 30px;
    font-weight: 600;
}
h2{font-size: 30px;
    margin-left: 2px;
    font-weight: 600;
}
</style>
<div class="logo">
    <img src="logo.png" alt="logo.png" style="width: 100px; height: 100px; margin-left: 200px; margin-top: 20px;">
</div>
<h1>Pencarian Mahasiswa<br>Unisbank Semarang</h1>
<!--center form nama dan nim-->
<form action="lat2.php" method="post">
  <div class="container">
    <label for="nama"><b>Nama Mahasiswa</b></label>
    <input type="text" placeholder="Masukkan Nama" name="nama" style= "width=500px;" required>
    <label for="nim"><b>NIM</b></label>
    <input type="text" placeholder="Masukkan NIM" name="nim" required>
    <button type="submit" class="btn btn-primary">Cari</button>
    <button type="button" class="btn btn-danger" onclick="window.location.href='lat2.php'">Refresh</button>
    <script>
    function myFunction() {
      location.reload();
    }
    </script>
  </div>
</form>
<h2>Hasil</h2>
<!-- menampilkan nama dan nim -->

<?php
if (isset($_POST["nama"]) && isset($_POST["nim"])) {
    echo "Nama &nbsp; : " . $_POST["nama"] . "<br>";
    echo "NIM  &nbsp; : "   . $_POST["nim"]  . "<br>";
}
?>

<!--Menampilkan jumlah karakter nim-->
<?php
if (isset($_POST["nim"])) {
    $nim = $_POST["nim"];
    $jumlah = strlen($nim);
    echo "Jumlah karakter &nbsp; : " . "  $jumlah" . "<br>";
}
?>
<!--Menampilkan jumlah karakter jika karater . tidak dihitung-->
<?php
if (isset($_POST['nim'])) {
    $nim = $_POST['nim'];
    $jumlah = strlen($nim);
    $jumlah = $jumlah - substr_count($nim, ".");
    echo "Jumlah karakter tanpa titik : $jumlah". "<br>";
}
?>
<!--menampilkan angkatan -->
<?php
if (isset($_POST["nim"])) {
    if (substr($_POST["nim"], 0, 2) == "16") {
        echo "Angkatan &nbsp: 2016". "<br>";
    } elseif (substr($_POST["nim"], 0, 2) == "17") {
        echo "Angkatan &nbsp: 2017". "<br>";
    } elseif (substr($_POST["nim"], 0, 2) == "18") {
        echo "Angkatan &nbsp: 2018". "<br>";
    } elseif (substr($_POST["nim"], 0, 2) == "19") {
        echo "Angkatan &nbsp: 2019". "<br>";
    } elseif (substr($_POST["nim"], 0, 2) == "20") {
        echo "Angkatan &nbsp: 2020". "<br>";
    } elseif (substr($_POST["nim"], 0, 2) == "21") {
        echo "Angkatan &nbsp: 2021". "<br>";
    } else {
        echo "Angkatan &nbsp: 2022". "<br>";
    }
}
    

?>
<!-- menampilkan fakultas -->
<?php
if (isset($_POST["nim"])) {
    if (substr($_POST["nim"], 3, 2) == "01") {
        echo "Fakultas &nbsp;: Fakultas Teknologi Informasi dan Industri". "<br>";
    } elseif (substr($_POST["nim"], 3, 2) == "02") {
        echo "Fakultas &nbsp;: Fakultas Hukum dan Bahasa". "<br>";
    } elseif (substr($_POST["nim"], 3, 2) == "05") {
        echo "Fakultas &nbsp;: Fakultas Ekonomi dan Bisnis". "<br>";
    } elseif (substr($_POST["nim"], 3, 2) == "08") {
        echo "Fakultas &nbsp;: Vokasi". "<br>";
    } else {
        
    }
}
?>
<!-- menampilkan jurusan disetiap fakultas -->
<?php
if (isset($_POST["nim"])) {
    if (substr($_POST["nim"], 3, 2) == "01") {
        if (substr($_POST["nim"], 6, 2) == "53") {
            echo "Jurusan &nbsp;: Teknik Informatika". "<br>";
        } elseif (substr($_POST["nim"], 6, 2) == "51") {
            echo "Jurusan &nbsp;: Teknik Industri". "<br>";
        } elseif (substr($_POST["nim"], 6, 2) == "55") {
            echo "Jurusan &nbsp;: Sistem Informasi". "<br>";
        }
        else{
            echo "Jurusan &nbsp;: Magister Teknologi Informasi". "<br>";
        }
    } elseif (substr($_POST["nim"], 3, 2) == "02") {
        if (substr($_POST["nim"], 6, 2) == "51") {
            echo "Jurusan &nbsp;: Ilmu Hukum". "<br>";
        } else{
            echo "Jurusan &nbsp;: Sastra Inggris". "<br>";
    
        }
    } elseif (substr($_POST["nim"], 3, 2) == "05") {
        if (substr($_POST["nim"], 6, 2) == "51") {
            echo "Jurusan &nbsp;: Manajemen". "<br>";
        } else {
            echo "Jurusan &nbsp;: Akutansi". "<br>";
        }
    } elseif (substr($_POST["nim"], 3, 2) == "08") {
        if (substr($_POST["nim"], 6, 2) == "31") {
            echo "Jurusan &nbsp;: Manajemen Informatika ". "<br>";
        } elseif (substr($_POST["nim"], 6, 2) == "34") {
            echo "Jurusan &nbsp;: Keuangan Perbankan". "<br>";
        }
        else{
            echo "Jurusan &nbsp;: Perhotelan". "<br>";
        }
    } else {
        
    }
}
        
    

?>
</body>
</html>
