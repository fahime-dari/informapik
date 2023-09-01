<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logiciels</title>
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
        <h1>Logiciels</h1>
        <p>Découvrez notre logiciel "IK-GESTION" conçu pour répondre à tous vos besoins, quels que soient votre domaine et votre niveau d'expertise.<br>
        </p>      
     </div>
</div>
</section>
  <div id="logiciels" >
        <?php
              
            $username="info";
            $password="caribou";
                
            $dbco=new PDO('mysql:host=localhost;dbname=informapik',$username,$password);


              $req ="SELECT * FROM services_l WHERE id_l =1";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<h1>' .$row['titre_l'].'</h1>';
                }
              } else {
                echo "";
              }  
    
    
        ?>
        <div class="pro-containers">
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =20";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<img src="' .$row['image_l'].'" alt="ik-gestion">';
                }
              } else {
                echo "";
              }  
    
    
        ?>
        <?php 
              
              $req ="SELECT * FROM services_l WHERE id_l =2";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<p>' .$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =3";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<span>' .$row['sous_titre_l'].'</span><br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =6";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =7";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =8";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =9";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
         <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =10";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =11";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =4";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<span>' .$row['sous_titre_l'].'</span><br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =12";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =13";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =14";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =15";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =16";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =5";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<span>' .$row['sous_titre_l'].'</span><br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =17";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =18";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br>';
                }
              } else {
                echo "";
              }  
        ?>
        <?php
              
              $req ="SELECT * FROM services_l WHERE id_l =19";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_l'].'"></i>';
                  echo ''.$row['texte_l'].'<br></p><br>';
                }
              } else {
                echo "";
              }  
        ?>
         </div>
       </div>
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