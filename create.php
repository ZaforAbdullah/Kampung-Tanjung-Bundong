<!DOCTYPE html>
<html>
<head>
	<title>kampung bundong</title>
	<link rel="stylesheet" href="style2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body background="bac.jpg">
    
        <div class="topnav">
			<a class="active" href="home1.php">Home</a>
			<a href="view.php">View</a>
			<a href="search.php">Search</a>
            <b><a href="index.php" >Log Out</a></b>
		</div>
		<br>
<div class="contenthome">		
<div class="form1">
    <form id="form1" name="form1" method="post" action="function.php">
	<h2>Ketua Keluarga</h2>
<label for="nama">Nama</label><input type="text" name="nama" id="nama" />
<br> 
<label for="mykad">No. Mykad</label><input type="text" name="mykad" id="mykad" />
<br > 
<label for="lorong">No. Lot/Lorong</label><input type="text" name="lorong" id="lorong" />
<br > 
<label for="telephone">No. Telefon/HP</label><input type="text" name="telephone" id="telephone" />
<br > 
<label for="pekerjaan">Pekerjaan</label><input type="text" name="pekerjaan" id="pekerjaan" />
<br > 
<br>
<label for="alamat">Alamat Majikan</label><textarea name="alamat" id="alamat" cols="45" rows="5"></textarea>
<br > 
<br>
<label for="asal">Tempat Asal</label><textarea name="asal" id="asal" cols="45" rows="5"></textarea>
<br > 
<label for="pendidikan">Pendidikan</label><input type="text" name="pendidikan" id="pendidikan" />
<br > 
<label for="tempat">Tempat Lahir</label><input type="text" name="tempat" id="tempat" />
<br > 
<label for="tarikh">Tarikh Khawin (tahun/bulan/hari)</label><input type="text" name="tarikh" id="tarikh" />
<br > 
<label for="pejabat">Pejabat</label><input type="text" name="pejabat" id="pejabat" />
<br > 
<label for="gajipokok">Gaji Pokok: RM</label><input type="text" name="gajipokok" id="gajipokok" />
<br>
<h2>Isteri</h2>
<label for="isterinama">Nama</label><input type="text" name="isterinama" id="isterinama" />
<br > 
<label for="isterikad">No. Mykad</label><input type="text" name="isterikad" id="isterikad" />
<br > 
<label for="isteripekerjaan">Pekerjaan</label><input type="text" name="isteripekerjaan" id="isteripekerjaan" />
<br > 
<br>
<label for="isterialamat">Alamat Majikan</label><textarea name="isterialamat" id="isterialamat" cols="45" rows="5"></textarea>
<br > 
<br>
<label for="isteriasal">Tempat asal</label><textarea name="isteriasal" id="isteriasal" cols="45" rows="5"></textarea>
<br > 
<label for="isteripenddikan">Pendidikan</label><input type="text" name="isteripenddikan" id="isteripenddikan" />
<br > 
<label for="isteritempat">Tempat Lahir</label><input type="text" name="isteritempat" id="isteritempat" />
<br > 
<label for="isterigaji">Gaji pokok: RM</label><input type="text" name="isterigaji" id="isterigaji" />
<br > 
<label for="isteritele">No. telefon/HP</label><input type="text" name="isteritele" id="isteritele" />
<br > 
<h2>Tanggungan</h2>
<label for="bil">Bil</label><textarea name="bil" id="bil" cols="45" rows="5"></textarea>
<br > 
<label for="namaanak">Nama Anak/Tanggungan</label><textarea name="namaanak" id="namaanak" cols="45" rows="5"></textarea>
<br > 
<label for="mykid">No. Mykad/Mykid</label><textarea name="mykid" id="mykid" cols="45" rows="5"></textarea>
<br > 
<label for="pesekolahan">Pekerjaan/Pesekolahan</label><textarea name="pesekolahan" id="pesekolahan" cols="45" rows="5"></textarea>
<br > 
<h2>Harta: (Letak Tiada untuk yang tidak berkenaan)</h2>
<label for="rumah">Rumah</label><input type="text" name="rumah" id="rumah" />
<br > 
<label for="kereta">Kenderaan: Kereta/Van/Lori</label><input type="text" name="kereta" id="kereta" />
<br > 
<label for="motorsikal">Motorsikal</label><input type="text" name="motorsikal" id="motorsikal" />
<br > 
<label for="tv">Tv/Radio</label><input type="text" name="tv" id="tv" />
<br > 
<label for="komputer">Komputer/Astro</label><input type="text" name="komputer" id="komputer" />
<br > 
<label for="tanah">Tanah(Hektar/Ekar)</label><input type="text" name="tanah" id="tanah" />
<br > 
<label for="nyatakan">Lain-lain (Nyatakan)</label><input type="text" name="nyatakan" id="nyatakan" />
<br > 

<h2>Kemahiran (Nyatakan: Ada/Tidak)</h2>
<label for="latiyanpertanian">Latihan Pertanian</label><input type="text" name="latiyanpertanian" id="latiyanpertanian" />
<br > 
<label for="latiyanternakan">Latihan Ternakan</label><input type="text" name="latiyanternakan" id="latiyanternakan" />
<br > 
<label for="parikanan">Latihan Perikanan</label><input type="text" name="parikanan" id="parikanan" />
<br > 
<label for="keusahawaan">Latihan Keusahawaan</label><input type="text" name="keusahawaan" id="keusahawaan" />
<br > 
<label for="kti">Kemahiran Teknikan Industri</label><input type="text" name="kti" id="kti" />
<br > 
<label for="kp">Kemahiran Pertukangan</label><input type="text" name="kp" id="kp" />
<br > 
<label for="kk">Kemahiran Kraftangan</label><input type="text" name="kk" id="kk" />
<br > 
<label for="politeknik">Politeknik</label><input type="text" name="politeknik" id="politeknik" />
<br > 
<label for="vokasional">Vokasional</label><input type="text" name="vokasional" id="vokasional" />
<br > 
<label for="ikm">Institut Kemahiran Mara/IKM</label><input type="text" name="ikm" id="ikm" />
<br > 
<label for="ilp">Institut Latihan Perindustrian(ILP)</label><input type="text" name="ilp" id="ilp" />
<br > 
<label for="ppks">Pusat Pembangunan Kemahiran Sarawak(PPKS)</label><input type="text" name="ppks" id="ppks" />
<br > 
<label for="giatmara">GIAT Mara</label><input type="text" name="giatmara" id="giatmara" />
<br >
<label for="giatmara">Lain=Lain</label><input type="text" name="lain" id="lain" />
<br > 
<label for="tiada">Tiada</label><input type="text" name="tiada" id="tiada" />
<br > 
<br>
<br>
<input class="submitbt" type="submit" name="submit" id="submit" value="submit" />      

</form>
</div>
           <a href="home1.php"> <button class="button1" type="button">Balik</button></a>
             
    </div>
	<br> 
    <div class="footer">
        Kampung Tanjung Bundong &copy;University Malaysia Sarawak 2018
    </div>
</body>



</html>