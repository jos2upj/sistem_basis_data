<?php
$server =  "localhost";
$username = "root";
$password = "";
$database = "sbd_web";

// Koneksi dan memilih database di server
$kon = mysqli_connect($server,$username,$password,$database) or die("Koneksi gagal");

$query = mysqli_query($kon,"SELECT * FROM phonebook");
echo '<table border="1">
  <tr>
    <th>NAMA</th>
    <th>NO. TLP</th>
    <th>FOTO</th>
   </tr>';
while ($data = mysqli_fetch_assoc($query)){
	echo '<tr>
		<td>'.$data["nama"].'</td>
		<td>'.$data["nomor_telepon"].'</td>
		<td>'.$data["foto"].'</td>';
	echo '</tr>';
}	
echo'</table>';

?>
