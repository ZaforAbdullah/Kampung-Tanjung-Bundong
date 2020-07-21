<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
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
  <nav>
  <h1 style="text-align:center">Buang Rekod</h1>
    <a href="view.php"><img src ="remove.png" style="margin-left:140px;" width="200px" height="200px"></img></a>
  </nav>
  
  <article>
    <h1 style="text-align:center">Tambah Rekod</h1>
    <a href="create.php"><img src ="add.png" style="margin-left:140px;" width="200px" height="200px"></img></a>
  </article>
  <h1>
  <h1 style="text-align:center">Carian</h1>
    <a href="search.php"><img src ="search.png" style="margin-left:140px;" width="200px" height="200px"></img></a>
  </h1>
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
