<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact | Accessibility</title>
        <link rel="stylesheet" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" media="screen" href="css/responsive.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>

        <div class="wrapper">
            <?php include("header.php"); ?>
        </div>
        <div class="wrapper"><p><a href="index.php">Accueil</a> > Contact</p></div>
        <div id="mainContent" class="wrapper">
            <h1>Contact</h1>
            <section id="contact">
                <article>
                    <form>
                        <label for="nom">Nom : </label>
                        <input required id="nom" type="text" name="nom"/><br>
                        <label for="email">Email : </label>
                        <input required id="email" type="email" name="email"/><br>
                        <label for="message">Message : </label>
                        <textarea required id="message" name="message"></textarea>
                        </br>
                    <input value="envoyer" type="submit"></input>
                </form>
            </article>
        </section>
    </div>

<div id="mainFooter" class="wrapper">
    <?php include("footer.php"); ?>
</div>
</body>
</html>
