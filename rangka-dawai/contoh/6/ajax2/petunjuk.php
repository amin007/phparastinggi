<?php
# mengisi array dengan nama
$a[] = 'Kawakib'; // Bintang-bintang
$a[] = 'Wakeel'; // Wakil
$a[] = 'Maali'; // Tinggi
$a[] = 'Maalik'; // Yang memiliki
$a[] = 'Maalum'; // Yang diketahui
$a[] = 'Makayla'; // Pemberian Allah
$a[] = 'Makhlad'; // Yang kekal
$a[] = 'Makhluf'; // Maju
$a[] = 'Malaika'; // Bidadari
$a[] = 'Malaiqa'; // Bidadari
$a[] = 'Malak'; // Angel
$a[] = 'Malazi'; // Tempat perlindungan
$a[] = 'Malihah'; // Cantik
$a[] = 'Malik'; // Yang memiliki
$a[] = 'Malika'; // Pemilik
$a[] = 'Manal'; // Sukses, prestasi
$a[] = 'Maqbul'; // Diterima, dipersetujui
$a[] = 'Maqbulah'; // Diterima permintaannya
$a[] = 'Matlub'; // Cita-cita
$a[] = 'Maula'; // Tuan besar
$a[] = 'Maulawi'; // Yang berzuhud (Maulana)
$a[] = 'Mifzal'; // Teramat mulia
$a[] = 'Mikayla'; // Pemberian Allah
$a[] = 'Miqaila'; // Pemberian Allah
$a[] = 'Mishal'; // Cahaya
$a[] = 'Mulhim'; // Pemberi inspirasi
$a[] = 'Mursil'; // Wakil
$a[] = 'Muslih'; // Yang membaiki, membuat perubahan
$a[] = 'Muslihin'; // Yang memulihkan
$a[] = 'Muslihuddin'; // Pemulih agama
$a[] = 'Muslim'; // Menyerah diri kepada Allah
$a[] = 'Muslimah'; // Beragama Islam
$a[] = 'Mutalib'; // Yang menuntut dari masa ke semasa

# mengambil parameter q dari url
//$q = $_GET['q'];
$q = $_REQUEST['q'];
$petunjuk = '';

# mengambil semua petunjuk dari array
if($q !== "")
{
	$q = strtolower($q);
	$len = strlen($q);

	foreach ($a as $nama)
	{
		if (stristr($q, substr($nama,0,$len)))
		{
			if ($petunjuk == '')
				$petunjuk = $nama;
			else
				$petunjuk .= ", $nama";
		}
		//else $petunjuk = 'ada masalah teknikal';
	}
}

# mengeluarkan kalimat ketika tiada huruf yang benar
echo ($petunjuk == '') ? "Maaf tiada ada saranan " : $petunjuk;
//echo $petunjuk;