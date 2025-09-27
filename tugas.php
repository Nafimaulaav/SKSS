<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus Client Side - Personal Website</title>
    <link rel="icon" type="image/png" href="">
</head>
<body>
    <div class="isi-konten">

        <div class="foto-profil">
            <img src="fotoprofil.jpg" alt="Foto Profil" width="200" height="250">
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
                    ["Instagram", "https://www.instagram.com/ishnapp", "Instagram_Glyph_Gradient.png"],
                    ["Linkedin", "https://www.linkedin.com/in/nafi-maula", "Linkedin-logo.png"],
                    ["Github", "https://github.com/Nafimaulaav", "github-mark.png"]
                ];

                foreach ($sosmed as $m) {
                    echo '<div class = "sosmed-item">
                            <a href="' . $m[1] . '" target="blank">
                                <img src="' . $m[2] . '" alt="' . $m[0] . '" width="50" height="50">
                            </a>    
                            <span>' . $m[0] . '</span>
                        </div>';
                }
            ?>
           
        </div>

    </div>

</body>
</html>