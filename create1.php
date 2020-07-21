<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style2.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home1.php">Home</a>
  <a href="view.php">View</a>
  <a href="search.php">Search</a>
  <a href="index.php">Log out</a>
</div>

<div id="main">
  <header>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <h2 style="text-align:center">Kampung Tanjung Bundong</h2>
</header>
<section>
  <nav1>
  
  </nav1>
  
  <article1>
    <div class="contenthome">
        <div class="cont">
            <h1>BORANG MAKLUMAT PENDUDUK</h1>
             <h3>LOT FASA II,TG.BUNDONG</h3>
             <h3>94300 KOTA SAMARAHAN,SARAWAK</h3>
            </div> 
         <div class="content">
            
            <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

               <?php				
    if (isset($_GET['view'])) {
    $kad=$_GET['view'];
    $a="SELECT * FROM borang WHERE mykad=$kad";
    $results = mysqli_query($con,$a); 
        if ($row = mysqli_fetch_assoc($results)) { ?>
     
             <h1>KETUA KELUARGA</h1>
             <h2>NAMA</h2><?php echo $row['nama']; ?>
             <h2>No. My KAD</h2><?php echo $row['mykad']; ?>
             <h2>No. LORONG</h2><?php echo $row['lorong']; ?>
             <h2>NO. TELEFON</h2><?php echo $row['telephone']; ?>
             <h2>PEKERJAAN</h2><?php echo $row['pekerjaan']; ?>
             <h2>ALAMAT MAJIKAN</h2><?php echo $row['alamat']; ?>
             <h2>TEMPAT ASAL</h2><?php echo $row['asal']; ?>
             <h2>PENDIDIKAN</h2><?php echo $row['pendidikan']; ?>
             <h2>TEMPAT LAHIR</h2><?php echo $row['tempat']; ?>
             <h2>TARIKH KHAWIN</h2><?php echo $row['tarikh']; ?>
             <h2>PEJABAT</h2><?php echo $row['pejabat']; ?>
             <h2>GAJI POKOK: RM</h2><?php echo $row['gajipokok']; ?>
             
             <h1>ISTERI</h1>
             <h2>NAMA</h2><?php echo $row['isterinama']; ?>
             <h2>NO.MY KAD</h2><?php echo $row['isterikad']; ?>
             <h2>PEKERJAAN</h2><?php echo $row['isteripekerjaan']; ?>
             <h2>ALAMAT MAJIKAN</h2><?php echo $row['isterialamat']; ?>
             <h2>TEMPAT ASAL</h2><?php echo $row['isteriasal']; ?>
             <h2>PENDIDIKAN</h2><?php echo $row['isteripenddikan']; ?>
             <h2>TEMPAT LAHIR</h2><?php echo $row['isteritempat']; ?>
             <h2>GAJI POKOK: RM</h2><?php echo $row['isterigaji']; ?>
             <h2>NO.TELEFON</h2><?php echo $row['isteritele']; ?>
          	
             <h1>TANGGUNGAN</h1>
             <table>
	<thead>
		<tr>
			<th>BILL</th>
			<th>NAMA ANAK</th>
			<th>PEKERJAAN</th>
			<th>Perskolahan</th>
		</tr>
	</thead>
	
	
		<tr>
			<td><?php echo $row['bil']; ?></td>
			<td><?php echo $row['namaanak']; ?></td>
			<td><?php echo $row['mykid']; ?></td>
			<td><?php echo $row['pesekolahan']; ?></td>
			
		</tr>
	
</table>
             <h1>HARTA: (POTONG YANG TIDAK BERKENAAN) </h1>
             <h2>RUMAH</h2><?php echo $row['rumah']; ?>
             <h2>KENDARAN</h2><?php echo $row['kereta']; ?>
             <h2>MOTORSIKAL</h2><?php echo $row['motorsikal']; ?>
             <h2>TV/RADIO</h2><?php echo $row['tv']; ?>
             <h2>KOMPUTER/ASTRO</h2><?php echo $row['komputer']; ?>
             <h2>TANAH (HEKTER/EKAR)</h2><?php echo $row['tanah']; ?>
             <h2>LAIN-LAIN</h2><?php echo $row['nyatakan']; ?>
            
             <h1>KEMAHIRAN (nyatakan)</h1>
             
             
             
             <table>
	<thead>
		<tr>
			<th>kemahiran(ketua Isi keluarga)</th>
           
			<th>Ada/Tidak/Tahun/Dimana</th>
			
		</tr>
        <tr>
        <th>Latihan Pertanian</th>
            <td><?php echo $row['latiyanpertanian']; ?></td>	
        </tr>
        <tr>
        <th>Latihan Ternakan</th><td><?php echo $row['latiyanternakan']; ?></td>	
        </tr>
        <tr>
        <th>Latihan perikanan</th><td><?php echo $row['parikanan']; ?></td>		
        </tr>
        <tr>
        <th>Latihan Keusahawaan</th><td><?php echo $row['keusahawaan']; ?></td>		
        </tr>
        <tr>
        <th>kemahiran Teknikal Industri</th><td><?php echo $row['kti']; ?></td>	
        </tr>
        <tr>
        <th>kemahiran Pertukangan</th><td><?php echo $row['kp']; ?></td>		
        </tr>
        <tr>
        <th>Kemahiran kraftangan</th><td><?php echo $row['kk']; ?></td>	
        </tr>
        <tr>
        <th>Politeknik</th><td><?php echo $row['politeknik']; ?></td>		
        </tr>
        <tr>
        <th>vokasional</th><td><?php echo $row['vokasional']; ?></td>	
        </tr>
        <tr>
        <th>Institut keahiran MARA</th><td><?php echo $row['ikm']; ?></td>			
        </tr>
        <tr>
        <th>Institut latihan Perihndustrain</th><td><?php echo $row['ilp']; ?></td>	
        </tr>
        <tr>
        <th>Pusat Pembangunan kemahiran Sarawak (PPKS)</th><td><?php echo $row['ppks']; ?></td>		
        </tr>
        <tr>
        <th>GIAT MARA</th><td><?php echo $row['giatmara']; ?></td>		
        </tr>
        <tr>
        <th>Lain=Lain</th><td><?php echo $row['lain']; ?></td>			
        </tr>
        <tr>
        <th>Tiada</th><td><?php echo $row['tiada']; ?></td>	
        </tr>
        
        
     </thead>
         
                 
		
             </table>

             	<?php }} ?>
        </div>
    </div>
  </article>
  <n2>
  </n2>
</section>

<footer>
  <p>Kampung Tanjung Bundong &copy;University Malaysia Sarawak 2018</p>
</footer>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
     
</body>
</html> 
