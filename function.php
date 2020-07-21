<?php //Post Params 

include("config.php");

$nama = $_POST['nama'];  
$mykad = $_POST['mykad'];  
$lorong = $_POST['lorong'];  
$telephone = $_POST['telephone'];  
$pekerjaan = $_POST['pekerjaan'];  
$alamat = $_POST['alamat']; 
$asal = $_POST['asal'];
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
//INSERT 
    $query = " INSERT INTO borang ( nama, mykad, lorong, telephone, pekerjaan, alamat, asal, pendidikan, tempat, tarikh, pejabat, gajipokok, isterinama, isterikad, isteripekerjaan, isterialamat, isteriasal, isteripenddikan, isteritempat, isterigaji, isteritele, bil, namaanak, mykid, pesekolahan, rumah, kereta, motorsikal, tv, komputer, tanah, nyatakan, latiyanpertanian, latiyanternakan, parikanan, keusahawaan, kti, kp, kk, politeknik, vokasional, ikm, ilp, ppks, giatmara,lain, tiada )  VALUES ( '$nama', '$mykad', '$lorong', '$telephone', '$pekerjaan', '$alamat', '$asal', '$pendidikan', '$tempat', '$tarikh', '$pejabat', '$gajipokok', '$isterinama', '$isterikad', '$isteripekerjaan', '$isterialamat', '$isteriasal', '$isteripenddikan', '$isteritempat', '$isterigaji', '$isteritele', '$bil', '$namaanak', '$mykid', '$pesekolahan', '$rumah', '$kereta', '$motorsikal', '$tv', '$komputer', '$tanah', '$nyatakan', '$latiyanpertanian', '$latiyanternakan', '$parikanan', '$keusahawaan', '$kti', '$kp', '$kk', '$politeknik', '$vokasional', '$ikm', '$ilp', '$ppks', '$giatmara','$lain', '$tiada' ) "; 

$result = mysqli_query($con,$query);  

 if( $result )
 {
 	header('location: home1.php');
	
 }
 else
 {
 	echo 'Unsuccessful';
     header('location: home1.php');
 }

