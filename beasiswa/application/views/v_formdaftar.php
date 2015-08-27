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
      <?php echo form_open('c_inputdata'); ?>
      <?php $nrp = $this->session->userdata('nrp');?>
        <p><input type="text" name="nama" value="" placeholder="Nama"></p>
        <p><input type="text" name="nrp" value="<?php echo $nrp; ?>"></p>
        <p>
        <select name="jenkel">
          <option value="" selected="selected">Jenis Kelamin</option>
          <option value="L" >Laki-Laki</option>
          <option value="P" >Perempuan</option>
        </select>
        </p>
        <p><input type="text" name="alamat" value="" placeholder="Alamat Rumah"></p>
        <p><input type="text" name="telp" value="" placeholder="no Telp / HP (tulis angka tanpa spasi)"></p>
        <p><input type="text" name="ayah" value="" placeholder="Nama Ayah"></p>
        <p><input type="text" name="ibu" value="" placeholder="Nama Ibu"></p>
        <p><input type="text" name="kerjaayah" value="" placeholder="Pekerjaan Ayah"></p>
        <p><input type="text" name="kerjaibu" value="" placeholder="Pekerjaan Ibu"></p>
        <p><input type="text" name="hasilayah" value="" placeholder="Penghasilan Ayah (tulis angka tanpa titik)"></p>
        <p><input type="text" name="hasilibu" value="" placeholder="Penghasilan Ibu (tulis angka tanpa titik)"></p>
        <p><input type="text" name="skhun" value="" placeholder="Nilai SKHUN (untuk Mahasiswa semester 1, gunakan tanda titik untuk pemisah)"></p>
        <p><input type="text" name="ips1" value="" placeholder="Nilai IPS Semester 1(gunakan tanda titik)"></p>
        <p><input type="text" name="ips2" value="" placeholder="Nilai IPS Semester 2(gunakan tanda titik)"></p>
        <p><input type="text" name="ips3" value="" placeholder="Nilai IPS Semester 3(gunakan tanda titik)"></p>
        <p><input type="text" name="ips4" value="" placeholder="Nilai IPS Semester 4(gunakan tanda titik)"></p>
        <p><input type="text" name="ips5" value="" placeholder="Nilai IPS Semester 5(gunakan tanda titik)"></p>
        <p><input type="text" name="ips6" value="" placeholder="Nilai IPS Semester 6(gunakan tanda titik)"></p>
        <p><input type="text" name="ips7" value="" placeholder="Nilai IPS Semester 7(gunakan tanda titik)"></p>
        <p><input type="text" name="sks1" value="" placeholder="Jumlah SKS Semster 1"></p>
        <p><input type="text" name="sks2" value="" placeholder="Jumlah SKS Semster 2"></p>
        <p><input type="text" name="sks3" value="" placeholder="Jumlah SKS Semster 3"></p>
        <p><input type="text" name="sks4" value="" placeholder="Jumlah SKS Semster 4"></p>
        <p><input type="text" name="sks5" value="" placeholder="Jumlah SKS Semster 5"></p>
        <p><input type="text" name="sks6" value="" placeholder="Jumlah SKS Semster 6"></p>
        <p><input type="text" name="sks7" value="" placeholder="Jumlah SKS Semster 7"></p>
        <p><input type="text" name="listrik1" value="" placeholder="Tagihan listrik Bulan lalu (tulis angka tanpa titik)"></p>
        <p><input type="text" name="listrik2" value="" placeholder="Tagihan Listrik 2 Bulan yang lalu (tulis angka tanpa titik)"></p>
        <p><input type="text" name="keluarga" value="" placeholder="Jumlah Tanggungan Keluarga (tulis angka tanpa titik)"></p>
        <p><input type="text" name="ket" value="" placeholder="Keterangan Tambahan"></p>
        <p>
        <select name="beasiswa1"> 
          <option value="" selected="selected">Pilihan Beasiswa 1</option>
          <option value="PPA" >PPA</option>
          <option value="BBM" >BBM</option>
          <option value="TOYOTA" >TOYOTA</option>
          <option value="ASTRA" >ASTRA</option>
          <option value="SUPERSEMAR" >SUPERSEMAR</option>
          <option value="BNI" >BNI</option>
          <option value="LAINYA" >LAIN-LAIN</option>
        </select>
        </p>
        <p>
        <select name="beasiswa2"> 
          <option value="" selected="selected">Pilihan Beasiswa 2</option>
          <option value="PPA" >PPA</option>
          <option value="BBM" >BBM</option>
          <option value="TOYOTA" >TOYOTA</option>
          <option value="ASTRA" >ASTRA</option>
          <option value="SUPERSEMAR" >SUPERSEMAR</option>
          <option value="BNI" >BNI</option>
          <option value="LAINYA" >LAIN-LAIN</option>
        </select>
        </p>
        <p>
        <select name="beasiswa3"> 
          <option value="" selected="selected">Pilihan Beasiswa 3</option>
          <option value="PPA" >PPA</option>
          <option value="BBM" >BBM</option>
          <option value="TOYOTA" >TOYOTA</option>
          <option value="ASTRA" >ASTRA</option>
          <option value="SUPERSEMAR" >SUPERSEMAR</option>
          <option value="BNI" >BNI</option>
          <option value="LAINYA" >LAIN-LAIN</option>
        </select>
        </p>
        <p><input type="text" name="rekbni" value="" placeholder="no. rekening BNI"></p>
        </p>
        <p class="submit"><input type="submit" name="submit" value="Daftar"></p>
      </form>
    </div>

  </section>

</body>
</html>