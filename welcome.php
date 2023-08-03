<!DOCTYPE html>
<html>
<head>  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <title>WEBMASTER 1.0</title>
  <link rel="stylesheet" href="stylewelcome.css">
</head>
<body>
<?php

$servername = "localhost";
$database = "akademik";
$username = "root";
$password = "";
	//membuat koneksi
	$conn = mysqli_connect($servername, $username, $password, $database);
	
	//cek koneksi
		if (!$conn) {
			die("Koneksi Fail: " . mysqli_connect_error());
		}
		//echo "Koneksi Berhasil";
		mysqli_close($conn);
?>
   
    <nav>
      <div class="wrapper">
        <div class="logo"><a href=" ">Web Trial 1.0</a></div>
        <div class="menu">
          <ul>
            <li><a href="index.html">				HOME			</a></li>
            <li><a href="jurusan.html">			JURUSAN			</a></li>
            <li><a href="#Matkul">				MATA KULIAH		</a></li>
            <li><a href="#Journal">				JOURNAL			</a></li>
            <li><a href="#Contact">				KONTAK			</a></li>
            <li><a href=" " class="tbl-biru">	REGISTER		</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="wrapper">
      <section id="'HOME">
        <img src="asset\gmbr1.jpg">
        <div class="KOLOM">
          <p class="deskripsi">Kuliah itu Menyenangkan #AyoKuliahDiUnindra</p>
          <h2> Kuliah, Kerja, Tipes !</h2>
          <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </div>
      </section>
      
    </div>
</body>
</html>
