<!doctype html>
<html lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resume 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style.css" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</head>
<body>
  <div></div>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <h1>Pierre-Bruno Vernhet </h1>
        <br>
        <div class="gauche">
          <h3>A Propos de moi</h3>
        </div>
        <br>
        <div class="experience">
          <p> Area Experience GRETA Stagiaire Developpement WWM October 2022 - Present (2 months) Mende, Occitanie,</p>
          <p> Sophia EPB Chief Manager April 2008 - November 2022 (14 years 8 months)</p>
          <p>Meridien Bora Financial Controller June 2003 - July 2006 (3 years 2 m)</p>
          <p> Ecole Hoteliere de Lausanne EHL · (September 1978 - January 1982)</p>
          <p>Probatoire DESC</p>     
        </div>
        <div class="frame">
          <img src="images/1000_F_283776770_7J036st9aM7ebTUU5HAGUWJqQ2MZKT6I.jpg" alt="But" class="im.center">
        </div>
      </div>

      <div class="col-sm-12 d-flex justify-content-center col-md-2">
        <div class="photos">
          <img src="../brief3/images/tete2.jpg" title="BONJOUR">
        </div>
      </div>
      <div class="col-sm-12 d-flex justify-content-center col-md-5">
        <div class="text-md-center">
          <br>
            <div class="text-secondary"> ACTUELLEMENT</div>
            <br>
            <div class="text-grey">
              <p> 
                <strong>
                <em>  A La recherche d'un stage 
                      pour valider ma formation
                </em>
                </strong>
              </p>
            </div>  
            <br>
            <div class="droite">
              <p>Apres avoir voyagé du nord au sud,
              je me suis retrouvé en France pour
              la reprise d’une auberge restaurant pres d'Avigon.</p>
              <p>Mon expériences dans l’hotellerie de luxe m’ont permis de redévelopper
              cet etablissement à un bon niveau gastronomique.</p>
              <p>J’ai profité de mon retours en Lozere pour effectuer une reconvertion
              professionnelle dans le developpement web et web mobile.
              Par passion et curiosité au greta de Mende.</p>
          <div class="bas">
            Contactez moi :
            <div class="frame2">
              <div class="text-md-center">
                <div class="text-dark">  06.84.54.21.50
                  <div class="text-dark">  04.66.32.66.91
                  <br>     
                  p-bvernhet@yahoo.fr
                </div>
              </div>
            
        <div class="babas">
          <img src="images/evol3.jpg" class="rounded-circle" alt="tuc" style="width:30%; height:50%">
        </div>
      </div>
  </div> 

  <top: 75%></top:>
  <div class="container">
    <form method="post">
      <div class="row">

        <div class="col-md-6">

            <h3>Votre message</h3>

            <div class="form-group">
                <input type="text" name="nom" class="form-control" placeholder="Ton nom *" value="" />
            </div>
            <div class="form-group">
                <input type="text" name="sujet" class="form-control" placeholder="Sujet" value="" />
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Ton email *" value="" />
            </div>
            <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Ton téléphone *" value="" />
            </div>
            <div class="form-group">
                <textarea name="message" class="form-control" placeholder="Ton Message *" style="width: 100%; height: 150px;"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="envoyez" value="Envoyez" />
            </div>
                          
        </div>
      </div>
    </form>
   
   <?php
      if(!empty($_POST["envoyez"]))
      {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];

        $toEmail = "pbvernhet@yahoo.fr";
        $mailHeaders = "From: " . $nom . "<". $email ."\r\n";

        if(mail($toEmail, $sujet, $message, $mailHeaders))
        
            $message = "Le formulaire à bien été envoyé.";
        }
    ?>

    
</body>
</html>