

<?php
/*
 NAMA	: SEWINDU PUTRO
 NIM	: 14.11.7985
 KELAS	: TI 06
*/

require_once ('lib/DBClass.php');
require_once ('lib/m_siswa.php');
$id = $_GET['a'];
$siswa = new Siswa();
$data = $siswa->readSiswa($id);

$dt = $data[0];
/*print_r($dt);*/
?>


<table border="1">
	<tr>
		<td>ID SISWA</td>
		<td><?php echo $dt['id_siswa']?></td>
	</tr>
	<tr>
		<td>FULL NAME</td>
		<td><?php echo $dt['full_name']?></td>
	</tr>
	<tr>
		<td>NATIONALITY</td>
		<td><?php echo $dt['nationality']?></td>
	</tr>
	
</table>
<br />
<a href ="siswa.php">KEMBALI</a>