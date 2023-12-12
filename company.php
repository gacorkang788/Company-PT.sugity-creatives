<?php
include 'config.php';

if(isset($_POST['post'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO komentar (id, name, email, message) VALUES (NULL, '$name',' $email', ' $message' )";

    if ($conn->query($sql) === TRUE){
        echo "";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT.Sugity Creatives</title>
    <link rel="icon" href="SUGITY.jpg" type="image/jpeg">
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Get all the navigation links
            var navLinks = document.querySelectorAll('.navbar-nav a.nav-link');
    
            // Add click event listener to each link
            navLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    // Prevent the default behavior of the link
                    event.preventDefault();
    
                    // Remove the 'active' class from all links
                    navLinks.forEach(function (navLink) {
                        navLink.classList.remove('active');
                    });
    
                    // Add the 'active' class to the clicked link
                    link.classList.add('active');
    
                    // Get the target section ID from the link's href attribute
                    var targetId = link.getAttribute('href').substring(1);
    
                    // Scroll to the target section
                    var targetSection = document.getElementById(targetId);
                    targetSection.scrollIntoView({ behavior: 'smooth' });
                });
            });
        });
    </script>
    
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="sugity/SUGITY.jpg" alt="" width="45" height="33"
                    class="d-inline-block aligin-text-top">
            </a>
            <a class="navbar-brand" href="company.php">PT.Sugity Creatives</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#produk">PRODUK</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#LOCATION">LOCATION</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          PRODUK
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="bigpart.html">Big Part</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="mediumpart.html">Medium Part</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="smallpart.html">Small Part</a></li>
                        </ul>
                        <li class="nav-item"><a class="nav-link" href="#FEEDBACK">FEEDBACK</a></li>
                      </li>
                </ul>
            </div>
        </div>
    </nav>


        <!-- <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner" id="home">
            <div class="carousel-item active">
                <img src="sugity/sugity-scaled.webp" class="d-block img-fluid w-100    " alt="...">
            </div>
        </div>

        <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a> -->
 

   <!-- about -->
<section class="about" id="about" style="width: 100%;">
    <div class="container">
        <h3 class="text-center">ABOUT</h3>
        <div class="row">
            <div class="col-md-6">
                <p style="text-align: justify;">Sugity Creatives adalah produsen komponen otomotif terkemuka. Dengan warisan keunggulan otomotif, model bisnis tiga pilar kami meliputi Konversi Kendaraan, Suku Cadang, dan Bisnis Cetakan. Sebagai anak perusahaan terkemuka TOYOTA AUTO BODY JAPAN, yang terkenal dengan pembuatan kendaraan ikonik, komitmen kami terhadap inovasi terjalin dalam warisan kami. Didorong oleh misi yang mendalam, kami dengan cermat menciptakan produk yang tidak hanya memenuhi tetapi juga melampaui harapan pelanggan. Bergabunglah bersama kami dalam perjalanan di mana presisi bertemu dengan semangat, membentuk masa depan kreativitas otomotif dengan integritas dan inovasi.</p>
            </div>
            <div class="col-md-6" style="text-align: justify;">
                <p style="text-align: justify;">Visi : menjadi perusahaan injeksi plastik terbesar dan bermutu bagi customer produsen mobil</p>
                <p style="text-align: justify;">Misi : memperkaya kehidupan bermasyarakat melalui kendaraan bermotor yang memenuhi harapan klien dan sekaligus adaptif terhadap permasalahan lingkungan hidup.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Spacing added here -->
    <div style="margin-bottom: 50px;"></div>

    <!-- LOCATION -->
    <section class="LOCATION" id="LOCATION">
        <div class="container">
            <h3>LOCATION</h3>
            <div class="row">
                <div class="col-12">
                    <div class="contact-form">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7034339765946!2d107.07899677418261!3d-6.302642393686517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6990171da13103%3A0x79ddfe115a7491d0!2sPT%20Sugity%20Creatives!5e0!3m2!1sid!2sid!4v1699936175452!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback -->
    <section class="FEEDBACK" id="FEEDBACK">
        <div class="container">
            <h3>FEEDBACK</h3>
            <div class="row">
                <div class="col-12">
                    <div class="contact-form">
                        <form method="post" action="company.php">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                            <textarea class="form-control" id="message" name="message" placeholder="Your Message"></textarea>
                            <button type="submit" name="post" class="btn btn-primary">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Comments Section -->
<section class="COMMENTS" id="COMMENTS">
    <div class="container">
        <h3>COMMENTS</h3>
        <?php
        // Retrieve comments from the database and display them
        $result = $conn->query("SELECT * FROM komentar");
        while ($row = $result->fetch_assoc()) {
            echo '<div class="comment">';
            echo '<strong>' . htmlspecialchars($row['name']) . '</strong>';
            echo "<p id=message>" . htmlspecialchars($row['message']) . "</p>";
            echo '</div>';
        }
        ?>
    </div>
</section>

    <!-- footer -->
    <footer>
        <div class="footer_info">
            <div class="footer_width about col-md-4">
                <h2>About</h2>
                <p>
                    PT Sugity Creatives (SC) adalah perusahaan manufactur yang bergerak dalam
                cetakan plastik. Merupakan salah satu perusahaan dari perusahaan Toyota Auto
                Body dan tidak hanya memproduksi untuk kelompok Toyota melainkan ke yang
                lainnya seperti HINO.
                </p>
                <div class="social-media">
                    <ul>
                        <li><a href="https://www.instagram.com/ptsugitycreatives/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <ul>
                        <li><a href="https://wa.me/+6285719607976"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_width link col-md-4">
                <h2>Quick Link</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#">PRODUK</a></li>
                    <li><a href="#LOCATION">LOCATION</a></li>
                    <li><a href="#FEEDBACK">Feedback</a></li>
                </ul>
            </div>
            <div class="footer_width contact col-md-4">
                <h2>contact</h2>
                <ul>
                    <li>
                        <span><i class="fa fa-map-marker-alt"></i></span>
                        <p>
                            Kawasan industri MM2100, cibitung
                        </p>
                    </li>
                    <li>
                        <span><i class="fa fa-regular fa-envelope-open"></i></span>
                        <a href="mailto:fatirasya13@gmail.com">fatirasya13@gmail.com</a>
                    </li>
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        <a href="#">0833 1393 8372 6754</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copy-right">
        @  COPYRIGH 2023 PT.Sugity Creatives(SC)
    </div>
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="sensor.js">
    
</script>
</body>
</html>