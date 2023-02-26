<?php
$koneksi = mysqli_connect("localhost","root","","sbd_web") or die("Koneksi gagal");
$aksi=$_GET['aksi'];
if($aksi=="tambah"){
	echo "<strong>Tambah Phone Book</strong><br><br>";
	echo "<form method='POST' action='./proses.php?aksi=simpan' enctype='multipart/form-data'>
		Nama : <input type=text name='nama' value=''>
		No. Telepon : <input type=text name='tlp' value=''>
		Foto : <input type='file' name='file'><br><br>
		<input type=submit value='SIMPAN' neme='simpan'>
	</form>";
}
elseif ($aksi=="delete"){
	
	mysqli_query($koneksi,"DELETE FROM phonebook WHERE id='$_GET[id]'");
	header('location:view.php');
}
elseif($aksi=="edit"){
	$sql = mysqli_query($koneksi,"SELECT * FROM phonebook WHERE id='$_GET[id]'");
	$data=mysqli_fetch_assoc($sql);
	echo "<strong>Edit Phone Book</strong> - ".$data['nama']."<br><br>";
	echo "<form method='POST' action='./proses.php?aksi=update&id=$data[id]' enctype='multipart/form-data'>
		Nama : <input type=text name='nama' value='$data[nama]'>
		No. Telepon : <input type=text name='tlp' value='$data[nomor_telepon]'><br><br>
		<input type=submit value='SIMPAN' neme='simpan'>
	</form>";
}
elseif ($aksi=="update"){
	mysqli_query($koneksi,"UPDATE phonebook SET nama = '$_POST[nama]',
                                    		nomor_telepon = '$_POST[tlp]' 
										WHERE id = '$_GET[id]'");
	header('location:view.php');
}
elseif ($aksi=="simpan"){
	$foto = $_FILES['file']['name'];
	$file_tmp = $_FILES['file']['tmp_name'];	
 
	move_uploaded_file($file_tmp, 'foto/'.$foto);
	$sql = mysqli_query($koneksi,"INSERT INTO phonebook (nama,nomor_telepon,foto) 
											VALUES('$_POST[nama]','$_POST[tlp]','$foto')");
	header('location:view.php');
}
?>
