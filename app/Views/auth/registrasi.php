<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
    content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('css/styleregister.css') ?>">
    <title>Registrasi User</title>

</head>

<body>
    <header>
        <div class="main-header">
            <div class="logo card">
            </div>
            <div class="form card">
                <form action="<?= base_url('daftar');?>" method="post">
                    <h1>Daftar</h1>
                    <?php if(isset($errors)) echo $errors->listErrors(); ?>
                    <p><input type="text" name="nama" placeholder="Nama"></p>
                    <p><input type="text" name="username" placeholder="Username"></p>
                    <p><input type="text" name="email" placeholder="Email"></p>
                    <p><input type="password" name="pwd" placeholder="Password"></p>
                    <p><input type="password" name="kpwd" placeholder="Konfirmasi Password"></p>
                    <p><input type="text" name="tmp_lahir" placeholder="Tempat Lahir"></p>
                    <p><input type="date" name="tgl_lahir" placeholder="Tanggal Lahir"></p>
                    <p><input type="text" name="asal" placeholder="Asal Kota"></p>
                    <p><button>Daftar</button></p>
                    <p>Sudah punya akun? <a href="<?= base_url('login');?>">Masuk</a></p>
                </form>
            </div>
        </div>
    </header>

</body>

</html>