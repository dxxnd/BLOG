<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>HI!Tech | Buku Tamu</title>
</head>

<body>

<header>
        <div class="header-container">
            <h1>-= Welcome to HI!Tech =-</h1>
        </div>
    </header>

    <nav>
        <div class="wrapper">
            <div class="logo">Hi!tech</div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="bukutamu.php" class="tbl-biru">Buku Tamu</a></li>
                </ul>
            </div>
        </div>
    </nav>

    

    <body style="background-image: url('putih.jpg')">
        <div class="content-wrapper-bk">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h2 class="text-center mb-4">Buku Tamu</h2>
                        <form class="row g-3" method="post" action="">
                            <div class="col-12">
                                <label for="Nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="Nama" name="Nama" required>
                            </div>
                            <div class="col-12">
                                <label for="TanggalLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="TanggalLahir" name="TanggalLahir" required>
                            </div>
                            <div class="col-12">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="Alamat" name="Alamat" rows="4" cols="50"
                                    required></textarea>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-12">
                                <label for="Pesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="Pesan" name="Pesan" rows="4" cols="50"
                                    required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="php-container">
            <?php
            if (isset($_POST['submit'])) {
                $Nama = $_POST['Nama'];
                $TanggalLahir = $_POST['TanggalLahir'];
                $Alamat = $_POST['Alamat'];
                $email = $_POST['email'];
                $pesan = $_POST['Pesan'];

                echo "<h2>Terimakasih Telah Berkunjung</h2>
                    <p><b>Nama:</b> $Nama</p>
                    <p><b>Tanggal Lahir:</b> $TanggalLahir</p>
                    <p><b>Alamat:</b> $Alamat</p>
                    <p><b>E-mail:</b> $email</p>
                    <p><b>Pesan:</b> $pesan</p>";
            }
            ?>
        </div>

        <div id="copyright">
            <div class="wrapper">
            &copy;<b>Copyright</b> 2023. <b>@_Daniaaq</b> All Rights Reserved.
            </div>
        </div>
        </div>

    </body>

</html>