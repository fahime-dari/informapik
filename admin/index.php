<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/code/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/ec5ce09376.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--Barre Coordonnées et réseaux sociaux
    <div class="header-topbar">
		<div class="octf-area-wrap">
			<div class="container">	
                contact info 
		        <ul class="topbar-info clearfix">
                    <li>
                        <i class="fas fa-phone-alt"></i>06 60 57 64 10
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>Lun - Vendredi : 9H00 - 12H00 / 14H00 - 18H00
                    </li>
                    <li>
                    </li>
		        </ul>
		         contact info close 
				  social icons 
                <ul class="social-list">
                    <li>
                      <a href="https://fr.linkedin.com/company/informapik">
                        <i class="fa-brands fa-linkedin"></i>            
                      </a>
                    </li>
                    <li>
                       <a href="https://www.facebook.com/informapik/">
                          <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                </ul>
				</div>
           
		</div>
	</div> -->
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
        <a href="/code/index.php" class="nav__link--anchor link-hover-effect link-hover-effect-white">Accueil</a>
      </li>
      <li class="nav-link">
        <a href="/code/index.php#services" class="nav__link--anchor link-hover-effect link-hover-effect-white">Nos services</a>
      </li>
      <li class="nav-link">
        <a href="/code/view/professionnels.php" class="nav__link--anchor link-hover-effect link-hover-effect-white">Professionnels</a>
      </li>
      <li class="nav-link">
        <a href="/code/view/logiciels.php" class="nav__link--anchor link-hover-effect link-hover-effect-white">Logiciels</a>
      </li>
      <li class="nav-link">
        <a href="/code/view/acces_a_distance.php" class="nav__link--anchor link-hover-effect link-hover-effect-white">Accès à distance</a>
      </li>
      <li class="nav-link">
        <a href="/code/view/saisie_contact.php" class="nav__link--anchor nav_link--anchor-primary">CONTACT/RDV →</a>
      </li>
    </ul>
  </nav>

    </section>
        <div class="mainpage-text"> 
            <div>
            <?php 

            $username="info";
            $password="caribou";
                
            $dbco=new PDO('mysql:host=localhost;dbname=informapik',$username,$password);

            $req ="SELECT * FROM informapik WHERE id_description = 1";
            $res = $dbco->query($req);

            if ($res->rowCount() > 0) {
              while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                echo '<h1>' . $row['titre_description'] . '</h1>';
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
            <h1>Nos services</h1>
            <div class="card-container">
                <div class="column">
                    <div class="card">
                        <i class="fa-solid fa-handshake"></i>
                        <?php

                          $req ="SELECT * FROM services WHERE id_services = 1";
                          $res = $dbco->query($req);

                          if ($res->rowCount() > 0) {
                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                              echo "<h2>" .$row['titre_services']. "</h2>";
                              echo "<p>" .$row['texte_services']."</p>";
                            }
                          } else {
                            echo "Aucun enregistrement.";
                          }  
                        ?>
                        <a href="/code/view/audit_et_conseil.php">En savoir plus</a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <i class=" fa-solid fa-globe"></i>
                        <?php

                          $req ="SELECT * FROM services WHERE id_services = 2";
                          $res = $dbco->query($req);

                          if ($res->rowCount() > 0) {
                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                              echo "<h2>" .$row['titre_services']. "</h2>";
                              echo "<p>" .$row['texte_services']."</p>";
                            }
                          } else {
                            echo "";
                          }  
                          ?>
                        <a href="/code/view/internet.php">En savoir plus</a>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <i class="fa-solid fa-network-wired"></i>
                        <?php

                          $req ="SELECT * FROM services WHERE id_services = 3";
                          $res = $dbco->query($req);

                          if ($res->rowCount() > 0) {
                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                              echo "<h2>" .$row['titre_services']. "</h2>";
                              echo "<p>" .$row['texte_services']."</p>";
                            }
                          } else {
                            echo "";
                          }  
                          ?>
                        <a href="/code/view/reseau.php">En savoir plus</a>
                    </div>
                </div>
                 <div class="column">
                    <div class="card">
                        <i class="fa-solid fa-file"></i>
                        <?php

                          $req ="SELECT * FROM services WHERE id_services = 4";
                          $res = $dbco->query($req);

                          if ($res->rowCount() > 0) {
                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                              echo "<h2>" .$row['titre_services']. "</h2>";
                              echo "<p>" .$row['texte_services']."</p>";
                            }
                          } else {
                            echo "";
                          }  
                          ?>
                        <a href="/code/view/logiciels.php">En savoir plus</a>
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
       <?php 

        $username="info";
        $password="caribou";
            
        $dbco=new PDO('mysql:host=localhost;dbname=informapik',$username,$password);

        $req ="SELECT * FROM footer_a WHERE id_a=1";
        $res = $dbco->query($req);

        if ($res->rowCount() > 0) {
          while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            echo "<h4>" . $row['titre_a'] . "</h4>";
            echo "<p>" .$row['texte_a']."</p>";
          }
        } else {
          echo "Aucun enregistrement.";
        }  

        ?>
      </div>
      <div class="footer-col">
      <?php 

      $username="info";
      $password="caribou";
          
      $dbco=new PDO('mysql:host=localhost;dbname=informapik',$username,$password);

      $req ="SELECT * FROM footer_n WHERE id_n=1";
      $res = $dbco->query($req);

      if ($res->rowCount() > 0) {
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
          echo "<h4>" . $row['titre_n'] . "</h4>";
        }
      } else {
        echo "Aucun enregistrement.";
      }  
      ?>

      <ul>
      <?php
      
      
      $req ="SELECT * FROM footer_n WHERE id_n = 7";
      $res = $dbco->query($req);

      if ($res->rowCount() > 0) {
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
          echo '<li><a href="/code/index.php">' . $row['texte_n'] . '</a></li>';
        }
      } else {
        echo "";
      }  

      $req ="SELECT * FROM footer_n WHERE id_n = 2";
      $res = $dbco->query($req);

      if ($res->rowCount() > 0) {
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
          echo '<li><a href="/code/index.php#services">' . $row['texte_n'] . '</a></li>';
        }
      } else {
        echo "";
      }  

      
      $req ="SELECT * FROM footer_n WHERE id_n = 3";
      $res = $dbco->query($req);

      if ($res->rowCount() > 0) {
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
          echo '<li><a href="/code/index.php">' .$row['texte_n'].'</a></li>';
        }
      } else {
        echo "";
      }  


      
      $req ="SELECT * FROM footer_n WHERE id_n =4";
      $res = $dbco->query($req);

      if ($res->rowCount() > 0) {
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
          echo '<li><a href="/code/index.php">' .$row['texte_n'].'</a></li>';
        }
      } else {
        echo "";
      }  


      
      $req ="SELECT * FROM footer_n WHERE id_n = 5";
      $res = $dbco->query($req);

      if ($res->rowCount() > 0) {
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
          echo '<li><a href="/code/index.php">' .$row['texte_n'].'</a></li>';
        }
      } else {
        echo "";
      }  


      ?> 
      <!-- <h4>Navigation</h4> 
        <ul>
          <li><a href="/code/index.php">Accueil</a></li>
          <li><a href="/code/index.php#services">Nos services</a></li>
          <li><a href="/code/view/professionnels.php">Professionnels</a></li>
          <li><a href="/code/view/logiciels.php">Logiciels</a></li>
          <li><a href="/code/view/acces_a_distance.php">Accès à distance</a></li>      
        </ul>-->
      </div>
      <div class="footer-col">
        
        <?php
              
              $req ="SELECT * FROM footer_c WHERE id_c =1";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<h4>' .$row['titre_c'].'</h4>';
                }
              } else {
                echo "";
              }  
    
    
        ?>
        <ul>
        <?php
              
              $req ="SELECT * FROM footer_c WHERE id_c =2";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<li><a href="'.$row['lien_c'].'"class="nav__link--anchor nav_link--anchor-primary">'.$row['texte_c'].'</a></li>';
                }
              } else {
                echo "";
              }  
    
    
          ?> 
        <?php
              
          $req ="SELECT * FROM footer_c WHERE id_c =3";
          $res = $dbco->query($req);
          if ($res->rowCount() > 0) {
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
              echo '<li><a href='.$row['lien_c'].'><i class="'.$row['logo_c'].'"></i>'.$row['texte_c'].'</a></li>';
            }
          } else {
            echo "";
          }  


      ?> 
      <?php
              
          $req ="SELECT * FROM footer_c WHERE id_c =4";
          $res = $dbco->query($req);
          if ($res->rowCount() > 0) {
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
              echo '<li><a href='.$row['lien_c'].'><i class="'.$row['logo_c'].'"></i>'.$row['texte_c'].'</a></li>';
            }
          } else {
            echo "";
          }  



      ?> 
        <?php
              
          $req ="SELECT * FROM footer_c WHERE id_c =5";
          $res = $dbco->query($req);
          if ($res->rowCount() > 0) {
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
              echo '<li><a href='.$row['lien_c'].'><i class="'.$row['logo_c'].'"></i>'.$row['texte_c'].'</a></li>';
            }
          } else {
            echo "";
          }  
  


      ?> 
      </ul>
      </div>
      <!-- <h4>Contact</h4>
        <ul>
          <li><a href="/code/view/saisie_contact.php" class="nav__link--anchor nav_link--anchor-primary">CONTACT / RDV</a></li>
          <li><a href="https://goo.gl/maps/N6tuvSDRnmK5Umy37"><i class="fa-solid fa-map-location-dot fa-lg"></i>73 Rue de Cernay, 51100 Reims</a></li>
          <li><a href="tel:0326487662"><i class="fa-solid fa-phone fa-lg"></i>03 26 48 76 62</a></li>
          <li><a href="mailto:contact@informapik.fr"><i class="fa-solid fa-envelope fa-lg"></i>contact@informapik.fr</a></li>
        </ul>
      </div>-->
      <div class="footer-col">
      <?php
              
              $req ="SELECT * FROM footer_rs WHERE id_rs =1";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<h4>' .$row['titre_rs'].'</h4>';
                }
              } else {
                echo "";
              }  
    
    
        ?>
         <div class="social-links">
      <?php
              
              $req ="SELECT * FROM footer_rs WHERE id_rs =2";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<a href="' .$row['lien_rs'].'">';
                  echo '<i class="' .$row['logo_rs'].'"></i>';
                }
              } else {
                echo "";
              }  
      ?>
      </a>
      <?php
              
              $req ="SELECT * FROM footer_rs WHERE id_rs =3";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<a href="' .$row['lien_rs'].'">';
                  echo '<i class="' .$row['logo_rs'].'"></i>';
                }
              } else {
                echo "";
              }  
    
    
        ?>
      </a>
        </div>
      </div>
    </div>
      <ul class="footer-mentions">
        <div class="footer-container">
          <li>
      <?php
              
              $req ="SELECT * FROM footer_m WHERE id_m =1";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<span>' .$row['titre_m'].'</span>';
                }
              } else {
                echo "";
              }  
    
    
        ?>
        </li>
          <li>
          <?php
              
              $req ="SELECT * FROM footer_m WHERE id_m =2";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<a href=' .$row['lien_m'].'>';
                  echo '<span>' .$row['titre_m'].'</span>';
                }
              } else {
                echo "";
              }  
    
    
        ?>
          </a>
          <li>
          <?php
              
              $req ="SELECT * FROM footer_m WHERE id_m =3";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<a href=' .$row['lien_m'].'>';
                  echo '<span>' .$row['titre_m'].'</span>';
                }
              } else {
                echo "";
              }  
    
    
          ?>
          </a>
          </li>
        </div>
      </ul>
  </div>
</footer>

  </body>
</html>