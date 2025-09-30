<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus Client Side - Personal Website</title>
    <link rel="icon" type="image/x-icon" href="punyakulogo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>
<body>
    <div class="header">
        <h1>Selamat Datang Di Personal Website Saya</h1>
    </div>

    <div class="isi-konten">
        <div class="foto-profil">
            <img src="myfoto.jpg" alt="Foto Profil">
        </div>

        <div class="informasi-diri">
            <?php 
                $nama = "Nafi Maulau Auditya Vindra";
                $nim = "10209240019";
                $fakultas = "Fakultas Rekayasa Industri";
                $prodi = "Sistem Informasi";
            
                echo "$nama / $nim / $fakultas / $prodi";
            ?>
        </div>

        <div class="sosial-media">
            <?php 
                $sosmed = [
                    ["Faceboook", "https://www.facebook.com/mati.maula", "Facebook_Logo_Primary.png"],
                    ["Instagram", "https://www.instagram.com/ishnapp", "ig.png"],
                    ["Linkedin", "https://www.linkedin.com/in/nafi-maula", "linkedine.png"],
                    ["Github", "https://github.com/Nafimaulaav", "github-mark.png"]
                ];

                foreach ($sosmed as $m) {
                    echo '<div class = "sosmed-item">
                            <a href="' . $m[1] . '" target="blank" class="lingkaran">
                                <img src="' . $m[2] . '" alt="' . $m[0] . '">
                            </a>    
                            <span>' . $m[0] . '</span>
                        </div>';
                }
            ?>
        </div>
    </div>

</body>
<footer>
    <div class="footerd">
        <?php
            date_default_timezone_set("Asia/Jakarta");
            echo "Waktu Sekarang : " . date("H:i:s d-m-Y")."<br>"; ;
            echo "Dibuat oleh Nafi Maulau Auditya Vindra";
        ?>
    </div>
</footer>
</html>