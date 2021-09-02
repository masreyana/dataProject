<?php

	$conn = mysqli_connect('localhost','root','','kamimi');
    if(isset($_POST['submit'])){
		
        $fileNamebapa = $_FILES['filenamebapa']['name'];
		$fileName1bapa = $_FILES['filename1bapa']['name'];
		$fileTmpName = $_FILES['filenamebapa']['tmp_name'];
		$fileTmpName1 = $_FILES['filename1bapa']['tmp_name'];
		$path = "Slip Gaji Bapa/".$fileNamebapa;
		$path1 = "Tiada Penyata Gaji Bapa/".$fileName1bapa;
		
	$namabapa = $_POST['namabapa']?? "";
    $icbapa = $_POST['icbapa']?? "";
    $kahwinbapa = $_POST['kahwinbapa']?? "";
	$duda = $_POST['duda']?? "";
	$rumahbapa = $_POST['rumahbapa']?? "";
    $bimbitbapa = $_POST['bimbitbapa']?? "";
	$kerajaanbapa = $_POST['kerajaanbapa']?? "";
	$swastabapa = $_POST['swastabapa']?? "";
	$sendiribapa = $_POST['sendiribapa']?? "";
	$lainbapa = $_POST['lainbapa']?? "";
    $pencenbapa = $_POST['pencenbapa']?? "";
	$majikanbapa = $_POST['majikanbapa']?? "";
	$pendapatanbapa = $_POST['pendapatanbapa']?? "";
	
		$query = "INSERT INTO bapa(namabapa, icbapa, kahwinbapa, duda, rumahbapa, bimbitbapa, kerajaanbapa,swastabapa,
					sendiribapa, lainbapa, pencenbapa, majikanbapa, pendapatanbapa, filenamebapa, filename1bapa)
                   VALUES ('$namabapa', '$icbapa', '$kahwinbapa', '$duda', '$rumahbapa', '$bimbitbapa', '$kerajaanbapa','$swastabapa',
				   '$sendiribapa', '$lainbapa', '$pencenbapa', '$majikanbapa', '$pendapatanbapa', '$fileNamebapa', '$fileName1bapa')";
        
        $run = mysqli_query($conn,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
			 move_uploaded_file($fileTmpName1,$path1);
            echo '<script>alert("Submitted")</script>';
        }
        else{
            echo "error";
        }
        
    }		   
	?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>borang C</title>
</head>
 
<body>

<ul><br><br>
  <li><a href="maklumat calon.php" id="A">MAKLUMAT CALON</a></li>
  <li><a href="maklumat bapa.php" id="B">MAKLUMAT BAPA</a></li>
  <li><a href="maklumat ibu.php" id="C">MAKLUMAT IBU</a></li>
  <li><a href="maklumat bank.php" id="D">MAKLUMAT BANK</a></li>
</ul>


<div style="margin-left:90px;">
  <body>
  <div class="container">
    
    <div class="title">MAKLUMAT BAPA/PENJAGA (Diisi oleh BAPA/penjaga)</div><br>
	<form action="" method="POST" enctype="multipart/form-data">
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">

            <span class="details">Nama Penuh (HURUF BESAR) </span>
            <input type="text" name="namabapa" class="input-box" style="width: 300px">
		 
            <span class="details">No. Kad Pengenalan </span>
            <input type="text" name="icbapa" class="input-box" style="width: 300px">
          
            <span class="details">Status : </span>
            <input type="checkbox" id="kahwin" name="kahwinbapa" value="kahwin">
			<label for="document1">Kahwin</label>
			<input type="checkbox" id="duda" name="duda" value="duda">
			<label for="document2">Duda</label><br>
			
            <span class="details">No. Telefon: </span>
			<input type="text" name="rumahbapa" class="input-box" placeholder="Rumah" style="width: 300px">
			<input type="text" name="bimbitbapa" class="input-box" placeholder="HP" style="width: 300px"><br>

            <span class="details">Pekerjaan: </span><input type="checkbox" id="kerajaan" name="kerajaanbapa">
			<label for="document1">Kerajaan &nbsp;&nbsp;</label><input type="type" id="kerajaan" name="kerajaanbapa" placeholder="Nyatakan"style="width: 300px"><br>
			<input type="checkbox" id="swasta" name="swastabapa" value="swasta">
			<label for="document1">Swasta &nbsp;&nbsp;&nbsp;&nbsp;</label><input type="type" id="swasta" name="swastabapa" placeholder="Nyatakan" style="width: 300px"><br>
			<input type="checkbox" id="sendiri" name="sendiribapa" value="sendiri" >
			<label for="document1">Sendiri &nbsp;&nbsp;&nbsp;&nbsp;</label><input type="type" id="sendiri" name="sendiribapa" placeholder="Nyatakan" style="width: 300px"><br>
			<input type="checkbox" id="lain" name="lainbapa" value="lain">
			<label for="document1">Lain lain &nbsp;&nbsp;&nbsp;</label><input type="type" id="lain" name="lainbapa" placeholder="Meninggal/Sakit/..." style="width: 300px"><br>
			<input type="checkbox" id="pencen" name="pencenbapa" value="pencen">
			<label for="document1">Pencen &nbsp;&nbsp;&nbsp;</label><input type="type" id="pencen" name="pencenbapa" placeholder="Kerjaaan/Swasta" style="width: 300px"><br>
			
            <br><span class="details">Alamat Majikan: </span>
            <input type="text" name="majikanbapa" class="input-box" style="width: 300px" >
         
            <span class="details">Pendapatan Kasar Bulanan:</span>
            <input type="text" name="pendapatanbapa" class="input-box" style="width: 300px" >
			<label for="document1"><h1 style="font-size:10px">Sila sertakan slip gaji terkini/Penyata Pencen (jika mempunyai majikan)</label>

			<input type="file" name="filenamebapa"><br><br>
			
			<label for="document1"><h1 style="font-size:12px">Sila isi borang dibawah dan muat naik semula jika TIDAK mempunyai penyata gaji </label><br>
			<a href="https://sg.docworkspace.com/d/sIAGuy7I2x93jiAY" target="_blank ">
			<img src= "https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/267px-PDF_file_icon.svg.png" width="45" height="50">
			</a>

		
			<input type="file" name="filename1bapa" />
			
			<div class="button">
		  <form><input type="submit" name="submit"></input></div></form>
		  
        </div>
    </div>
  </div>
</body>
</html>