<?php
$nrp = $this->session->userdata('nrp');
$sqldata = "select distinct * from daftarbea where nrp='$nrp'"; //echo $sqldata;
$qrdata = @mysql_query($sqldata) or die ("nrp gak ada");
$hasil = mysql_fetch_assoc($qrdata);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pendaftaran Beasiswa Mahasiswa PPNS</title>

</head>
<body>
  <div align='center'>
  <h1>FORMULIR PENDAFTARAN BEASISWA</h1>
  <p>(SUPERSEMAR / YTA / BKM / PPA / BBM / PPE)<p>
  <p>SEMESTER GANJIL / GENAP TAHUN 2015/2016</p>
  <p>POLITEKNIK PERKAPALAN NEGERI SURABAYA<p>
  </div>

<script>
function myFunction()
{
window.print();
}
function yourFunction()
{
window.print();
}
</script>

<table>
  <tr>
    <th colspan="3" align="left">IDENTITAS MAHASISWA</th>
  </tr>
  <tr>
    <td>nama</td>
    <td>:</td>
    <td><? echo $hasil['nama'];?></td>
  </tr>
  <tr>
    <td>nrp</td>
    <td>:</td>
    <td><? echo $nrp;?></td>
  </tr>
  <tr>
    <td>jenis kelamin</td>
    <td>:</td>
    <td><? echo $hasil['jenkel'];?></td>
  </tr>
  <tr>
    <td>alamat</td>
    <td>:</td>
    <td><? echo $hasil['alamat'];?></td>
  </tr>
  <tr>
    <td>no. telp.</td>
    <td>:</td>
    <td><? echo $hasil['telepon'];?></td>
  </tr>
    <tr>
    <th colspan="3" align="left">identitas orangtua / wali</th>
  </tr>
  <tr>
    <td>nama ayah</td>
    <td>:</td>
    <td><? echo $hasil['ayah'];?></td>
  </tr>
  <tr>
    <td>pekerjaan</td>
    <td>:</td>
    <td><? echo $hasil['kerjaayah'];?></td>
  </tr>
  <tr>
    <td>pengasilan per bulan</td>
    <td>:</td>
    <td><? echo $hasil['hasilayah'];?></td>
  </tr>
  <tr>
    <td>nama ibu</td>
    <td>:</td>
    <td><? echo $hasil['ibu'];?></td>
  </tr>
  <tr>
    <td>pekerjaan</td>
    <td>:</td>
    <td><? echo $hasil['kerjaibu'];?></td>
  </tr>
  <tr>
    <td>penghasilan per bulan</td>
    <td>:</td>
    <td><? echo $hasil['hasilibu'];?></td>
  </tr>
  <tr>
    <th colspan="3" align="left">INDEX PRESTASI MAHASISWA</th>
  </tr>
  <tr>
    <td>SKHUN (untuk mahasiswa semester 1)</td>
    <td>:</td>
    <td><? echo $hasil['skhun'];?></td>
  </tr>
  <tr>
    <td>IP semester 1 (SKS)</td>
    <td>:</td>
    <td><? echo $hasil['ips1']." (".$hasil['sks1'].")";?></td>
  </tr>
  <tr>
    <td>IP semester 2 (SKS)</td>
    <td>:</td>
    <td><? echo $hasil['ips2']." (".$hasil['sks2'].")";?></td>
  </tr>
  <tr>
    <td>IP semester 3 (SKS)</td>
    <td>:</td>
    <td><? echo $hasil['ips3']." (".$hasil['sks3'].")";?></td>
  </tr>
  <tr>
    <td>IP semester 4 (SKS)</td>
    <td>:</td>
    <td><? echo $hasil['ips4']." (".$hasil['sks4'].")";?></td>
  </tr>
  <tr>
    <td>IP semester 5 (SKS)</td>
    <td>:</td>
    <td><? echo $hasil['ips5']." (".$hasil['sks5'].")";?></td>
  </tr>
  <tr>
    <td>IP semester 6 (SKS)</td>
    <td>:</td>
    <td><? echo $hasil['ips6']." (".$hasil['sks6'].")";?></td>
  </tr>
  <tr>
    <td>IP semester 7 (SKS)</td>
    <td>:</td>
    <td><? echo $hasil['ips7']." (".$hasil['sks7'].")";?></td>
  </tr>
  <tr>
    <td>IPK</td>
    <td>:</td>
    <td><? echo $hasil['ipk'];?></td>
  </tr>
    <tr>
    <th colspan="3" align="left">KETERANGAN LAINNYA</th>
  </tr>
  <tr>
    <td>rekening listrik</td>
    <td>:</td>
    <td>bulan (1) <? echo $hasil['bln1'];?></td>
    <td>bulan (2) <? echo $hasil['bln2'];?></td>
  </tr>
  <tr>
    <td>jumlah tanggungan keluarga (anak yang belum bekerja)</td>
    <td>:</td>
    <td><? echo $hasil['tanggungan'];?></td>
  </tr>
  <tr>
    <td>prestasi</td>
    <td>:</td>
    <td><? echo $hasil['ket'];?></td>
  </tr>
  <tr>
    <td>Mendaftar untuk Beasiswa</td>
    <td>:</td>
    <td>1. <? echo $hasil['beasiswa1'];?></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>2. <? echo $hasil['beasiswa2'];?></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>3. <? echo $hasil['beasiswa3'];?></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td align="right">TTD,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td align="right"></br></br></br></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td align="right"><? echo $hasil['nama'];?></td>
  </tr>
  <tr>
    <td><button onclick="myFunction()">[PRINT dokumen]</button>
        <button onclick="beasiswa.ppns.ac.id">
     [KELUAR]</button>
</td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>