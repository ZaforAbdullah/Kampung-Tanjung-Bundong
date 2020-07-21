
<html>

    <head>
    <title>kampung bundong</title>
        <link rel="stylesheet" href="style2.css">
    </head>
<body>

    
         <div class="topnav">
  <a class="active" href="home1.php">Home</a>
  <a href="view.php">View</a>
  <a href="search.php">Search</a>
             <li ><a href="index.php">Log Out</a></li>
  
</div> 
<br>
<div class="contenthome">
    <div class="form2">     
        <form id="form2" name="form2" method="post" action="editprocess.php">
<label for="nama">Masukkan No. MyKad</label><input type="text" name="ckad"  />
<br class="clear" />
<h2>Ketua Keluarga</h2>
<label for="nama">Nama</label><input type="text" name="nama" id="nama" />
<br class="clear" /> 
<label for="mykad">No. Mykad</label><input type="text" name="mykad" id="mykad" />
<br class="clear" /> 
<label for="lorong">No. Lot/Lorong</label><input type="text" name="lorong" id="lorong" />
<br class="clear" /> 
<label for="telephone">No. Telefon/HP</label><input type="text" name="telephone" id="telephone" />
<br class="clear" /> 
<label for="pekerjaan">Pekerjaan</label><input type="text" name="pekerjaan" id="pekerjaan" />
<br class="clear" /> 
<br>
<label for="alamat">Alamat Majikan</label><textarea name="alamat" id="alamat" cols="45" rows="5"></textarea>
<br class="clear" /> 
<br>
<label for="asal">Tempat Asal</label><textarea name="asal" id="asal" cols="45" rows="5"></textarea>
<br class="clear" /> 
<label for="pendidikan">Pendidikan</label><input type="text" name="pendidikan" id="pendidikan" />
<br class="clear" /> 
<label for="tempat">Tempat Lahir</label><input type="text" name="tempat" id="tempat" />
<br class="clear" /> 
<label for="tarikh">Tarikh Kahwin (tahun/bulan/hari)</label><input type="text" name="tarikh" id="tarikh" />
<br class="clear" /> 
<label for="pejabat">Pejabat</label><input type="text" name="pejabat" id="pejabat" />
<br class="clear" /> 
<label for="gajipokok">Gaji Pokok: RM</label><input type="text" name="gajipokok" id="gajipokok" />
<br class="clear" /> 
<h2>Isteri</h2>
<label for="isterinama">Nama</label><input type="text" name="isterinama" id="isterinama" />
<br class="clear" /> 
<label for="isterikad">No. Mykad</label><input type="text" name="isterikad" id="isterikad" />
<br class="clear" /> 
<label for="isteripekerjaan">Pekerjaan</label><input type="text" name="isteripekerjaan" id="isteripekerjaan" />
<br class="clear" /> 
<br>
<label for="isterialamat">Alamat Majikan</label><textarea name="isterialamat" id="isterialamat" cols="45" rows="5"></textarea>
<br class="clear" /> 
<br>
<label for="isteriasal">Tempat Asal</label><textarea name="isteriasal" id="isteriasal" cols="45" rows="5"></textarea>
<br class="clear" /> 
<label for="isteripenddikan">Pendidikan</label><input type="text" name="isteripenddikan" id="isteripenddikan" />
<br class="clear" /> 
<label for="isteritempat">Tempat Lahir</label><input type="text" name="isteritempat" id="isteritempat" />
<br class="clear" /> 
<label for="isterigaji">Gaji pokok: RM</label><input type="text" name="isterigaji" id="isterigaji" />
<br class="clear" /> 
<label for="isteritele">No. telefon/HP</label><input type="text" name="isteritele" id="isteritele" />
<br class="clear" /> 
<h2>Tanggungan</h2>
<label for="bil">Bil</label><textarea name="bil" id="bil" cols="45" rows="5"></textarea>
<br class="clear" /> 
<label for="namaanak">Nama Anak/Tanggungan</label><textarea name="namaanak" id="namaanak" cols="45" rows="5"></textarea>
<br class="clear" /> 
<label for="mykid">No. Mykad/Mykid</label><textarea name="mykid" id="mykid" cols="45" rows="5"></textarea>
<br class="clear" /> 
<label for="pesekolahan">Pekerjaan/Pesekolahan</label><textarea name="pesekolahan" id="pesekolahan" cols="45" rows="5"></textarea>
<br class="clear" /> 
<h2>Harta: (Letak Tiada untuk yang tidak berkenaan)</h2>
<label for="rumah">Rumah</label><input type="text" name="rumah" id="rumah" />
<br class="clear" /> 
<label for="kereta">Kenderaan: Kereta/Van/Lori</label><input type="text" name="kereta" id="kereta" />
<br class="clear" /> 
<label for="motorsikal">Motorsikal</label><input type="text" name="motorsikal" id="motorsikal" />
<br class="clear" /> 
<label for="tv">Tv/Radio</label><input type="text" name="tv" id="tv" />
<br class="clear" /> 
<label for="komputer">Komputer/Astro</label><input type="text" name="komputer" id="komputer" />
<br class="clear" /> 
<label for="tanah">Tanah(Hektar/Ekar)</label><input type="text" name="tanah" id="tanah" />
<br class="clear" /> 
<label for="nyatakan">Lain-lain (Nyatakan)</label><input type="text" name="nyatakan" id="nyatakan" />
<br class="clear" /> 
<h2>Kemahiran (Nyatakan: Ada/Tidak)</h2>
<label for="latiyanpertanian">Latihan Pertanian</label><input type="text" name="latiyanpertanian" id="latiyanpertanian" />
<br class="clear" /> 
<label for="latiyanternakan">Latihan Ternakan</label><input type="text" name="latiyanternakan" id="latiyanternakan" />
<br class="clear" /> 
<label for="parikanan">Latihan Perikanan</label><input type="text" name="parikanan" id="parikanan" />
<br class="clear" /> 
<label for="keusahawaan">Latihan Keusahawaan</label><input type="text" name="keusahawaan" id="keusahawaan" />
<br class="clear" /> 
<label for="kti">Kemahiran Teknikan Industri</label><input type="text" name="kti" id="kti" />
<br class="clear" /> 
<label for="kp">Kemahiran Pertukangan</label><input type="text" name="kp" id="kp" />
<br class="clear" /> 
<label for="kk">Kemahiran Kraftangan</label><input type="text" name="kk" id="kk" />
<br class="clear" /> 
<label for="politeknik">Politeknik</label><input type="text" name="politeknik" id="politeknik" />
<br class="clear" /> 
<label for="vokasional">Vokasional</label><input type="text" name="vokasional" id="vokasional" />
<br class="clear" /> 
<label for="ikm">Institut Kemahiran Mara/IKM</label><input type="text" name="ikm" id="ikm" />
<br class="clear" /> 
<label for="ilp">Institut Latihan Perindustrian(ILP)</label><input type="text" name="ilp" id="ilp" />
<br class="clear" /> 
<label for="ppks">Pusat Pembangunan Kemahiran Sarawak(PPKS)</label><input type="text" name="ppks" id="ppks" />
<br class="clear" /> 
<label for="giatmara">GIAT Mara</label><input type="text" name="giatmara" id="giatmara" />
<br class="clear" /> 
<label for="tiada">Lain=Lain</label><input type="text" name="lain" id="lain" />
<br class="clear" />
<label for="tiada">Tiada</label><input type="text" name="tiada" id="tiada" />
<br class="clear" /> 
<div class="input-group">
			
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >Kemaskini</button>
<br>
<br>
	<button class="btn" type="submit" name="save" >Save</button>

		</div>
            
<br class="clear" /> 
</form>
           <a href="home1.php"> <button class="button1" type="button">Balik</button></a>
        </div>
        
    </div>
	<br>
    <div class="footer">
        Kampung Tanjung Bundong &copy;University Malaysia Sarawak 2018
    </div>
</body>



</html>