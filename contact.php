<?php
    $errName = NULL;
    $errEmail = NULL;
    $errPhone = NULL;
    $errMessage = NULL;
    $result = NULL;
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $to = 'carton.martine@orange.fr';
        $subject = 'Message ou commande envoyé(e) depuis le site internet';

        $body ="From: $name\n E-Mail: $email\n Téléphone: $phone\n Message:\n $message";
        // Check if name has been entered
        if (!$_POST['name'] || $_POST['name'] == "" ) {
            $errName = 'S\'il vous plait, entrez votre nom';
        }

        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'S\'il vous plait, entrez une adresse email valide';
        }

        // Check if phone has been entered
        if (!$_POST['phone'] || !filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT)) {
            $errPhone = 'S\'il vous plait, entrez un numéro de téléphone valide';
        }

        //Check if message has been entered
        if (!$_POST['message'] || !strlen(trim($_POST['message'])) ) {
            $errMessage = 'S\'il vous plait, entrez votre message';
        }

        $headers .= 'From:' .utf8_decode($name). ' <' .$email.'>' . '\r\n' .
            'Reply-To:'.$email. '\r\n' .
            'Content-Type: text/plain; charset="utf-8"\r\n';

        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errPhone && !$errMessage) {
            if ( mail($to, utf8_decode($subject), $body, $headers) ) {
                $result = '<div class="alert alert-success">Merci, nous vous recontacterons au plus vite!</div>';
            } else {
                $result = '<div class="alert alert-danger">Une erreur est survenue lors de l\'envoi. Veuillez réessayer plus tard ou nous contacter par téléphone. Merci!</div>';
            }
        }
    }
?>

<?php include("includes/header_begin.shtml"); ?>
    <meta name="description" content="contact, email, commandes Au PainLevé">
    <meta name="keywords" content="contact, email, commandes, Au PainLevé, boulangerie pâtisserie artisanale">
    <title>Contacter ou commander</title>
<?php include("includes/header_end.shtml"); ?>

<?php include("includes/navigation.shtml"); ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center"><strong>Nous Contacter</strong></h2>
                <hr>
                <p class="text-justify">Professionnel ou particulier, vous recherchez des prestations d'une boulangerie pâtisserie artisanale, nous mettons notre savoir-faire à votre service: nous livrons quotidiennement dans la métropole lilloise, avec une équipe et des installations en conséquence. 
                </p>
                <p class="text-justify">Mariages, conférences, occasions particulières, vous voulez agrémenter vos évènements : nous sommes là pour vos petits-déjeuners, brunchs, buffets et autres cocktails, envoyez-nous votre commande en ligne, nous vous répondrons dans les plus brefs délais! 
                </p>
                <form role="form" method="post" action="contact.php" >
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="name">Votre nom</label>
                            <input id="name" name="name" type="text" class="form-control" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="email">Votre email</label>
                            <input id="email" name="email" type="email" class="form-control" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="phone">Votre téléphone</label>
                            <input id="phone" name="phone" type="tel" class="form-control" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
                            <?php echo "<p class='text-danger'>$errPhone</p>";?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label for="message">Votre demande</label>
                            <textarea placeholder="Détaillez votre demande" name="message" class="form-control" rows="6">
                                <?php echo htmlspecialchars($_POST['message']); ?>
                            </textarea>
                            <?php echo "<p class='text-danger'>$errMessage</p>";?>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save">
                            <button id="submit" name="submit" type="submit" value="Send" class="btn btn-default">Envoyer</button>
                        </div>
                    </div>
                </form>
                <?php echo $result; ?>
            </div>
        </div>
    </div>
</div>
    
<?php include("includes/footer.shtml"); ?>
