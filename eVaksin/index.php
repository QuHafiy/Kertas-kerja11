<!--membuat sambungan ke db-->
<?php
	include('config.php');
?>

<html>
	<head>
	<title>Senarai Pelajar Vaksinasi</title>
	</head>
	<style>
	h2 {
		text-align: center;
		padding-top: 20px;
	}
	body {
		background-color: #FFE4E1;
	}
	</style>
   

	<body>
	<h2>REKOD VAKSINASI PELAJAR</h2>
	<center>
	<table border=1 cellpadding=5 cellspacing=0 bgcolor=white>
		<tr>
		<th>ID PELAJAR</th>
		<th>NAMA PELAJAR</th>
		<th>KELAS</th>
		<th>JENIS VAKSIN</th>
		<th>TARIKH VAKSIN</th>
		<th>PADAM</th>
		
		</tr>
	  
<!--memaparkan rekod pelajar-->
		<?php
	    $query = "SELECT * FROM maklumat ORDER BY id_pelajar";
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) > 0){

			while ($row = mysqli_fetch_assoc($result)){

				$id_pelajar = $row['id_pelajar'];
				$nama_pelajar = $row['nama_pelajar'];
				$kelas = $row['kelas'];
				$jenis_vaksin = $row['jenis_vaksin'];
				$tarikh_vaksin = $row['tarikh_vaksin'];


//sila lengkapkan kod aturcara
			 
		echo "
		<tr>
			<td>$id_pelajar</td>
			<td>$nama_pelajar</td>
			<td>$kelas</td>
			<td>$jenis_vaksin</td>
			<td>$tarikh_vaksin</td>
			<td align='center'><a href='padam.php?id_pelajar=".$id_pelajar."' onclick=return confirm('Adakah anda pasti?')>DELETE</a></td>

				
		</tr>
		";
			}
		}
		?>		  
	</table>
	<p><a href="tambah.php"><button name='tambah'type="submit">&#43; TAMBAH PELAJAR</button></a></p>
	
	</center>
	</body>
</html>