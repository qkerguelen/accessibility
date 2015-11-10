<!DOCTYPE html>
<html>
    <head>
        <html lang="fr">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width"/>
<<<<<<< HEAD
        <title>Contact</title>
        <link rel="icon" type="image/png" href="">
        <link rel="stylesheet" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
=======
        <title>Accueil | Accessibility</title>
        <link rel="icon" type="image/png" href="">
        <link rel="stylesheet" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/style-franck.css">
>>>>>>> 3918f18b9345e4f8abfc5ed8ccedd9765c260173
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>

        <div class="wrapper">
            <?php include("header.php"); ?>
        </div>
       
        <div id="mainContent" class="wrapper">
            <section>
            <article>
               <form>
                    <label for="nom">Nom : </label>
                    <input id="nom" type="text" name="nom"/><br>
                    <label for="email">Email : </label>
                    <input id="email" type="email" name="email"/><br>
                    <label for="message">Message : </label>
                    <textarea id="message" name="message"></textarea>
               </form>
            </article>
            </section>
            <aside>
                <h3>Sidebar</h3>
                <p>Voilà voilà</p>
            </aside>
            <section></section>
        </div>

        <div id="mainFooter" class="wrapper">
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
