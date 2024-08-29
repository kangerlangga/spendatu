<!DOCTYPE html>
<html lang="en">
<head>
    <!-- PRECONNECT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://unpkg.com">
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="dns-prefetch" href="https://www.w3.org">
    <link rel="preconnect" href="https://www.w3.org">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- SIMPLE META -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="id-ID">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta name="google" content="notranslate">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="SMPN 2 Tulangan">
    <meta name="language" content="id">
    <meta name="geo.country" content="id">
    <meta name="geo.placename" content="Indonesia">
    <meta name="robots" content="all,index,follow">
	<meta NAME="Distribution" CONTENT="Global">
	<meta NAME="Rating" CONTENT="General">
	<meta name="google-site-verification" content="PQ4dLR4Hgn4FSuZ7UKdgkIz-9MJ5kBoTT3RqLmuZ6l8" />

    <!-- WEBSITE META -->
    <title>{{ $judul }} | SMPN 2 Tulangan</title>
    <meta name="keywords" content="SMPN 2 TULANGAN, Spendatu">
    <meta name="description" content="SMP Negeri 2 Tulangan Sidoarjo adalah sebuah sekolah menengah pertama negeri yang terletak di Kecamatan Tulangan, Kabupaten Sidoarjo, Jawa Timur, Indonesia.">
    <link rel="icon" type="image/png" href="{{  url('') }}/img/logo.png">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Source Sweet Alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

</head>
<body>
    <div id="preloader"></div>
    <style>
    #preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    overflow: hidden;
    background: #fff;
    }
    #preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #05C05B;
    border-top-color: #e7e4fe;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    animation: animate-preloader 1s linear infinite;
    }
    @keyframes animate-preloader {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    }
    </style>
    <main class="container my-5">
    <div class="row">
        <section class="col-md-6 my-5 offset-md-3">

        <div class="card shadow p-5">
        <form method="POST" action="{{ route('login.verifikasi') }}" enctype="multipart/form-data">
            @csrf

            <h3 class="text-center mb-4" style="font-family: Roboto;">Login Admin</h3>
            <hr>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan Email" value="{{ old('email') }}" class="form-control" required>
            </div>

            <label for="Password">Password</label>
            <div class="input-group mb-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" aria-label="Enter Password" aria-describedby="basic-addon2" required>
                <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><i class="fa fa-eye" aria-hidden="true"></i>
                </span>
                </div>
            </div>

            <button class="btn btn-block btn-success rounded-pill mt-3 pt-2 pb-2 fw-bold" style="font-size: medium;"><b>LOGIN</b></button>

            <p class="mt-3">Kembali ke Beranda? <a href="{{ url('') }}">Klik Disini</a></p>

        </form>
        </div>
        </section>
    </div>
    </main>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        main .card {
        background-color: #fff;
        }

        body {
        background: #05C05B;
        color: black;
        }

        h3 {
        font-family: Times New Roman;
        font-weight: bold;
        }
        hr {
        border-bottom: solid black 1px;
        }

        .btn {
        background: #05C05B;
        }

        .btn:hover {
        background: #009143;
        }

        input {
        background-color: #fff !important;
        color: black !important;
        }

        ::placeholder {
        color: darkslategrey !important;
        }
    </style>
    <script type="text/javascript">
    $(document).ready(function () {
        $("#basic-addon2").click(function () {
            let passwordField = $("#password");
            let passwordFieldAttr = passwordField.attr("type");

            if (passwordFieldAttr == "password") {
            passwordField.attr("type", "text");
            $(this).html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
            } else {
            passwordField.attr("type", "password");
            $(this).html('<i class="fa fa-eye" aria-hidden="true"></i>');
            }
        });
    });

    @error('email')
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal!',
            text: 'Email atau Password Anda Salah!',
            showConfirmButton: false,
            timer: 3000
        })
    @enderror

    @error('password')
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal!',
            text: 'Email atau Password Anda Salah!',
            showConfirmButton: false,
            timer: 3000
        })
    @enderror

</script>
<!-- Template Main JS File -->
<script src="{{  url('') }}/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</body>
</html>
