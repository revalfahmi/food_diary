<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style_berandauser2.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Beranda User</title>

  </head>
  <body>
    <div class="row">
        <div class="col-3 sidenav">
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
                    <?= $nama ?>          
                  </btn>
                </a>
              </div>
            </div>
          </div>
          <div class="row bg7">
            <div class="col">
              <div class="nav3-position">
                <a href="<?= base_url('post');?>" class="btnpost">
                  <btn class="impact"> 
                    + Post 
                  </btn>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-9 main">
          <div class="row bg2">
            <div class="col-9">
              <div class="beranda-position">
                <b class="impact">Beranda</b>
              </div>
            </div>
            <div class="col-3 search-pos">
              <form action="<?= base_url('search') ?>" class="search" method="post">
                <div class="search__wrapper">
                  <input type="text" name="cari" placeholder="Search for..." class="search__field">
                  <button type="submit" class="fa fa-search search__icon"></button>
                </div>
            </div>
          </form>
          </div>
          <div class="row">
            <div class="col bg4">
              <div class="row bg8">
                <div class="box1">
                  <br>
                  <?php 
                    foreach($data_postingans as $data => $postingans){
                  ?>
                  <a href="<?= base_url('/detail_u/'.$postingans['id_posting']); ?>" style="text-decoration: none; color: black;">
                  <div class="card mb-4 pb-2" style="width:80%; margin-left: 5%">
                    <div class="card-body" style="height:530px;">
                      <p class="card-text"><?= $postingans['nama'] ?>
                      <br>@<?= $postingans['username'] ?></p>
                      <hr class="garis"></hr>
                      <p class="card-text"><b><?= $postingans['judul_posting'] ?></b> <br />
                        For <b><?= $postingans['kategori'] ?></b> at <b><?= substr($postingans['waktu'], 0, strlen($postingans['waktu'])-3 ) ?></b>
                      </p>
                      <br>
                      <p class="card-text"><?= $postingans['isi_posting'] ?> </p> <br><br>
                      <img class="card-img-top img-position" src="<?= $postingans['file'] ?>" alt="Card image cap">
                    </div>
                  </div>
                  </a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

          
        <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
          <div class="height">
              <h3 class="text-center scroll">Scroll down </h3>
          </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>