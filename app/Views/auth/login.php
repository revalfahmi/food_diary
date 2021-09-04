<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
    content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <title>Login User</title>

</head>

<body>
    <header>
        <div class="main-header">
            <div class="logo card">
            </div>
            <div class="form card">
                <form action="<?= base_url('submit');?>" method="post">
                    <?php if(isset($errors)) echo $errors->listErrors(); ?>
                    <h1>FOOD <span class="font-diary">diary</span></h1>
                    <h3>Where Foodies meet Foodies</h3>                
                    <h2>Masuk</h2>
                    <p><input type="text" name="username" placeholder="Email/Username"></p>
                    <p><input type="password" name="password" placeholder="Password"></p>
                    <p><button>Login</button></p>
                    <p>Belum punya akun? <a href="<?= base_url('regis');?>">Daftar</a></p>
                </form>
            </div>
        </div>
    </header>

</body>

</html>