<!DOCTYPE html>
<?php
include("config.php");

?>
<html>

    <head>
    <title>Kampung Bundong</title>
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="sty.css">
    </head>
<body background="viewb2.jpg">
         <div class="topnav">
  <a class="active" href="home1.php">Home</a>
  <a href="view.php">View</a>
  <a href="search.php">Search</a>
    <b><a href="index.php">Log Out</a></b>
</div>	
  
<br>
 <div class="contentview">
       
        <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
    
                <?php $results = mysqli_query($con, "SELECT * FROM borang"); ?>

<table class="viewtable">
	<thead>
		<tr style="background-color:white">
			<th>NAMA</th>
			<th>No. MyKad</th>
			<th>Lorong</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>

	<?php while ($row = mysqli_fetch_array($results)) { ?>
	
		<tr style="background-color:white">
			<td style="text-align:center"><?php echo $row['nama']; ?></td>
			<td style="text-align:center"><?php echo $row['mykad']; ?></td>
			<td style="text-align:center"><?php echo $row['lorong']; ?></td>
			<td style="text-align:center">
				<a href="viewdetail.php?view=<?php echo $row['mykad']; ?>" class="edit_btn" >view</a>
			</td>
			<td style="text-align:center">
				<a href="edit.php" class="del_btn">Edit</a>
            </td>
            <td style="text-align:center">
				<a href="delete.php?del=<?php echo $row['mykad']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>

</table>
   
</div>	
        
<br>

<div class="footer">
        Kampung Tanjung Bundong &copy;University Malaysia Sarawak 2018
</div>
</body>

</html>