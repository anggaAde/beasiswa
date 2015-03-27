<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="../css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Pendaftaran Beasiswa PPNS</h1>
      <?php echo form_open('c_login'); ?>
        <p><input type="text" name="username" value="" placeholder="Username StudentPortal"></p>
        <p><input type="password" name="password" value="" placeholder="Password StudentPortal"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Gunakan username dan password Student Portal untuk mendaftar.</br>
      Login lagi untuk mengubah dan mencetak data yang telah di inputkan </br>
        Pendaftaran beasiswa SUPERSEMAR dibuka mulai tanggal 23 februari 2015 s/d 7 Maret 2015.
        data yang di inputkan sebelum maupun sesudah tanggal itu akan di hapus.
      </p>
    </div>
  </section>

  <section class="about">
    <p class="about-links">
      <a href="http://ppns.ac.id" target="_parent">website PPNS</a>
      <a href="http://ppns.ac.id" target="_parent">Download</a>
    </p>
    <p class="about-author">
      2015&dash;2016</br> <a href="">BAAK PPNS</a> -
      <a href="" target="">UPT Komputer</a><br>
  </section>
</body>
</html>