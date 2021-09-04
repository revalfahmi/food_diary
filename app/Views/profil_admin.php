<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style31.css') ?>">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Profil</title>

  </head>
  <body>
    <div class="row">
      <div class="col-3 outline1">
        <div class="row bg1">
          <div class="col">
            <div class="logo-position">
              <img src="img/logo_pr.png">
            </div>
          </div>
        </div>
        <div class="row bg5">
          <div class="col">
            <div class="nav1-position">
                <button href="#" class="fa fa-home btnhome">
                    <btn class="impact">
                        Beranda
                    </btn>
                </button>
            </div>
          </div>
        </div>
        <div class="row bg6">
          <div class="col">
            <div class="nav2-position">
                <button href="#" class="fa fa-user btnprofil">
                   <btn class="impact"> 
                     Profil          
                    </btn>
                </button>
            </div>
          </div>
        </div>
        <div class="row bg7">
          <div class="col">
            <div class="nav3-position">
              <button class="btnpost impact">+ Post</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="row bg2">
          <div class="col-10">
            <div class="beranda-position">
              <b class="impact">Profil</b>
            </div>
          </div>
          <div class="col-2 bg3">
          <div class="menu-position dropdown">
            <button class="btnmenu fa fa-bars"></button>
            <div class="dropdown-child">
                <a type="button" href="resources/form.php" class="impact">Edit Profil</a>
                <a type="button" href="#" class="impact">Keluar</a>
            </div>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col bg4">
            <div class="row bg8">
              <div class="box1">
                <!-- DISINI DATA DARI PENGGUNA -->
                Tidak Ada Data.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="bg9">
            <div>
                <form class="form-inline search-position">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn my-2 my-sm-0" type="submit"><a class="fa fa-search"></a></button>
                </form>
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