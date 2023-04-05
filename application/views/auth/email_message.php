<!DOCTYPE html>
<html>
<head>
    <title>Lupa Password - Simatera</title>
    <style>
        body {
            background-color: #000220;
            color: white;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #212429;
            text-align: center;
        }

        .logo {
            max-width: 200px;
            margin: 0 auto;
            padding-bottom: 20px;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .password {
            font-size: 36px;
            font-weight: bold;
            background-color: #121A25;
            padding: 10px;
            color: #fff;
            margin-bottom: 20px;
        }

        .description {
            text-align: justify;
            margin-bottom: 20px;
        }

        .contact {
            font-size: 14px;
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title" style="color: #BFBFBF;">Lupa Password - Simatera</div>
        <div class="description" style="color: #DBDBDB;">
            Semoga Anda dalam keadaan baik. Kami ingin memberitahu Anda mengenai password yang telah Anda lupakan untuk akun Anda di Simatera.
        </div>
        <div class="password" style="color: #67C1F5;"><?= $hasil->password; ?></div>
        <div class="description" style="color: #DBDBDB; font-style: italic;">
            Harap diperhatikan bahwa ini adalah informasi yang sensitif dan harus dijaga kerahasiaannya. Kami menyarankan Anda untuk segera masuk ke akun Anda dan mengganti password dengan yang baru untuk menjaga keamanan akun Anda.
        </div>
        <div class="contact" style="color: #DBDBDB; ">
            Jika Anda memiliki pertanyaan lebih lanjut atau membutuhkan bantuan, jangan ragu untuk menghubungi tim dukungan pelanggan kami di simaterakotabandung@gmail.com.
        </div>
    </div>
</body>
</html>
