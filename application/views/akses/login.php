<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url()?>assets/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <style>
        .styled-div {
            border: 2px solid black; /* Mengatur border dengan ketebalan 2px dan warna hitam */
            background-color: #513449; /* Mengatur warna isi menjadi putih */
            padding: 20px; /* Menambahkan padding di dalam div */
            width: 400px; /* Mengatur lebar div */
            height: 500px; /* Mengatur tinggi div */
        }
        .white-background {
            background-color: #FADADD; /* Mengatur warna latar belakang menjadi putih */
            color: black; /* Mengatur warna teks agar terlihat kontras */
            height: 100vh; /* Memastikan tinggi halaman penuh tampilan */
            margin: 0; /* Menghilangkan margin default */
            font-family: Arial, sans-serif; /* Mengatur font untuk teks */
        }
    </style>
</head>

<body class="white-background">

    <?= form_open_multipart(site_url('akses/login')); ?>
    <div class="row  ">
        <div class="col s12 ">
            <div class="col s12 m4">
                <div class="styled-div ">
                    <div class=" card-content white-text center">
                        <h3 class="card-title"> Login Disini
                        </h3>
                        <?php echo validation_errors(); ?>
                        <div class="row">

                            <div class="input-field col s12">
                                <i class="material-icons prefix">contact_phone</i>
                                <input id="phone_number" name="phone_number" type="number" class="validate"
                                    placeholder="No.HP" />
                                <!--  <label for="nohp ">NomerHP</label> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" name="password" type="password" class="validate"
                                    placeholder="password" />
                                <!-- <label for="password">Password</label> -->
                            </div>

                        </div>
                    </div>
                    <div class="card-action center">
                        <button type="submit" class="btn blue lighten-1">Login</button>
                        <p style="color: white;">belum punya akun?<a href="<?=site_url('akses/indexRegister')?>">daftar disini</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php form_close() ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?php base_url('assets/js/app.js') ?>" type="module"></script>
</body>

</html>