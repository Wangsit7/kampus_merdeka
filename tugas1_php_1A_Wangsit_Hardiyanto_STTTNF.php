<?php 
    $nama = 'Ahmad Sopandi';
    $agama = 'Islam';
    $jabatan = 'Manager';
    $status = 'Menikah';
    $jmlAnak = 4;

    switch ($jabatan) {
        case 'Manager':
            $gapok = 20000000;
            break;
        case 'Asisten':
            $gapok = 15000000;
            break;
        case 'Kabag':
            $gapok = 10000000;
            break;
        case 'Staff':
            $gapok = 4000000;
            break;
        default:
            $gapok = '';
            break;
    }

    $tunjab = $gapok * 0.2;
    $sts = $status == 'Menikah' ? 'Sudah Menikah' : 'Belum';

    if ($status == 'Menikah' && $jmlAnak >= 0 && $jmlAnak <= 2) {
        $tunkel = $gapok * 0.05;
    } elseif ($status == 'Menikah' && $jmlAnak >= 3 && $jmlAnak <= 5) {
        $tunkel = $gapok * 0.1;
    } else {
        $tunkel = '';
    }

    $gator = $gapok + $tunjab + $tunkel;
    $zakat = $agama == 'Islam' && $gator >= 6000000 ? 0.025 * $gator : 0;
    $thp = $gator - $zakat;
?>

<marquee onmouseover="stop()" onmouseout="start()">
    <h3>Belajar Kondisi IF</h3>
</marquee>
<hr />
Nama Pegawai : <?=$nama?>
<br>Agama : <?=$agama?>
<br>Jabatan : <?=$jabatan?>
<br>Status : <?=$sts?>
<br>Jumlah Anak : <?=$jmlAnak?>
<br>Gaji Pokok : Rp<?=number_format($gapok, 0, ',', '.')?>
<br>Tunjangan Jabatan : Rp<?=number_format($tunjab, 0, ',', '.')?>
<br>Tunjangan Keluarga : Rp<?=number_format($tunkel, 0, ',', '.')?>
<br>Gaji Kotor : Rp<?=number_format($gator, 0, ',', '.')?>
<br>Zakat Profesi : Rp<?=number_format($zakat, 0, ',', '.')?>
<br>Take Home Pay : Rp<?=number_format($thp, 0, ',', '.')?>
