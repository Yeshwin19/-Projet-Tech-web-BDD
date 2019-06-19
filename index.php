<?php 
// Redirige vers la page de connexion si on est pas connecté
session_start();

if($_SESSION['id_user'] != 1) 
{
header("Location: login.php");
exit();
}
?>
<!--  Fin redirection -->
<!-- LNK TO SQL -->
<?php
$bdd = new PDO("mysql:host=localhost;dbname=site;charset=utf8", "root", "");
?>
<!-- Fin LINK TO SQL -->
<!-- LINK TO SQL 2 -->
<?php
$mysqli = new mysqli('localhost', 'root', '', 'site');
$mysqli->set_charset("utf8");
?>
<!-- END LINK TO SQL 2 -->
<!-- Aboutme -->
<?php


if (isset($_POST['Submit'])) {  // Récupere la methode $_POST
    $aboutme = htmlspecialchars($_POST['subject']);   // récupère le textarea du nom de "aboutme"

    
    $req = $bdd->prepare('SELECT * FROM aboutme');  // Selectionne tous de la table 'aboutme'
    $req->execute(array($aboutme)); // exécute la table
    $req_existe = $req->rowCount(); // compte le nombre de colonne
    
    if ($req_existe == 0) {
        $add_text = $bdd->prepare('INSERT INTO aboutme(text) VALUES(?)');
        $add_text->execute(array($aboutme)); //execute table
        
    } else {
        $update_aboutme = $bdd->prepare('UPDATE aboutme SET text = ?');
        $update_aboutme->execute(array($aboutme)); // mise à jour de la table
    }
    
}

?>
<!-- Fin aboutme -->
<!-- Services -->
<?php


if (isset($_POST['Submit2'])) {
    $services = $_POST['subject2'];
    $webservice = $_POST['subject_ok'];
    $webdesign = $_POST['subject_KO'];

    
    $req = $bdd->prepare('SELECT * FROM services');
    $req->execute(array($services, $webdesign, $webservice));
    $req_existe = $req->rowCount();
    
    if ($req_existe == 0) {
        $add_text = $bdd->prepare('INSERT INTO services(text, webservice, webdesign) VALUES(?,?,?)');
        $add_text->execute(array($services, $webdesign, $webservice));
        
    } else {
        $update_services = $bdd->prepare('UPDATE services, webservice, webdesign SET text = ?, webdesign = ?, webservice = ?');
        $update_services->execute(array($services, $webdesign, $webservice));
    }
    
}

?>

<!-- Fin Services -->
<!-- Portfolio -->

<?php


if (isset($_POST['Submit3'])) {
    $portfolio = $_POST['subject2'];
    $web = $_POST['port'];
    $design = $_POST['folio'];
      
    $req = $bdd->prepare('SELECT * FROM portfolio');
    $req->execute(array($portfolio, $web, $design));
    $req_existe = $req->rowCount();
    
    if ($req_existe == 0) {
        $add_text = $bdd->prepare('INSERT INTO portfolio(text, web, design) VALUES(?,?,?)');
        $add_text->execute(array($portfolio, $web, $design));
        
    } else {
        $update_portfolio = $bdd->prepare('UPDATE portfolio, web, design SET text = ?, web = ?, design = ?');
        $update_portfolio->execute(array($portfolio,$web, $design));
    }
    
}

?>

<?php
  if (isset($_POST['Submit4'])) {
    $experience = $_POST['subject2'];
    $weby = $_POST['exp'];
    $designb = $_POST['erience'];

    
    $req = $bdd->prepare('SELECT * FROM experience');
    $req->execute(array($experience, $weby, $designb));
    $req_existe = $req->rowCount();
    
    if ($req_existe == 0) {
        $add_text = $bdd->prepare('INSERT INTO experience(text, exp, erience) VALUES(?,?,?)');
        $add_text->execute(array($experience, $weby, $designb));
        
    } else {
        $update_experience = $bdd->prepare('UPDATE experience, exp, erience SET text = ?, exp = ?, erience = ?');
        $update_experience->execute(array($experience, $weby, $designb));
    }
    
}

?>
<!-- Fin Portfolio -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="images/icons/favicon.ico">
    <link rel="stylesheet" href="Cascading Style Sheet/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animated.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 



    <title>YRB | Admin</title>
  </head>
  <body style="padding-bottom: 200%;">
    <div id="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
              <a class="navbar-brand navnav" href="#">YRB | Admin</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto navnav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-briefcase"></i> Update CV <span class="sr-only">(current)</span></a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="profile.php"><i class="fas fa-user"></i> Profile</a>
                  </li>

                  <form action="includes/logout.php" method="POST">
                  <li class="nav-item">
                    <button type="submit">
                     Logout</button>
                  </li>
                </ul>
                </form>
            
                
              </div>
        </nav>

               
              <div class="col-md-9 contmd">
                <h1><i class="fas fa-tachometer-alt"></i> Dashboard </h1>
                <hr class="hr">
              </div>
            <form method="POST">            
              <div id="wrapperr">
                <div id="left">Update About Me
                <div>
                  <form method="POST">
                  <textarea name="subject" id="subject" cols="70" rows="20"></textarea>
                      <input type="submit" name="Submit" data-aos="fade-right">
                  </form>
                </div>
                </div>
              </div>
              </form>

              <form method="POST">
              <div id="wrapperr">
                <div id="left">Update Services
                <div>
                  
                  <textarea name="subject2" id="subject" cols="70" rows="5"></textarea>
                  <textarea name="subject_ok" id="subject" cols="70" rows="5"></textarea>
                  <textarea name="subject_KO" id="subject" cols="70" rows="5"></textarea>
                      <input type="submit" name="Submit2" data-aos="fade-right">
                
                </div>
                </div>
              </div>
              </form>

              <form method="POST">
              <div id="wrapperr">
                <div id="left">Update Portfolio
                <div>
                  <form method="POST">
                  <textarea name="subject2" id="subject" cols="70" rows="5"></textarea>
                  <textarea name="port" id="subject" cols="70" rows="5"></textarea>
                  <textarea name="folio" id="subject" cols="70" rows="5"></textarea>

                      <input type="submit" name="Submit3" data-aos="fade-right">
                  </form>
                </div>
                </div>
              </div>
              </form>

              <form method="POST">
              <div id="wrapperr">
                <div id="left">Update Experience
                <div>
                  <form method="POST">
                  <textarea name="subject2" id="subject" cols="70" rows="5"></textarea>
                  <textarea name="exp" id="subject" cols="70" rows="5"></textarea>
                  <textarea name="erience" id="subject" cols="70" rows="5"></textarea>

                      <input type="submit" name="Submit4" data-aos="fade-right">
                  </form>
                </div>
                </div>
              </div>
              </form>

              <form method="POST">
              <div id="wrapperr">
                <div id="left">Email Received
                  <div style="width:550px;height:600px;border:1px solid #000; margin-bottom: 5px;">
                  <?php

                  $contact = $bdd->prepare('SELECT * FROM contact');
                  $contact->execute();
                  while ($email = $contact->fetch()) {
                    echo '<p>'.$email['name'].' // '.$email['email'].' // '.$email['subject'].'</p>
                          
                    <strong>------------------------------------------------------------------------------------------------</strong>';
                  }         

                  ?>
                  </div>
                </div>
              </div>
              </form>

              </div>  
              </div>
                  <footer class="text-center"> Copyright &copy; YRB 2019</footer>
    </div>      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
    <script>tinymce.init({forced_root_block : "<p></p><em></em><strong></strong><span></span>",selector:'textarea'});</script>

  </body>
</html>