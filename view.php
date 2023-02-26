<?php
$koneksi = mysqli_connect("localhost","root","","sbd_web") or die("Koneksi gagal");
$sql = mysqli_query($koneksi,"SELECT * FROM phonebook ORDER BY nama");
$sqlcon = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT COUNT(nama) as jumlah FROM phonebook "));
echo "<h2>DAFTAR PHONE BOOK TOTAL :".$sqlcon['jumlah']."</h2><br>
<a href='./proses.php?aksi=tambah'>TAMBAH</a><br><br> ";
while($data=mysqli_fetch_assoc($sql)){
echo $data['nama'];
echo "<br>";
echo $data['nomor_telepon'];
echo "<br>";
if($data['foto']!=""){
echo "<img src='foto/".$data['foto']."' width='100px'>";
}else{
echo "<img src='foto/foto.png' width='100px'>";
}
echo "<br><a href='./proses.php?aksi=delete&id=$data[id]'>Hapus</a> | <a href='./proses.php?aksi=edit&id=$data[id]'>Edit</a>";
echo "<hr>";
}
?>