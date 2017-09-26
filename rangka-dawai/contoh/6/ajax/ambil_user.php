<?php

$q = intval($_GET['q']);
$con = @mysqli_connect('','','','');
if (!$con) 
{
	die('Tiada hubungan sulit. ' . @mysqli_error($con));
}//*/

$jadual = 'nama_pegawai';
$sql = 'SELECT * FROM ' . $jadual . ' WHERE no = "' . $q . '" ';
$result = mysqli_query($con,$sql);

?>
<table border=1>
<tr>
<td>namaPegawai</td>
<td>Nama_Penuh</td>
<td>email</td>
<td>nohp</td>
<td>Jawatan</td>
<td>Kod</td>
<td>Unit</td>
<td>Tetap</td>
</tr>
<?php

while ($row = mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['namaPegawai'] ?></td>
<td><?php echo $row['Nama_Penuh'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['nohp'] ?></td>
<td><?php echo $row['Jawatan'] ?></td>
<td><?php echo $row['Kod'] ?></td>
<td><?php echo $row['Unit'] ?></td>
<td><?php echo $row['Tetap'] ?></td>
</tr>
<?php
}

?>
</table>

<?php
mysqli_close($con);
?>