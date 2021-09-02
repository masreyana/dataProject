<?php
		
	$conn = mysqli_connect('localhost','root','','kamimi');
    if(isset($_POST['submit'])){
		
        $fileNameibu = $_FILES['filenameibu']['name'];
		$fileName1ibu = $_FILES['filename1ibu']['name'];
		$fileTmpName = $_FILES['filenameibu']['tmp_name'];
		$fileTmpName1 = $_FILES['filename1ibu']['tmp_name'];
		$path = "Slip Gaji Ibu/".$fileNameibu;
		$path1 = "Tiada Penyata Gaji Ibu/".$fileName1ibu;
	
	$namaibu = $_POST['namaibu']?? "";
    $icibu = $_POST['icibu']?? "";
    $kahwinibu = $_POST['kahwinibu']?? "";
	$tunggal = $_POST['tunggal']?? "";
	$rumahibu = $_POST['rumahibu']?? "";
    $bimbitibu = $_POST['bimbitibu']?? "";
	$kerajaanibu = $_POST['kerajaanibu']?? "";
	$swastaibu = $_POST['swastaibu']?? "";
	$sendiriibu = $_POST['sendiriibu']?? "";
	$lainibu = $_POST['lainibu']?? "";
    $pencenibu = $_POST['pencenibu']?? "";
	$majikanibu = $_POST['majikanibu']?? "";
	$pendapatanibu = $_POST['pendapatanibu']?? "";
	
		$query = "INSERT INTO ibu(namaibu, icibu, kahwinibu, tunggal, rumahibu, bimbitibu, kerajaanibu,swastaibu,
				   sendiriibu, lainibu, pencenibu, majikanibu, pendapatanibu, filenameibu, filename1ibu)
                   VALUES ('$namaibu', '$icibu', '$kahwinibu', '$tunggal', '$rumahibu', '$bimbitibu', '$kerajaanibu','$swastaibu',
				   '$sendiriibu', '$lainibu', '$pencenibu', '$majikanibu', '$pendapatanibu', '$fileNameibu', '$fileName1ibu')";
        
        $run = mysqli_query($conn,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
			 move_uploaded_file($fileTmpName1,$path1);
           echo '<script>alert("Submitted")</script>';
        }
        else{
            echo "error".mysqli_error($conn);
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

 
</style>
<Body background="flower.jpeg">   
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
  
    <div class="title">MAKLUMAT IBU/PENJAGA (Diisi oleh ibu/penjaga)</div><br>
	<form action="" method="POST" enctype="multipart/form-data">
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
		  
            <span class="details">Nama Penuh (HURUF BESAR) </span>
            <input type="text" name="namaibu" class="input-box" style="width: 300px">
		 
            <span class="details">No. Kad Pengenalan </span>
            <input type="text" name="icibu" class="input-box" style="width: 300px">
          
            <span class="details">Status : </span>
            <input type="checkbox" id="kahwin" name="kahwinibu" value="kahwin">
			<label for="document1">Kahwin</label>
			<input type="checkbox" id="tunggal" name="tunggal" value="tunggal">
			<label for="document2">Ibu Tunggal</label><br>
			
            <span class="details">No. Telefon: </span>
			<input type="text" name="rumahibu" class="input-box" placeholder="Rumah" style="width: 300px">
			<input type="text" name="bimbitibu" class="input-box" placeholder="HP" style="width: 300px"><br>

            <span class="details">Pekerjaan: </span><input type="checkbox" id="kerajaan" name="kerajaan">
			<label for="document1">Kerajaan &nbsp;&nbsp;</label><input type="type" id="kerajaan" name="kerajaanibu" placeholder="Nyatakan"style="width: 300px"><br>
			<input type="checkbox" id="swasta" name="swastaibu" value="swasta">
			<label for="document1">Swasta &nbsp;&nbsp;&nbsp;&nbsp;</label><input type="type" id="swasta" name="swastaibu" placeholder="Nyatakan"style="width: 300px"><br>
			<input type="checkbox" id="sendiri" name="sendiriibu" value="sendiri" >
			<label for="document1">Sendiri &nbsp;&nbsp;&nbsp;&nbsp;</label><input type="type" id="sendiri" name="sendiriibu" placeholder="Nyatakan"style="width: 300px"><br>
			<input type="checkbox" id="lain" name="lainibu" value="lain">
			<label for="document1">Lain lain &nbsp;&nbsp;&nbsp;</label><input type="type" id="lain" name="lainibu" placeholder="Meninggal/Sakit/..."style="width: 300px"><br>
			<input type="checkbox" id="pencen" name="pencenibu" value="pencen">
			<label for="document1">Pencen &nbsp;&nbsp;&nbsp;</label><input type="type" id="pencen" name="pencenibu" placeholder="Kerjaaan/Swasta"style="width: 300px"><br>
			
            <br><span class="details">Alamat Majikan: </span>
            <input type="text" name="majikanibu" class="input-box" style="width: 300px" >

            <span class="details">Pendapatan Kasar Bulanan:</span>
            <input type="text" name="pendapatanibu" class="input-box" style="width: 300px" >
			<label for="document1"><h1 style="font-size:10px">Sila sertakan slip gaji terkini/Penyata Pencen (jika mempunyai majikan)</label>

			<input type="file" name="filenameibu"><br><br>
	
			<label for="document1"><h1 style="font-size:12px">Sila isi borang dibawah dan muat naik semula jika TIDAK mempunyai penyata gaji </label><br>

			
<label for="document1"><h1 style="font-size:12px">Sila isi borang dibawah dan muat naik semula jika TIDAK mempunyai penyata gaji </label><br>
			<a href="https://sg.docworkspace.com/d/sIAGuy7I2x93jiAY" target="_blank ">
			<img src= "https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/267px-PDF_file_icon.svg.png" width="45" height="50">
			</a>

			
			<input type="file" name="filename1ibu"/>
			
			<div class="button">
<input type="submit" name="submit"></input></div></form>
        </div>
    </div>
  </div>
</body>
</html>