<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="../css/style.css" media="all">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Form Pendaftaran Beasiswa PPNS</h1>
      <?php echo validation_errors(); ?>
      <?php echo form_open('c_editdata'); ?>
      <?php
             $nrp = $this->session->userdata('nrp');
             $datasiswa = $this->session->userdata('datasiswa');
      ?>
        <p><input type="text" name="nama" value="<?php echo $datasiswa['nama']; ?>" placeholder="Nama"></p>
        <p><input type="text" name="nrp" value="<?php echo $nrp; ?>"></p>
        <p><input type="text" name="jenkel" value="<?php echo $datasiswa['jenkel']; ?>"></p>
        <p><input type="text" name="alamat" value="<?php echo $datasiswa['alamat']; ?>" placeholder="Alamat Rumah"></p>
        <p><input type="text" name="telp" value="<?php echo $datasiswa['telepon']; ?>" placeholder="no Telp / HP (tulis angka tanpa spasi)"></p>
        <p><input type="text" name="ayah" value="<?php echo $datasiswa['ayah']; ?>" placeholder="Nama Ayah"></p>
        <p><input type="text" name="ibu" value="<?php echo $datasiswa['ibu']; ?>" placeholder="Nama Ibu"></p>
        <p><input type="text" name="kerjaayah" value="<?php echo $datasiswa['kerjaayah']; ?>" placeholder="Pekerjaan Ayah"></p>
        <p><input type="text" name="kerjaibu" value="<?php echo $datasiswa['kerjaibu']; ?>" placeholder="Pekerjaan Ibu"></p>
        <p><input type="text" name="hasilayah" value="<?php echo $datasiswa['hasilayah']; ?>" placeholder="Penghasilan Ayah (tulis angka tanpa titik)"></p>
        <p><input type="text" name="hasilibu" value="<?php echo $datasiswa['hasilibu']; ?>" placeholder="Penghasilan Ibu (tulis angka tanpa titik)"></p>
        <p><input type="text" name="skhun" value="<?php echo $datasiswa['skhun']; ?>" placeholder="Nilai SKHUN (untuk Mahasiswa semester 1, gunakan tanda titik untuk pemisah)"></p>
        <p><input type="text" name="ips1" value="<?php echo $datasiswa['ips1']; ?>" placeholder="Nilai IPS Semester 1(gunakan tanda titik)"></p>
        <p><input type="text" name="ips2" value="<?php echo $datasiswa['ips2']; ?>" placeholder="Nilai IPS Semester 2(gunakan tanda titik)"></p>
        <p><input type="text" name="ips3" value="<?php echo $datasiswa['ips3']; ?>" placeholder="Nilai IPS Semester 3(gunakan tanda titik)"></p>
        <p><input type="text" name="ips4" value="<?php echo $datasiswa['ips4']; ?>" placeholder="Nilai IPS Semester 4(gunakan tanda titik)"></p>
        <p><input type="text" name="ips5" value="<?php echo $datasiswa['ips5']; ?>" placeholder="Nilai IPS Semester 5(gunakan tanda titik)"></p>
        <p><input type="text" name="ips6" value="<?php echo $datasiswa['ips6']; ?>" placeholder="Nilai IPS Semester 6(gunakan tanda titik)"></p>
        <p><input type="text" name="ips7" value="<?php echo $datasiswa['ips7']; ?>" placeholder="Nilai IPS Semester 7(gunakan tanda titik)"></p>
        <p><input type="text" name="sks1" value="<?php echo $datasiswa['sks1']; ?>" placeholder="Jumlah SKS Semster 1"></p>
        <p><input type="text" name="sks2" value="<?php echo $datasiswa['sks2']; ?>" placeholder="Jumlah SKS Semster 2"></p>
        <p><input type="text" name="sks3" value="<?php echo $datasiswa['sks3']; ?>" placeholder="Jumlah SKS Semster 3"></p>
        <p><input type="text" name="sks4" value="<?php echo $datasiswa['sks4']; ?>" placeholder="Jumlah SKS Semster 4"></p>
        <p><input type="text" name="sks5" value="<?php echo $datasiswa['sks5']; ?>" placeholder="Jumlah SKS Semster 5"></p>
        <p><input type="text" name="sks6" value="<?php echo $datasiswa['sks6']; ?>" placeholder="Jumlah SKS Semster 6"></p>
        <p><input type="text" name="sks7" value="<?php echo $datasiswa['sks7']; ?>" placeholder="Jumlah SKS Semster 7"></p>
        <p><input type="text" name="listrik1" value="<?php echo $datasiswa['bln1']; ?>" placeholder="Tagihan listrik Bulan lalu (tulis angka tanpa titik)"></p>
        <p><input type="text" name="listrik2" value="<?php echo $datasiswa['bln2']; ?>" placeholder="Tagihan Listrik 2 Bulan yang lalu (tulis angka tanpa titik)"></p>
        <p><input type="text" name="keluarga" value="<?php echo $datasiswa['tanggungan']; ?>" placeholder="Jumlah Tanggungan Keluarga (tulis angka tanpa titik)"></p>
        <p><input type="text" name="ket" value="<?php echo $datasiswa['ket']; ?>" placeholder="Keterangan Tambahan"></p>
        <p><input type="text" name="beasiswa1" value="<?php echo $datasiswa['beasiswa1']; ?>" placeholder="beasiswa"></p>
        <p><input type="text" name="beasiswa2" value="<?php echo $datasiswa['beasiswa2']; ?>" placeholder="beasiswa"></p>
        <p><input type="text" name="beasiswa3" value="<?php echo $datasiswa['beasiswa3']; ?>" placeholder="beasiswa"></p>
        <p><input type="text" name="rekbni" value="<?php echo $datasiswa['rekbni']; ?>" placeholder="no. rekening BNI"></p>
        </p>
        <p class="submit"><input type="submit" name="submit" value="Edit"></p>
        <p class="submit"><input type="submit" name="submit" value="Print"></p>
      </form>
    </div>

  </section>

</body>
</html>