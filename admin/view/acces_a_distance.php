  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Accès à distance</title>
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
        <div class="logo">
        <?php
              
            $username="info";
            $password="caribou";
                
            $dbco=new PDO('mysql:host=localhost;dbname=informapik',$username,$password);


              $req ="SELECT * FROM navbar WHERE id_nav =1";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<img src="' .$row['logo_nav'].'"alt="logo-informapik">';
                }
              } else {
                echo "";
              }  
    
    
        ?>
        </div>
        <ul class="nav_link--list">
          <li class="nav-link">
          <?php
              
              $req ="SELECT * FROM navbar WHERE id_nav=2";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<a href="' .$row['lien_nav'].'"class="nav__link--anchor link-hover-effect link-hover-effect-white">';
                  echo ''.$row['texte_nav'].'</a>';
                }
              } else {
                echo "";
              }  
    
    
        ?>
          </li>
        <li class="nav-link">
        <?php
              
              $req ="SELECT * FROM navbar WHERE id_nav=3";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<a href="' .$row['lien_nav'].'"class="nav__link--anchor link-hover-effect link-hover-effect-white">';
                  echo ''.$row['texte_nav'].'</a>';
                }
              } else {
                echo "";
              }  
    
    
        ?>
          </li>
          <li class="nav-link">
          <?php
              
              $req ="SELECT * FROM navbar WHERE id_nav=3";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<a href="' .$row['lien_nav'].'"class="nav__link--anchor link-hover-effect link-hover-effect-white">';
                  echo ''.$row['texte_nav'].'</a>';
                }
              } else {
                echo "";
              }  
    
    
          ?>
        </li>
        <li class="nav-link">
        <?php
              
              $req ="SELECT * FROM navbar WHERE id_nav=3";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<a href="' .$row['lien_nav'].'"class="nav__link--anchor link-hover-effect link-hover-effect-white">';
                  echo ''.$row['texte_nav'].'</a>';
                }
              } else {
                echo "";
              }  
    
    
        ?>
          </li>
          <li class="nav-link">
          <?php
              
              $req ="SELECT * FROM navbar WHERE id_nav=3";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<a href="' .$row['lien_nav'].'"class="nav__link--anchor link-hover-effect link-hover-effect-white">';
                  echo ''.$row['texte_nav'].'</a>';
                }
              } else {
                echo "";
              }  
    
    
        ?>
          </li>
          <li class="nav-link">
          <?php
              
              $req ="SELECT * FROM navbar WHERE id_nav=3";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<a href="' .$row['lien_nav'].'"class="nav__link--anchor nav_link--anchor-primary">';
                  echo ''.$row['texte_nav'].'</a>';
                }
              } else {
                echo "";
              }  
          ?>
              <!--<a href="/code/view/saisie_contact.php" class="nav__link--anchor nav_link--anchor-primary">CONTACT/RDV →</a>-->
          </li>
      </ul>
      </nav>
      <!--Mainpage-->
      </section>
      <div class="mainpage-text"> 
            <div>
                <h1>Accès à distance</h1>
                <p>Grâce à notre solution d'accès à distance, vous pouvez accéder à vos fichiers et applications depuis n'importe quel endroit, en toute sécurité.<br>
                </p>      
            </div>
        </div>
      </section>
      <div id="logiciels" >
      </section>
  <div id="logiciels" >
        <?php
              
            $username="info";
            $password="caribou";
                
            $dbco=new PDO('mysql:host=localhost;dbname=informapik',$username,$password);


              $req ="SELECT * FROM services_ad WHERE id_ad =1";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<h1>' .$row['titre_ad'].'</h1>';
                }
              } else {
                echo "";
              }  
    
    
        ?>
        <div class="pro-containers">
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad=2";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<img src="' .$row['image_ad'].'" alt="any-desk">';
                }
              } else {
                echo "";
              }  
    
    
        ?>
        <?php 
              
              $req ="SELECT * FROM services_ad WHERE id_ad =3";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<p>' .$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =4";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<span>' .$row['sous_titre_ad'].'</span><br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =7";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =8";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =9";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =10";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
         <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =11";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad=12";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =5";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<span>' .$row['sous_titre_ad'].'</span><br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =12";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =13";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =14";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =6";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<span>' .$row['sous_titre_ad'].'</span><br>';
                }
              } else {
                echo "";
              }  
    
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =15";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =16";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br>';
                }
              } else {
                echo "";
              }  
        ?>
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =17";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<i class="' .$row['icone_ad'].'"></i>';
                  echo ''.$row['texte_ad'].'<br></p><br>';
                }
              } else {
                echo "";
              }  
        ?>
        </div>
        <div class="btn">
        <?php
              
              $req ="SELECT * FROM services_ad WHERE id_ad =18";
              $res = $dbco->query($req);
    
              if ($res->rowCount() > 0) {
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                  echo '<a href="' .$row['lien_ad'].'"target="_blank">';
                  echo ''.$row['texte_ad'].'</a>';
                }
              } else {
                echo "";
              }  
        ?>
        
         </div>
       </div>
        <!--<h1>Any Desk</h1>
        <div class="pro-containers">
            <img src="/code/images/th.jpg" alt="any-desk">
            <p>Any Desk est un logiciel de bureau à distance qui permet aux utilisateurs d'accéder et de contrôler à distance un ordinateur depuis un autre appareil.<br>
                <span>CONNEXION À DISTANCE SÉCURISÉE :</span><br>
              
                <i class="fa-solid fa-arrow-right fa-2xs"></i>Authentification sécurisée <br>
                <i class="fa-solid fa-arrow-right fa-2xs"></i>Voir et contrôler l'écran distant<br>
                <i class="fa-solid fa-arrow-right fa-2xs"></i>Contrôle du clavier, de la souris <br>
                <i class="fa-solid fa-arrow-right fa-2xs"></i>Transfert de fichiers, partage d'écran<br>
                <i class="fa-solid fa-arrow-right fa-2xs"></i>Possibilité d'enregistrement de session<br>
                
                
                <span>INTUITIF :</span><br>
                <i class="fa-solid fa-arrow-right fa-2xs"></i>Intefrace facile d'utilisation<br>
                <i class="fa-solid fa-arrow-right fa-2xs"></i>Connexion simples et rapides<br>
                <i class="fa-solid fa-arrow-right fa-2xs"></i>Performances fluides et lantences minimisées<br>
                
                <span>MULTI-PLATEFORME:</span><br>
                <i class="fa-solid fa-arrow-right fa-2xs"></i>Comptabilité entre Windows, macOS, Linux, Android et iOS<br>
                <i class="fa-solid fa-arrow-right fa-2xs"></i>L'accès est garanti depuis n'importe quel support (ordinateur portable et fixe, smartphone et tablette)<br>
                <i class="fa-solid fa-arrow-right fa-2xs"></i>Vous bénéficiez d'un accès sécurisé à votre base de donnés</p><br>
        </div>
        <div class="btn">
          <a href="/code/AnyDesk.exe" target="_blank" >Télécharger AnyDesk</a>
        </div>
      </div>-->
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