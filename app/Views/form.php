<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style_editprofil.css') ?>">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Form Edit</title>

  </head>
  <body>
    <div class="row">
      <div class="col-3">
        <div class="row _bg1">
          <div class="col">
            <div class="logo-position">
              <img src="<?= base_url('/img/logo_pr.png') ?>">
            </div>
          </div>
        </div>
        <div class="row _bg5">
          <div class="col">
            <div class="nav1-position">
                <a href="<?= base_url('/beranda_u') ?>" class="fa fa-home btnhome">
                    <btn class="impact">
                        Beranda
                    </btn>
                </a>
            </div>
          </div>
        </div>
        <div class="row _bg6">
          <div class="col">
            <div class="nav2-position">
                <a href="<?= base_url('/profil_u') ?>" class="fa fa-user btnprofil">
                   <btn class="impact"> 
                     <?= $data_akun['nama'] ?>         
                    </btn>
                </a>
            </div>
          </div>
        </div>
        <div class="row _bg7">
          <div class="col">
            <a href="<?= base_url('post');?>" class="nav3-position btnpost">
              <btn class="impact"> 
                + Post         
              </btn>
            </a>
          </div>
        </div>
      </div>

      <div class="col-9">
        <div class="row _bg2">
          <div class="col">
            <div class="beranda-position">
              <a href="<?= base_url('/profil_u'); ?>">
                <div class="fa fa-arrow-circle-left edit-profil-btn">
                    <b class="impact">Edit Profil</b>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="row _bg4">
          <div class="col-5">
            <div class="row">
                <form action="<?= base_url('/submitedit') ?>" method="post" >
                <?php if(isset($errors)) echo $errors->listErrors(); ?>
                    <div class="col form-position">
                    <div class="col impact2">
                            <label for="inputNama" class="form-label"></label>
                            <input type="text" class="form-control" id="inputNama" placeholder="Nama" value="<?= $data_akun['nama'] ?>" name= "nama" style="font-size:1.7em;">
                        </div>
                        <div class="col impact2">
                            <label for="inputNama" class="form-label"></label>
                            <input type="text" class="form-control" id="inputNama" disabled placeholder="Username" value="<?= $data_akun['username'] ?>" name="username" style="font-size:1.7em;">
                        </div>
                        <div class="col impact2">
                            <label for="inputUsername" class="form-label"></label>
                            <input type="email" class="form-control" id="inputUsername" disabled placeholder="Email" value="<?= $data_akun['email'] ?>" name="email" style="font-size:1.7em;">
                        </div>
                        <div class="col impact2">
                            <label for="inputEmail" class="form-label"></label>
                            <input type="text" class="form-control" id="inputEmail" placeholder="Asal Kota" value="<?= $data_akun['asal_kota'] ?>" name="asal" style="font-size:1.7em;">
                        </div>
                        <div class="col impact2">
                            <label for="inputSpace" class="form-label"></label>
                        </div>
                        
                    </div>  
                
            </div>
          </div>
          <div class="col-6">
          <div class="col form-position">
                        <div class="col impact2">
                            <label for="inputPassword4" class="form-label"></label>
                            <input type="date" class="form-control" id="inputPassword4" placeholder="Tanggal Lahir" value="<?= $data_akun['tanggal_lahir'] ?>" name="tgl_lahir" style="font-size:1.7em;">
                        </div>
                        <div class="col impact2">    
                            <label for="inputPassword4" class="form-label"></label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Tempat Lahir" value="<?= $data_akun['tempat_lahir'] ?>" name="tmp_lahir" style="font-size:1.7em;">
                        </div>
                        <div class="col impact2">    
                            <label for="inputPassword4" class="form-label"></label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password Lama" name="pwdlama" style="font-size:1.7em;">
                        </div>
                        <div class="col impact2">    
                            <label for="inputPassword4" class="form-label"></label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password Baru" name="pwdbaru" style="font-size:1.7em;">
                        </div>
                        <div class="col impact2">    
                            <label for="inputPassword4" class="form-label"></label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Konfirmasi Password" name="kpwd" style="font-size:1.7em;">
                        </div>

                        </div>
          </div>
        </div>
        <div class="row _bg9">
          <div class="col">
          <a href="<?= base_url('/profil_u') ?>">
            <btn class="cancel-position btncancel">
                <btn class="impact"> 
                  Batalkan         
                </btn>
            </btn>
            </a>
            <button type="submit" class="save-position btnsave">
                <btn class="impact"> 
                  Simpan          
                </btn>
            </button>
          </div>
          </div>
        </form>  
        
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>