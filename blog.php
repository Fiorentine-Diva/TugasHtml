<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Tugas Web</title>
       
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <!--body-->
        <header class="header">
       
            <i class='bx bx-menu' id="menu-icon"></i>
            <nav class="navbar">
                <a href="#home" class="active">HOME</a>
                <a href="#blog">BLOG</a>
                <a href="#gallery">GALERY</a>
                <a href="#contact">CONTACT</a>
            </nav>
        </header>
        <section class="home" id="home">
            <div class="home-content">
                <h1 id="typewriter"></h1>
                
                <h3 style="color: #0ef;">Fiorentine Diva 220211060073</h3>
                
             
            </div>
            
        </section>
      
        <section class="services"id="blog">
            <h2 class="heading"><span>Blog</span></h2>
            <div id="blogContainer">
              
                <div class="services-container">
                  <?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
  <div class="services-box">
    <i class='bx bx-code-alt'></i>
    <h3> <?= $row["judul"] ?></h3>
    <p> <?= $row["deskripsi"] ?></p>
    <a href="#" class="btn">Selengkapnya</a>
  </div>
  <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>

 
</div>
            </div>
            <div class="centered">

            </div>


            
        </section>
        
        <section class="portfolio"id="gallery">
            <h2 class="heading">My<span>Gallery</span></h2>
            <div class="portfolio-container" id="galleryContainer">
                
                
                
            </div>
            <div class="centered">
            <a class="btn" onclick="loadGallery()" id="loadGalleryButton" href="#gallery">Muat Gambar</a>
            <a class="btn" onclick="previousGallery()" id="previousGalleryButton" style="display:none" href="#gallery">Sebelumnya</a>
            <a class="btn" onclick="nextGallery()" id="nextGalleryButton" style="display:none" href="#gallery">Selanjutnya</a>
            </div>
            

        </section>
        <section class="contact"id="contact">
            <h2 class="heading">Contact<span>ME!</span></h2>
            <h3 style="font-size: 40px;" class="heading">Email : <span tyle="font-size: 40px;">fiorentdiva@gmail.com</span></h3>
            <h3 style="font-size: 40px;" class="heading">Telepon: <span tyle="font-size: 40px;">085256577122</span></h3>
         

            
        </section>

        <footer class="footer">
            <div class="footer-text">
                <p>&copy; Fiorentine Diva 220211060073</p>
            </div>
            <div class="footer-iconTop">
                <a href="#home"><i class='bx bx-up-arrow-alt' ></i></a>
            </div>
        </footer>

    
    <script src="script.js"></script>
    <script>
        var text = "Tugas Pemrogaraman Web";
        var speed = 100; // milliseconds per character

        function typeWriter() {
            if (text.length > 0) {
                document.getElementById("typewriter").innerHTML += text.charAt(0);
                text = text.substring(1);
                setTimeout(typeWriter, speed);
            }
        }

        typeWriter();
    </script>
        
    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Tugas Web</title>

  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <!--body-->
  <header class="header">

    <i class='bx bx-menu' id="menu-icon"></i>
    <nav class="navbar">
      <a href="#home" class="active">HOME</a>
      <a href="#blog">BLOG</a>
      <a href="#gallery">GALERY</a>
      <a href="#contact">CONTACT</a>
    </nav>
  </header>
  <section class="home" id="home">
    <div class="home-content">
      <h1 id="typewriter"></h1>

      <h3 style="color: #0ef;">Fiorentine Diva 220211060073</h3>


    </div>

  </section>

  <section class="services" id="blog">
    <h2 class="heading"><span>Blog</span></h2>
    <div id="blogContainer">

    </div>
    <div class="centered">
      <a class="btn" onclick="loadBlog()" id="loadBlogButton" href="#blog">Muat Artikel</a>
      <a class="btn" onclick="previousBlog()" id="previousBlogButton" style="display:none" href="#blog">Sebelumnya</a>
      <a class="btn" onclick="nextBlog()" id="nextBlogButton" style="display:none" href="#blog">Selanjutnya</a>
    </div>



  </section>


  <footer class="footer">
    <div class="footer-text">
      <p>&copy; Fiorentine Diva 220211060073</p>
    </div>
    <div class="footer-iconTop">
      <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
  </footer>


  <script src="script.js"></script>
  <script>
    var text = "Tugas Pemrogaraman Web";
    var speed = 100; // milliseconds per character

    function typeWriter() {
      if (text.length > 0) {
        document.getElementById("typewriter").innerHTML += text.charAt(0);
        text = text.substring(1);
        setTimeout(typeWriter, speed);
      }
    }

    typeWriter();
  </script>

</body>

</html>