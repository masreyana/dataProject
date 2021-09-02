
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<link rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>borang C</title>
</head><?php
	  
	  $conn = mysqli_connect('localhost','root','','kamimi');
	  
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "Surat Tawaran/".$fileName;
		$nama = $_POST['nama']?? "";
    $ic = $_POST['ic']?? "";
    $pendaftaran = $_POST['pendaftaran']?? "";
	$semester = $_POST['semester']?? "";
    $program = $_POST['program']?? "";
	$pusat = $_POST['pusat']?? "";
	$alamat = $_POST['alamat']?? "";
	
		$query = "INSERT INTO calon(nama, ic, pendaftaran, filename, semester, program, pusat,alamat)
                   VALUES ('$nama', '$ic', '$pendaftaran', '$fileName', '$semester', '$program', '$pusat', '$alamat')";
        
        $run = mysqli_query($conn,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo '<script>alert("Submitted")</script>';
        }
        else{
            echo "error".mysqli_error($conn);
        }
        
    }
?> 


   <style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body {
  background-color: #f2e6ff;
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
  text-decoration: bold;
}
.container{
  max-width: 900px;
  width: 600%;
  height:110;
  top: 65%;
  left: 50%;
  transform: translate(-50%, -50%);
  position: absolute;
  margin:auto;
  background-image: linear-gradient(#f2e6ff,#cc99ff);
  padding: 20px 50px;
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 5px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 7px;
  width: calc(100% / 2 - 70px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 2px;
}
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(#d580ff,#e580ff,#e6b3ff);
 }

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 15%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
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

<h1 style='color:#9966ff;margin-center:15px;'>PERMOHONAN BANTUAN KEWANGAN PELAJAR KOLEJ KOMUNITI</h1>   
    <div class="title">MAKLUMAT CALON</div><br>
	<form action="" method="POST" enctype="multipart/form-data">
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama Penuh (HURUF BESAR) </span>
            <input type="text" name="nama" class="input-box" style="width: 300px" >

            <span class="details">No. Kad Pengenalan </span>
            <input type="text" name="ic" class="input-box" style="width: 300px" >

            <span class="details">No. Pendaftaran Pelajar</span>
            <input type="text" name="pendaftaran" class="input-box" style="width: 300px">
			<span class="details"style="font-size:12px">Surat Tawaran Belajar</span>
			
			<input type="file" name="file">

            <span class="details">Semester semasa</span>
            <input type="text" name="semester" class="input-box" style="width: 300px" >

            <span class="details">Pusat Pengajian</span>
            <input type="text" name="pusat" class="input-box" style="width: 300px" >

            <span class="details">Kursus/Program</span>
            <input type="text" name="program" class="input-box" style="width: 300px" >

            <span class="details">Alamat Tetap</span>
            <input type="text" name="alamat" class="input-box" style="width: 300px" >
	
			<div class="button">
		  <form><input type="submit" name="submit" action="maklumatBapa.php"></input></div></form>
		  
		 </form>
        </div>
      </form>
    </div>
  </div>
  </div>
    

</body>
</html>