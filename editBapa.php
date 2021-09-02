<?php
include_once 'database.php';
$result = mysqli_query($con,"SELECT * FROM bapa");
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
 
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  justify-content: center;
  align-items: center;
  padding: 1px;
  background-image: linear-gradient(BlanchedAlmond,RosyBrown);
}
table {
  border-collapse: collapse;
  width: 80% left:50%;
  margin-left:auto;margin-right:auto;
}
h1{
	text-align: center;
}
th, td {
  text-align: center;
  padding: 8px;
  border: 1px solid white;
}
tr:nth-child(even){background-color: mistyrose}

th {
  background-color: #antiquewhite;
  color: black;
}

#t01 th {
  background-color: darksalmon;
  color: black;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="editcalon.php">Calon</a>
  <a href="editbapa.php">Bapa</a>
 <a href="editibu.php">Ibu</a>
 <a href="editbank.php">Bank</a>
</div>

<h1 style="color:#ff9999;margin-center:30px;">Maklumat Bapa</h1><br>

<?php
if (mysqli_num_rows($result) > 0) {
?>

		<table id="t01"class="center">
	
	<tr>
	    <th>No ID</th>
		<th>Nama Penuh</th>
		<th>No. KP</th>
		<th>Status berkahwin</th>
		<th>Status Duda</th>
		<th>No. Telefon Rumah</th>
		<th>No. Telefon Bimbit</th>
		<th>Kerajaan</th>
		<th>Swasta</th>
		<th>Sendiri</th>
		<th>Lain-lain</th>
		<th>Pencen</th>
		<th>Alamat Majikan</th>
		<th>Pendapatan Kasar Bulanan</th>
		<th>Slip Gaji</th>
		<th>Tiada Slip Gaji</th>
	</tr></th>
	
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id_bapa"]; ?></td>
		<td><?php echo $row["namabapa"]; ?></td>
		<td><?php echo $row["icbapa"]; ?></td>
		<td><?php echo $row["kahwinbapa"]; ?></td>
		<td><?php echo $row["duda"]; ?></td>
		<td><?php echo $row["rumahbapa"]; ?></td>
		<td><?php echo $row["bimbitbapa"]; ?></td>
		<td><?php echo $row["kerajaanbapa"]; ?></td>
		<td><?php echo $row["swastabapa"]; ?></td>
		<td><?php echo $row["sendiribapa"]; ?></td>
		<td><?php echo $row["lainbapa"]; ?></td>
		<td><?php echo $row["pencenbapa"]; ?></td>
		<td><?php echo $row["majikanbapa"]; ?></td>
		<td><?php echo $row["pendapatanbapa"]; ?></td>
		<td><a href="Slip Gaji Bapa/<?php echo $row['filenamebapa'] ?>" target="_blank">view file</a></td>
		<td><a href="Tiada Penyata Gaji Bapa/<?php echo $row['filename1bapa'] ?>" target="_blank">view file</a></td>
	  </tr>

			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>