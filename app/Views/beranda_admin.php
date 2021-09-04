<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style_berandaa.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    

    <title>Approvement</title>

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
              <a href="#" class="fa fa-check-circle btnapprove">
                <btn class="impact">
                  Approvement
                </btn>
              </a>
            </div>
          </div>
        </div>
        <div class="row bg5">
          <div class="col">
            <div class="nav1-position">
              <a href="<?= base_url('/beranda_a'); ?>" class="fa fa-home btnhome">
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
              <a href="#" class="fa fa-user btnprofil">
                <btn class="impact">
                  <?= $id_admin ?>
                </btn>
              </a>
            </div>
          </div>
        </div>
        <div class="row bg7">
          <div class="col">
            <div class="nav3-position">
              <a href="<?= base_url('/logout_admin'); ?>" class="btnlogout">
                <btn class="impact">
                  Log Out
                </btn>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-9 main">
        <div class="row bg2">
          <div class="col-8">
            <div class="beranda-position">
              <b class="impact">Approvement</b>
            </div>
          </div>
          <div class="col-4 bg3">
              <div>
                <form action="<?= base_url('/search_beranda') ?>" method="post" class="form-inline search-position">
                  <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn my-2 my-sm-0" type="submit"><a class="fa fa-search"></a></button>
                </form>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col bg4">
            <div class="row bg8">
              <div class="box1">
              <?php 
                    foreach($data_postingans as $data => $postingans){

                    ?>
                        <div class="card mb-4 pb-2 mt-2 pt-2" style="width: 80%; margin-left: 5%">
                            <div class="card-body">
                                <p class="card-text"><?= $postingans['nama'] ?>
                                <br>@<?= $postingans['username'] ?></p>
                                <hr class="garis"></hr>
                                <p class="card-text"><b><?= $postingans['judul_posting'] ?></b> <br />
                                For <b><?= $postingans['kategori'] ?></b> at <b><?= substr($postingans['waktu'], 0, strlen($postingans['waktu'])-3 ) ?></b>
                                </p>
                                <br />
                                <p class="card-text"><?= $postingans['isi_posting'] ?>
                                <img class="card-img-top" src="<?= $postingans['file'] ?>" alt="Card image cap">
                                </p>
                                
                                <a href="<?= base_url('/approve/'.$postingans['id_posting']) ?>" class="btn btn-success">Setujui</a> <a href="<?= base_url('/delete_a/'.$postingans['id_posting']) ?>" class="btn btn-danger">Hapus</a>
                            </div>
                            
                        </div>
                    <?php
                    }
                    ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>