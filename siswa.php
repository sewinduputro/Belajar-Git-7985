<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/age.php');

$siswa = new Siswa();
$data = $siswa->readAllSiswa();


$no=0;
?>

<table border ="2">
		<tr>
			<td>NO</td>
			<td> ID_SISWA</td>
			<td> FULL_NAME</td>
			<td> DATE OF BIRTH</td>
			<td> EMAIl</td>
			<td> NATIONALITY</td>
			<td> AGE</td>
			<td> DETAIL</td>
		</tr>
	<?php foreach($data as $a){ ?>
		
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $a ['id_siswa'];?></td>
			<td><?php echo $a ['full_name'];?></td>
			<td><?php echo $a ['date_ob'];?></td>
			<td><?php echo $a ['email'];?></td>
			<td><?php echo $a['nationality'];?></td>
			<td>
			
			<?php
			$age2=new age($a['date_ob']);
			echo $age2->getUmur();
			?>
			</td>
			<td><a href="dsiswa.php?a=<?php echo $a['id_siswa']?>">Detail</a>
			<a href="delsiswa.php?a=<?php echo $a['id_siswa']?>">Delete</a>
			<a href="updsiswa.php?a=<?php echo $a['id_siswa']?>">Edit</a>
			</td>
		</tr>
	<?php } ?>
		</table>
		