<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Audit et conseil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/code/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/ec5ce09376.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Barre de navigation -->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
        </label>
        <!--<div class="logo">
        <img src="./images/logo.png" alt="">
        </div>-->
        <ul class="nav_link--list">
        <li class="nav-link">
            <a href="index.html" class="nav__link--anchor link-hover-effect link-hover-effect-white">Accueil</a>
        </li>
        <li class="nav-link">
            <a href="services.html" class="nav__link--anchor link-hover-effect link-hover-effect-white">Nos services</a>
        </li>
        <li class="nav-link">
            <a href="professionnels.html" class="nav__link--anchor link-hover-effect link-hover-effect-white">Professionnels</a>
        </li>
        <li class="nav-link">
            <a href="logiciels.html" class="nav__link--anchor link-hover-effect link-hover-effect-white">Logiciels</a>
        </li>
        <li class="nav-link">
            <a href="acces_a_distance.html" class="nav__link--anchor link-hover-effect link-hover-effect-white">Accès à distance</a>
        </li>
        <li class="nav-link">
            <a href="contact.html" class="nav__link--anchor nav_link--anchor-primary">CONTACT/RDV →</a>
        </li>
    </ul>
    </nav>
    </section>
        <div class="mainpage-text"> 
            <div>
            <div>
            <?php 

            $username="info";
            $password="caribou";
                
            $dbco=new PDO('mysql:host=localhost;dbname=informapik',$username,$password);

            $req ="SELECT * FROM informapik WHERE id_description = 5";
            $res = $dbco->query($req);
            
            if ($res->rowCount() > 0) {
              while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                echo "<h1>" . $row['titre_description'] . "</h1>";
                echo "<p>" .$row['texte_description']."</p>";
              }
            } else {
              echo "Aucun enregistrement.";
            }  

            ?>
            </div>
        </div>
    </section>
    <section class="mainpage">
        <div id="services">
            <div class="card-container">
                <div class="column">
                    <div class="card">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <?php
                          $req ="SELECT * FROM services_a WHERE id_a = 1";
                          $res = $dbco->query($req);
                          
                          if ($res->rowCount() > 0) {
                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                              echo "<h1>" . $row['titre_a'] . "</h1>";
                              echo "<p>" .$row['texte_a']."</p>";
                            }
                          } else {
                            echo "Aucun enregistrement.";
                          }  
                        ?>
                        <a href="au">En savoir plus</a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                       <i class="fa-solid fa-network-wired"></i>
                       <?php
                          $req ="SELECT * FROM services_a WHERE id_a = 2";
                          $res = $dbco->query($req);
                          
                          if ($res->rowCount() > 0) {
                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                              echo "<h1>" . $row['titre_a'] . "</h1>";
                              echo "<p>" .$row['texte_a']."</p>";
                            }
                          } else {
                            echo "Aucun enregistrement.";
                          }  
                        ?>
                        <a href="#">En savoir plus</a>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <i class="fa-solid fa-users"></i>
                        <?php
                          $req ="SELECT * FROM services_a WHERE id_a = 1";
                          $res = $dbco->query($req);
                          
                          if ($res->rowCount() > 0) {
                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                              echo "<h1>" . $row['titre_a'] . "</h1>";
                              echo "<p>" .$row['texte_a']."</p>";
                            }
                          } else {
                            echo "Aucun enregistrement.";
                          }  
                        ?>
                        <a href="#">En savoir plus</a>
                    </div>
                </div>
                 <div class="column">
                    <div class="card">
                        <i class="fa-solid fa-file"></i>
                        <?php
                          $req ="SELECT * FROM services_a WHERE id_a = 1";
                          $res = $dbco->query($req);
                          
                          if ($res->rowCount() > 0) {
                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                              echo "<h1>" . $row['titre_a'] . "</h1>";
                              echo "<p>" .$row['texte_a']."</p>";
                            }
                          } else {
                            echo "Aucun enregistrement.";
                          }  
                        ?>
                        <a href="#">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mainpage-partenaires">
      <h1>Nos partenaires</h1>
    </div>
    <section class="carousel">
      <div class="slider">
        <div class="slide-track">
          <div class="slide">
            <img src="./images/amd.png" height="100"  alt="" />
          </div>
          <div class="slide">
            <img src="./images/asus.png" height="100"  alt="" />
          </div>
          <div class="slide">
            <img src="./images/canon.png" height="100"  alt="" />
          </div>
          <div class="slide">
            <img src="./images/hp.png" height="100"  alt="" />
          </div>
          <div class="slide">
            <img src="./images/intel.webp" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="./images/linux.png"   alt="" />
          </div>
          <div class="slide">
            <img src="./images/logitech.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="./images/microsoft-png-hd-pictures-the-new-microsoft-logo-in-ultra-hd-glory-3650.png" height="100" width="250" alt="" />
          </div>
          
          <div class="slide">
            <img src="./images/amd.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="./images/asus.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="./images/canon.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="./images/hp.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="./images/intel.webp" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="./images/linux.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="./images/logitech.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="./images/microsoft-png-hd-pictures-the-new-microsoft-logo-in-ultra-hd-glory-3650.png" height="100" width="250" alt="" />
          </div>
        </div>
     </div>
    </div>
  </section>
<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col">
        <h4>A propos</h4>
        <p>Informapik située à REIMS.<br>Nous vous accompagnons de A à Z.
      </div>
      <div class="footer-col">
        <h4>Navigation</h4>
        <ul>
          <li><a href="/code/index.php">Accueil</a></li>
          <li><a href="/code/index.php#services">Nos services</a></li>
          <li><a href="/code/view/professionnels.php">Professionnels</a></li>
          <li><a href="/code/view/logiciels.php">Logiciels</a></li>
          <li><a href="/code/view/acces_a_distance.php">Accès à distance</a></li>      
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact</h4>
        <ul>
          <li><a href="/code/view/saisie_contact.php" class="nav__link--anchor nav_link--anchor-primary">CONTACT / RDV</a></li>
          <li><a href="https://goo.gl/maps/N6tuvSDRnmK5Umy37"><i class="fa-solid fa-map-location-dot fa-lg"></i>73 Rue de Cernay, 51100 Reims</a></li>
          <li><a href="tel:0326487662"><i class="fa-solid fa-phone fa-lg"></i>03 26 48 76 62</a></li>
          <li><a href="mailto:contact@informapik.fr"><i class="fa-solid fa-envelope fa-lg"></i>contact@informapik.fr</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Suivez-nous</h4>
        <div class="social-links">
          <a href="https://www.facebook.com/informapik/">
           <i class="fa-brands fa-facebook"></i>
         </a>
          <a href="https://fr.linkedin.com/company/informapik">
           <i class="fa-brands fa-linkedin"></i>               
          </a>
        </div>
      </div>
    </div>
      <ul class="footer-mentions">
        <div class="footer-container">
          <span>&copy; 2023 Informapik</span>
          <li>
            <a href="/code/view/mentions_légales.php">
              <span>Mentions légales</span>
            </a>
          </li>
          <li>
            <a href="/code/view/politique_de_confidentialite.php">
              <span>Politique de confidentialité</span>
            </a>
          </li>
        </div>
      </ul>
  </div>
</footer>
  </body>
</html>