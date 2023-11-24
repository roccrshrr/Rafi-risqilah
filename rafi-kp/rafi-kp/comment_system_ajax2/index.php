<?php 
include("config.php");
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portofolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><span>rafi web designer</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">My Portofolio</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact & Feedback</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <image src="rafi2.jpg"width="500" height="500"></image>
            <div class="home-content">
                <div class="text-1"></div>
                <div class="text-2"></div>
                <div class="text-3">Saya Adalah <span class="typing"></span></div>
                <div class="foto2">   
            </div>
        </div>
    </section>


<style>
    .foto2{
        margin-left: 40%;
        margin-top: 5%;
    }
</style>


    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="foto di about.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Saya Rafi Risqillah dan Saya Adalah <span class="typing-2"></span></div>
                    <p>Saya Rafi risqilah, saya lahir di kota bekasi 23 febuari 2007, riwayat pendidikan sekolah saya,  saya tamatan SDIT TIS, lalu saya berlanjut sekolah di SMPIT TIS, saya melanjutkan sekolah di SMK TELEKOMUNIKASI TELESANDI dengan jurusan RPL dan saya juga designer dalam pembuatan website Bahasa pemrograman yang saya kuasai yaitu DESAIGN, DRAWING, PHP , EDITING SKETCH</p>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My portfolio</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box"  >
                    <img src="1.jpg" alt="" id="button1">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="2.jpg" alt="" id="button2">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="5.jpg" alt="" id="button3">
                    </div>
                </div>
               </div>
            </div>
        </div>


    <div class="containerImg">
        <img src="naruto.jpg" alt="" srcset="">
    </div>


    <div class="containerImg2">
        <img src="naruto-sasuke.jpg" alt="" srcset="">
    </div>

    <div class="containerImg3">
        <img src="akatsuki.jpg" alt="" srcset="">
    </div>


    </section>


    


    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Skill dan pengalaman</div>
                    <p>Skill dan pengalaman Saya saat ini adalah Saya pernah berkerja di suatu perusahaan ternama sebagai web designer.</p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>75%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>34%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JAVASCRIPT</span>
                            <span>45%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact & Feedback me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Yang berhubungan tentang saya.</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nama</div>
                                <div class="sub-title">Rafi Risqillah</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Alamat</div>
                                <div class="sub-title">Bekasi, Indonesia</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">Rfirisqillah@gmail.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Kontak</div>
                                <div class="sub-title">0809070600</div>
                            </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Masukan untuk saya</div>
                    <form action="index3.html">
                        <div class="button-area">
                            <button type="submit">Kirim Masukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- coment section start -->
    <section>
        <div class="max-width">
            <div class="isi">
                <div class="isi2">
                    <p class="text1">Message</p>
                </div>
                <?php
                $sql = "SELECT * FROM msg2";
                $query = mysqli_query( $conn, $sql);
                while( $message = mysqli_fetch_array($query)) {
                    echo "<div class='isi3'>";
                    echo "<p class='text2' id='message'>".$message['name']." | <span class='text9'>".$message['tanggal']."</span></p>";
                    echo "<p class='text3' id='message'>".$message['email']."</p>";
                    echo "<p class='text4' id='message'>".$message['msg']."</p>";
                    echo "</div>";
                };
                ?>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Dibuat Oleh <a href="https://www.rafiporfolio.com">RafiRisqillah</a>

    <script src="script2.js"></script>
    <script>
        // Fungsi untuk mensensor kata-kata kasar
function sensorKataKasar(teks) {
        // Daftar kata-kata kasar yang ingin di-sensor
        var kataKasar = ["ancuk","ancok","ajig","anjay","anjg","anjing","anying","anjir","asu","asyu","babangus","babi","bacol","bacot","bagong","bajingan","balegug","banci","bangke","bangsat","bedebah","bedegong","bego","belegug","beloon","bencong","bloon","blo'on","bodoh","boloho","buduk","budug","celeng","cibai","cibay","cocot","cocote","cok","cokil","colai","colay","coli","colmek","conge","congean","congek","congor","cuk","cukima","cukimai","cukimay","dancok","entot","entotan","ewe","ewean","gelo","genjik","germo","gigolo","goblo","goblog","goblok","hencet","henceut","heunceut","homo","idiot","itil","jancuk","jancok","jablay","jalang","jembut","jiancok","jilmek","jurig","kacung","kampang","kampret","kampungan","kehed","kenthu","kentot","kentu","keparat","kimak","kintil","kirik","kunyuk","kurap","konti","kontol","kopet","koplok","lacur","lebok","lonte","maho","meki","memek","monyet","ndas","ndasmu","ngehe","ngentot","nggateli","nyepong","ngewe","ngocok","pante","pantek","patek","pathek","peju","pejuh","pecun","pecundang","pelacur","pelakor","peler","pepek","puki","pukima","pukimae","pukimak","pukimay","sampah","sepong","sial","sialan","silit","sinting","sontoloyo","tai","taik","tempek","tempik","tete","tetek","tiembokne","titit","toket","tolol","ublag","udik","wingkeng"];
        
        // Loop melalui setiap kata-kata kasar dan ganti dengan karakter '*'
        for (var i = 0; i < kataKasar.length; i++) {
            var regex = new RegExp(kataKasar[i], "gi");
            teks = teks.replace(regex, '***');
        }
        
        return teks;
    }

    // Jalankan fungsi sensor setelah halaman dimuat
    document.addEventListener("DOMContentLoaded", function () {
        var messages = document.querySelectorAll('#message');
        messages.forEach(function (message) {
            // Dapatkan teks pesan
            var teksPesan = message.innerHTML;
            
            // Sensor kata-kata kasar
            var teksSensor = sensorKataKasar(teksPesan);

            // Terapkan teks yang sudah disensor ke dalam elemen
            message.innerHTML = teksSensor;
        });
    });
    </script>
</body>
</html>