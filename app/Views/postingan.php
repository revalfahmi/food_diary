<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS Custom -->
    <link rel="stylesheet" type="text/css" href="css/style_postingan.css">

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">


    <title>Postingan</title>
  </head>
  <body>
    <div class="row">
      <div class="col-3">
        <div class="row bg1">
          <div class="col">
            <div class="logo-position">
              <img src="img/logo_admin.png">
            </div>
          </div>
        </div>
        <div class="row bg5">
          <div class="col">
            <div class="nav1-position">
              <a href="<?= base_url('/beranda_u'); ?>" class="fa fa-home btnhome">
                <btn class="impact">
                  Beranda
                </btn>
              </a>
            </div>
          </div>
        </div>
        <div class="row bg6">
          <div class="col">
            <div class="nav2-position">
              <a href="<?= base_url('/profil_u'); ?>" class="fa fa-user btnprofil">
                <btn class="impact"> 
                  Profil       
                </btn>
              </a>
            </div>
          </div>
        </div>
        <div class="row bg7">
          <div class="col">
            <div class="nav3-position">
              <a href="#" class="btnpost">
                <btn class="impact"> 
                  + Post 
                </btn>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-9">
        <div class="row bg2">
          <div class="col-9">
            <div class="beranda-position">
              <a href="<?= base_url('/beranda_u'); ?>" class="fa fa-arrow-circle-left post-btn">
                <btn class="impact">
                    Post
                </btn>
              </a>
            </div>
          </div>
          <div class="col-3 search-pos">
            <form action="<?= base_url('search') ?>" class="search" method="post">
              <div class="search__wrapper">
                <input type="text" name="cari" placeholder="Search for..." class="search__field">
                <button type="submit" class="fa fa-search search__icon"></button>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col bg4">
            <div class="row bg8">
              <div class="wrapper">
                <?php if(isset($errors)) echo $errors->listErrors(); ?>
                <div class="sections">
                  <form action="<?= base_url('submitpost');?>" method="post" enctype="multipart/form-data">
                    <section class="active">
                      <input type="text" placeholder="Nama Menu" id="menu" name="menu"/>
                      <input type="time" placeholder="Jam" id="jam" name="jam"/>
                      <div class="select-option">
                        <div class="head">Kategori Jam Makan</div>
                        <div class="option"></div>
                      </div>   
                      <select id="category" name="kategori">
                        <option value="Sarapan">Sarapan</option>
                        <option value="Makan Siang">Makan Siang</option>
                        <option value="Makan Malam">Makan Malam</option>
                        <option value="Snack">Snack</option>
                      </select>           
                    </section>
                    <section>
                      </br>
                      <textarea placeholder="Mulai menulis disini...." id="msg" name="deskripsi"></textarea>
                      <input type="file" class="images" name="foto">
                    </section>
                    <footer>
                      <ul>
                        <li><button type="reset" id="reset" class="button-upload-merah">Reset</button></li>
                        <li><button type="submit" id="Upload" class="button-upload">Upload</button></li>
                      </ul>
                    </footer> 
                  </form> 
                </div>            
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
        <div class="height">
            <h3 class="text-center scroll">Scroll down </h3>
        </div>
    </div>                       
   
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script_post.js" type="text/javascript"></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>