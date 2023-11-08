<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "news-project";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

<?php
// Periksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan dari formulir
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Masukkan data ke dalam tabel SQL
    $sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/index.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <title>Tentang Kami</title>
  <body id="home" class="scrollspy">
    <div class="navbar-fixed">
      <nav class="grey darken-4">
        <div class="container">
          <div class="nav-wrapper">
            <a href="http://localhost/NewsSportKepri/" class="brand-logo"> SPORT KEPRI</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
            <li><a href="#home">Home</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#clients">Clients</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#contact">Contact Us</a></li>
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdE6SwS_-EJc-IfhDwj0ooi4hhgtiheAxWQ-96ghEKkE8V7yw/viewform">Feedback</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="#about">About Us</a></li>
      <li><a href="#clients">Clients</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact Us</a></li>
      <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdE6SwS_-EJc-IfhDwj0ooi4hhgtiheAxWQ-96ghEKkE8V7yw/viewform">Feedback</a></li>
    </ul>

    <!-- slider -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/slider/1.png" />
          <!-- random image -->
          <div class="caption center-align">
            <h3>Menampilkan Berita Terbaru</h3>
            <h5 class="light grey-text text-lighten-3">Kami hadir untuk menampilkan berita seputar Kepulauan Riau</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/2.png" />
          <!-- random image -->
          <div class="caption left-align">
            <h3>Menyediakan Kategori yang dibutuhkan pembaca</h3>
            <h5 class="light grey-text text-lighten-3">Kategori yang menarik.</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/3.png" />
          <!-- random image -->
          <div class="caption right-align">
            <h3>Galeri</h3>
            <h5 class="light grey-text text-lighten-3">Foto foto yang menampilkan situasi yang ada di Kepulauan Riau</h5>
          </div>
        </li>
      </ul>
    </div>

    <!-- About Us -->
    <secton class="about scrollspy" id="about"> 
      <div class="container">
        <div class="row">
          <h3 class="center about-us">About Us</h3>
            <h5>NEWS SPORT KEPRI</h5>
            <p>News Sport Kepri adalah situs web berita olahraga yang berfokus pada berita, analisis, dan liputan acara olahraga di Provinsi Kepulauan Riau. Kami berkomitmen untuk memberikan informasi terbaru dan akurat tentang berbagai jenis olahraga yang ada di Kepri, termasuk sepak bola, bulu tangkis, renang, dan banyak lagi. Tim kami terdiri dari pecinta olahraga yang berdedikasi untuk memberikan liputan terbaik kepada pembaca kami. Kami percaya bahwa olahraga merupakan sarana yang kuat untuk menginspirasi, menghibur, dan menghubungkan orang. Dengan demikian, kami berusaha untuk menghadirkan ceritacerita yang memotivasi dan menghibur pembaca kami.</p>
          </div>
          
          </div>
        </div>
      </div>
    </secton>

    <!-- clients -->
    <div class="parallax-container scrollspy" id="clients">
      <div class="parallax"><img src="img/slider/2.png" /></div>
      <div class="container">
        <h3 class="center black-text">Our Clients</h3>
        <div class="container clients">
          <div class="row">
            <div class="col m4 s12 center">
              <img src="img/clients/polibatam.png" alt="gambar tidak terdeteksi" />
            </div>
            <div class="col m4 s12 center">
              <img src="img/clients/polibatam.png" alt="gambar tidak terdeteksi" />
            </div>
            <div class="col m4 s12 center">
              <img src="img/clients/polibatam.png" alt="gambar tidak terdeteksi" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- services -->
    <section id="services" class="services grey lighten-3 scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="center">Our Services</h3>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">laptop</i>
              <h5>Berita Olahraga Terkini</h5>
              <p>Kami menyediakan berita olahraga terkini dan terupdate secara berkala. Anda akan selalu mendapatkan informasi terbaru tentang pertandingan, pemain, dan berbagai olahraga lainnya di Kepulauan Riau.</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">note</i>
              <h5>Analisis Mendalam</h5>
              <p>Kami juga memberikan analisis mendalam tentang berbagai peristiwa olahraga. Tim kami mengulas permainan, strategi, dan statistik untuk membantu Anda memahami lebih dalam tentang olahraga yang Anda cintai.</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">camera_roll</i>
              <h5>Wawancara Ekslusif</h5>
              <p>Kami melakukan wawancara eksklusif dengan atlet, pelatih, dan tokoh-tokoh olahraga Kepri. Anda dapat membaca pandangan mereka langsung dan mengenal lebih dekat para pahlawan olahraga daerah.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact us -->
    <section id="contact" class="contact grey lighten-3 scrollspy">
      <div class="container">
        <h3 class="center">Contact Us</h3>
        <div class="row">
          <div class="col m5 s12">
            <div class="card-panel grey darken-4 white-text center">
              <i class="material-icons small">email</i>
              <p> admin@sportkeprinews.com</p>
            </div>
            <ul class="collection with-header">
              <li class="collection-header"><h5>Tentang Kami</h5></li>
              <li class="collection-item">Yudi Hidayatul Rahmat</li>
              <li class="collection-item">Putri Silaban</li>
              <li class="collection-item">Amirullah</li>
              <li class="collection-item">Adela Puspa</li>
            </ul>
          </div>
          <div class="col m7 s12">
          <form action="" method="post">
          <div class="card-panel">
          <h5>Please Fill Out This Form</h5>
          <div class="input-field">
          <input type="text" name="name" id="name" required class="validate" />
          <label for="name">Name</label>
        </div>
          <div class="input-field">
          <input type="email" name="email" id="email" required class="validate" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" title="Enter a valid email address" />
          <label for="email">Email</label>
        </div>
          <div class="input-field">
          <input type="tel" name="phone" id="phone" required class="validate" pattern="[0-9]+" title="Enter a valid phone number (numeric characters only)" />
          <label for="phone">Phone Number</label>
        </div>
          <div class="input-field">
          <textarea name="message" id="message" class="materialize-textarea" required></textarea>
          <label for="message">Message</label>
        </div>
          <button type="submit" class="btn grey darken-2 white-text">Send</button>
        </div>
        </form>
        </div>
        </div>
      </div>
    </section>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="center grey darken-4 white-text footer">
      <p>PBL-IF-55 | Copyright 2023 All rights reserved</p>
    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
