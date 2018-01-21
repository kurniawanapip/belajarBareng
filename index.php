<?php 
// menghubungkan ke functions
  require 'functions.php';
  
// cek apakah sudah tersimpan apa belum
  if ( isset($_POST["submit"]) ) {

     if ( tambah($_POST) > 0 ) {
       echo "
        <script>
          alert('berhasil tersimpan!!');
        </script>
          ";
     } else {
      echo "
        <script>
          alert('gagal tersimpan!!');
        </script>
          ";
     }
}

?>


<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Belajar Bareng</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- navbar  -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#home" class="navbar-brand page-scroll"><b class="jud">BelajarBareng.Com</b></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="page-scroll"><b class="jud">About</b></a></li>
            <li><a href="#lesson" class="page-scroll"><b class="jud">Lesson</b></a></li>
            <li><a href="#portfolio" class="page-scroll"><b class="jud">Galeri</b></a></li>
            <li><a href="#contact" class="page-scroll"><b class="jud">Contact</b></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->


    <!--jumbotron  -->
    <div class="jumbotron text-center">
      <img src="img/gua.png" class="img-circle">
      <h1>Apip Kurniawan</h1>
     <p>kuningan | 29-05-1992 | web design</p>
    </div>
     <!-- akhir jumbotron  -->


    <!-- about  -->
    <section class="about" id="about">

      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">About</h2>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-justify pkiri">
            <p><b>ini website apaan sih..??</b></p>
		      	<p>Oke..apa kabar semuanya.?. Ini adalah website tentang serangkaian mata kuliah yang pernah saya pelajari di kampus AMIK AL-MUSLIM Bekasi, terutama pada mata kuliah pemrograman.</p>
            <p>saya suka sekali dengan pemrograman,dan ini merupakan sesuatu hal yang baru bagi saya karena background smk saya adalah otomotif. dan ketika belajar pemrograman ini ternyata sangat mengasyikan.</p>
            <p><b>apa tujuannya membuat website "belajarbareng.com" ini.??</b></p>
            <p>tujuan saya adalah hanya sebagai dokumentasi aja, jika suatu saat saya sudah lulus dari Amik Al-muslim mungkin hanya ini kenang2an yang saya punya.<br> dan juga mungkin bisa bermanfaat buat temen-temen yang pengen belajar.. hehe !! </p>
            <p><b>terus kenapa hanya pemrograman..??</b></p>
            <p>yappp kenapa kita harus belajar pemrograman.? gini..menurut survey,kita itu seharusnya belajar tentang pemrograman karena dengan mempelajarinya kita juga akan mendapatkan manfaat lainnya,
               seperti steve jobs (apple's co-founder) bilang "i think everybody in this country should learn how to program a computer because it teaches you how to think"..  ngerti ora :D <br>
               pemrograman juga mengajarkan kita untuk belajar teliti, disiplin, berpikir abstrak dan membentuk pola pikir komputasional dalam menghadapi suatu masalah.</p>
          </div>
          <div class="col-sm-6 text-justify pkanan">
            <p><b>selain pemrograman apakah ada yang pelajaran lain yang di share di sini..??</b></p>
            <p>owh ada,, di sini juga saya menshare tentang design grafis yang saya pelajari di Amik Al-muslim yaitu autocad,jadi ga cuman pemrograman aja. ya walaupun hanya sedikit mudah2an bisa membantu temen2 yang ingin mengenal tentang autocad,karena autocad ini bukan mata kuliah formal dan ini hanya salahsatu extrakurikuler saja.</p>
            <p><b>apa sih yang kamu dapet dari kampus Amik Al-Muslim itu sendiri..??</b></p>
            <p>apa ya..  puji syukur kehadirat Allah SWT,saya sangat bersyukur sekali bisa kuliah disana bisa punya temen2 baru dengan masing2 karakter yang berbeda, bisa dapet ilmu dan pelajaran baru, pacar baru. eehh..<br> ya pokoknya saya ga nyesel lah kuliah disana. <br> ya intinya sih kalo kita pengen kuliah tuh harus bisa mantepin diri kita sendiri dulu, niat dan tujuan kuliah itu untuk apa, dan kita harus komitmen sama tujuan itu. karena ga sedikit juga temen2 yang berhenti di tengah
              jalan karena berbagai alasan..</p>
            <p><b>ada kesan atau pesan ga buat temen2 Amik Al-Muslim..??</b></p>
            <p>ya paling kangen aja sih sama mereka :(<br> tapi ya inilah hidup "setiap pertemuan pasti ada perpisahan", kita ga bisa menolak itu. <br> tetep semangat raih mimpi kalian. gaess.!! </p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir about -->

    <!-- lesson -->
    <section class="lesson" id="lesson">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Lesson</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
              <img src="img/code.png" alt="">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
              <h4 class="text-center"> silahkan klik.!!</h4>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
              <div class="btn-group">
                <a href="pascal.html" target="_blank"><button type="button" class="btn btn-danger">Pascal</button></a>
              </div>
              <div class="btn-group">
                <a href="turbo.html" target="_blank"><button type="button" class="btn btn-danger">Turbo C++</button></a>
              </div>
              <div class="btn-group">
                <a href="visualc.html" target="_blank"><button type="button" class="btn btn-danger">Visual C++</button></a>
              </div>
              <div class="btn-group">
                <a href="vb.html" target="_blank"><button type="button" class="btn btn-danger">visual Basic</button></a>
              </div>
              <div class="btn-group">
                <a href="delphi.html" target="_blank"><button type="button" class="btn btn-danger">Delphi</button></a>
              </div>
              <div class="btn-group">
                <a href="autocad.html" target="_blank"><button type="button" class="btn btn-danger">Autocad</button></a>
              </div>
              <div class="btn-group">
                <a href="matlab.html" target="_blank"><button type="button" class="btn btn-danger">Matlab</button></a>
              </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="coba">
            <img src="img/code2.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- akhir lesson -->

    <!-- portfolio  -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Galeri</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-2">
            <a href="#gambar1" class="thumbnail">
              <img src="img/1.png">
            </a>
            <div class="overlay" id="gambar1">
              <img src="full/1.png" alt="apip">
              <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
              <a class="btn btn-primary next" href="#gambar2" role="button"><b>next >></b></a>
              <a class="btn btn-primary prev" href="#gambar24" role="button"><b><< prev</b></a>
            </div>
          </div>
         <div class="col-sm-2">
            <a href="#gambar2" class="thumbnail">
              <img src="img/2.png">
            </a>
            <div class="overlay" id="gambar2">
              <img src="full/2.png" alt="apip">
              <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
              <a class="btn btn-primary next" href="#gambar3" role="button"><b>next >></b></a>
              <a class="btn btn-primary prev" href="#gambar1" role="button"><b><< prev</b></a>
            </div>
          </div>
         <div class="col-sm-2">
            <a href="#gambar3" class="thumbnail">
              <img src="img/3.png">
            </a>
            <div class="overlay" id="gambar3">
              <img src="full/3.png" alt="apip">
              <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
              <a class="btn btn-primary next" href="#gambar4" role="button"><b>next >></b></a>
              <a class="btn btn-primary prev" href="#gambar2" role="button"><b><< prev</b></a>
            </div>
          </div>
          <div class="col-sm-2">
            <a href="#gambar4" class="thumbnail">
              <img src="img/7.png">
            </a>
            <div class="overlay" id="gambar4">
              <img src="full/7.png" alt="apip">
              <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
              <a class="btn btn-primary next" href="#gambar5" role="button"><b>next >></b></a>
              <a class="btn btn-primary prev" href="#gambar3" role="button"><b><< prev</b></a>
            </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar5" class="thumbnail">
                <img src="img/5.png">
              </a>
              <div class="overlay" id="gambar5">
                <img src="full/5.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar6" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar4" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar6" class="thumbnail">
                <img src="img/6.png">
              </a>
              <div class="overlay" id="gambar6">
                <img src="full/6.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar7" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar5" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar7" class="thumbnail">
                <img src="img/8.png">
              </a>
              <div class="overlay" id="gambar7">
                <img src="full/8.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar8" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar6" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar8" class="thumbnail">
                <img src="img/4.png">
              </a>
              <div class="overlay" id="gambar8">
                <img src="full/4.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar9" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar7" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
            <a href="#gambar9" class="thumbnail">
              <img src="img/9.png">
            </a>
            <div class="overlay" id="gambar9">
              <img src="full/9.png" alt="apip">
              <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
              <a class="btn btn-primary next" href="#gambar10" role="button"><b>next >></b></a>
              <a class="btn btn-primary prev" href="#gambar8" role="button"><b><< prev</b></a>
            </div>
          </div>
          <div class="col-sm-2">
            <a href="#gambar10" class="thumbnail">
              <img src="img/10.png">
            </a>
            <div class="overlay" id="gambar10">
              <img src="full/10.png" alt="apip">
              <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
              <a class="btn btn-primary next" href="#gambar11" role="button"><b>next >></b></a>
              <a class="btn btn-primary prev" href="#gambar9" role="button"><b><< prev</b></a>
            </div>
          </div>
          <div class="col-sm-2">
            <a href="#gambar11" class="thumbnail">
              <img src="img/11.png">
            </a>
            <div class="overlay" id="gambar11">
              <img src="full/11.png" alt="apip">
              <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
              <a class="btn btn-primary next" href="#gambar12" role="button"><b>next >></b></a>
              <a class="btn btn-primary prev" href="#gambar10" role="button"><b><< prev</b></a>
            </div>
          </div>
          <div class="col-sm-2">
            <a href="#gambar12" class="thumbnail">
              <img src="img/12.png">
            </a>
            <div class="overlay" id="gambar12">
              <img src="full/12.png" alt="apip">
              <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
              <a class="btn btn-primary next" href="#gambar13" role="button"><b>next >></b></a>
              <a class="btn btn-primary prev" href="#gambar11" role="button"><b><< prev</b></a>
            </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar13" class="thumbnail">
                <img src="img/13.png">
              </a>
              <div class="overlay" id="gambar13">
                <img src="full/13.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar14" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar12" role="button"><b><< prev</b></a></div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar14" class="thumbnail">
                <img src="img/14.png">
              </a>
              <div class="overlay" id="gambar14">
                <img src="full/14.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar15" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar13" role="button"><b><< prev</b></a></div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar15" class="thumbnail">
                <img src="img/15.png">
              </a>
              <div class="overlay" id="gambar15">
                <img src="full/15.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar16" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar14" role="button"><b><< prev</b></a></div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar16" class="thumbnail">
                <img src="img/16.png">
              </a>
              <div class="overlay" id="gambar16">
                <img src="full/16.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar17" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar15" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar17" class="thumbnail">
                <img src="img/17.png">
              </a>
              <div class="overlay" id="gambar17">
                <img src="full/17.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar18" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar16" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar18" class="thumbnail">
                <img src="img/18.png">
              </a>
              <div class="overlay" id="gambar18">
                <img src="full/18.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar19" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar17" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar19" class="thumbnail">
                <img src="img/19.png">
              </a>
              <div class="overlay" id="gambar19">
                <img src="full/19.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar20" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar18" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar20" class="thumbnail">
                <img src="img/20.png">
              </a>
              <div class="overlay" id="gambar20">
                <img src="full/20.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar21" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar19" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar21" class="thumbnail">
                <img src="img/21.png">
              </a>
              <div class="overlay" id="gambar21">
                <img src="full/21.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar22" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar20" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar22" class="thumbnail">
                <img src="img/22.png">
              </a>
              <div class="overlay" id="gambar22">
                <img src="full/22.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar23" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar21" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar23" class="thumbnail">
                <img src="img/23.png">
              </a>
              <div class="overlay" id="gambar23">
                <img src="full/23.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar24" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar22" role="button"><b><< prev</b></a>
              </div>
          </div>
          <div class="col-sm-2">
              <a href="#gambar24" class="thumbnail">
                <img src="img/24.png">
              </a>
              <div class="overlay" id="gambar24">
                <img src="full/24.png" alt="apip">
                <a class="btn btn-primary clos" href="#portfolio" role="button"><b>close (x)</b></a>
                <a class="btn btn-primary next" href="#gambar2" role="button"><b>next >></b></a>
                <a class="btn btn-primary prev" href="#gambar23" role="button"><b><< prev</b></a>
              </div>
          </div>
      </div>
    </section>
    <!-- akhir portfolio -->


    <!-- contact -->
    <section>
      <div class="contact" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Contact</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <form action="" method="post">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan nama" title="sesuai dengan ktp" data-toggle="tooltip" required autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Masukan email" required autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="telp">No Telepon</label>
                  <input type="text" name="telp" id="telp" class="form-control" placeholder="Masukan no.telp" required autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                    <select type="text" name="gender" class="form-control">
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="pesan">Pesan</label>
                  <textarea  type="text" name="pesan" id="pesan" class="form-control" rows="10" placeholder="Masukan pesan" required autocomplete="off"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Kirim pesan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->


    <!-- footer  -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2017 | built <i class="glyphicon glyphicon-user"></i> by. <a href="http://instagram.com/apip_kurniawan">apip kurniawan</a>.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="https://www.facebook.com/apip.ajaah" class="btn btn-primary"> <i class="glyphicon glyphicon-thumbs-up"></i> facebook</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
