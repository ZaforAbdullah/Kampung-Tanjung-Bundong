<?php 
include("config.php");
$ckad=$_POST['ckad'];
$nama = $_POST['nama'];  
$lorong = $_POST['lorong'];  
$telephone = $_POST['telephone'];  
$pekerjaan = $_POST['pekerjaan'];  
$alamat = $_POST['alamat'];
$asal =['asal'];
$pendidikan = $_POST['pendidikan'];  
$tempat = $_POST['tempat'];  
$tarikh = $_POST['tarikh'];  
$pejabat = $_POST['pejabat'];  
$gajipokok = $_POST['gajipokok'];  
$isterinama = $_POST['isterinama'];  
$isterikad = $_POST['isterikad'];  
$isteripekerjaan = $_POST['isteripekerjaan'];  
$isterialamat = $_POST['isterialamat'];  
$isteriasal = $_POST['isteriasal'];  
$isteripenddikan = $_POST['isteripenddikan'];  
$isteritempat = $_POST['isteritempat'];  
$isterigaji = $_POST['isterigaji'];  
$isteritele = $_POST['isteritele'];  
$bil = $_POST['bil'];  
$namaanak = $_POST['namaanak'];  
$mykid = $_POST['mykid'];  
$pesekolahan = $_POST['pesekolahan'];  
$rumah = $_POST['rumah'];  
$kereta = $_POST['kereta'];  
$motorsikal = $_POST['motorsikal'];  
$tv = $_POST['tv'];  
$komputer = $_POST['komputer'];  
$tanah = $_POST['tanah'];  
$nyatakan = $_POST['nyatakan'];  
$latiyanpertanian = $_POST['latiyanpertanian'];  
$latiyanternakan = $_POST['latiyanternakan'];  
$parikanan = $_POST['parikanan'];  
$keusahawaan = $_POST['keusahawaan'];  
$kti = $_POST['kti'];  
$kp = $_POST['kp'];  
$kk = $_POST['kk'];  
$politeknik = $_POST['politeknik'];  
$vokasional = $_POST['vokasional'];  
$ikm = $_POST['ikm'];  
$ilp = $_POST['ilp'];  
$ppks = $_POST['ppks'];  
$giatmara = $_POST['giatmara'];  
$lain = $_POST['lain'];  
$tiada = $_POST['tiada'];  
 
		
 


	mysqli_query($con, " UPDATE borang SET  nama = '$nama',   lorong = '$lorong',  telephone = '$telephone',  pekerjaan = '$pekerjaan',  alamat = '$alamat', asal = 'asal', pendidikan = '$pendidikan',  tempat = '$tempat',  tarikh = '$tarikh',  pejabat = '$pejabat',  gajipokok = '$gajipokok',  isterinama = '$isterinama',  isterikad = '$isterikad',  isteripekerjaan = '$isteripekerjaan',  isterialamat = '$isterialamat',  isteriasal = '$isteriasal',  isteripenddikan = '$isteripenddikan',  isteritempat = '$isteritempat',  isterigaji = '$isterigaji',  isteritele = '$isteritele',  bil = '$bil',  namaanak = '$namaanak',  mykid = '$mykid',  pesekolahan = '$pesekolahan',  rumah = '$rumah',  kereta = '$kereta',  motorsikal = '$motorsikal',  tv = '$tv',  komputer = '$komputer',  tanah = '$tanah',  nyatakan = '$nyatakan',  latiyanpertanian = '$latiyanpertanian',  latiyanternakan = '$latiyanternakan',  parikanan = '$parikanan',  keusahawaan = '$keusahawaan',  kti = '$kti',  kp = '$kp',  kk = '$kk',  politeknik = '$politeknik',  vokasional = '$vokasional',  ikm = '$ikm',  ilp = '$ilp',  ppks = '$ppks',  giatmara = '$giatmara', lain = '$lain',  tiada = '$tiada' WHERE mykad=$ckad");

	$_SESSION['message'] = "Address updated!"; 
	header('location: home1.php');

?>