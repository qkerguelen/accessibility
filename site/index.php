<!DOCTYPE html>
<html>
    <head>
        <html lang="fr">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width"/>
        <title>Accueil | Accessibility</title>
        <link rel="icon" type="image/png" href="">
        <link rel="stylesheet" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
                <a href="liste-tab.html" target="_blank">liste</a>
                <table summary="les offres de l'agence">
                    <caption>Nos offres</caption>
                    <thead>
                        <tr>
                            <th id="l1c1">Options</th>
                            <th id="l1c2">Offre à 500€</th>
                            <th id="l1c3">Offre à 1500€</th>
                            <th id="l1c4">Offre à 10 000€</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th id="l2c1" headers="l1c1">e-commerce</th>
                            <td headers="l1c2 l2c1">Non</td> 
                            <td headers="l1c3 l2c1">Non</td>
                            <td headers="l1c4 l2c1">Oui</td>
                        </tr>
                        <tr>
                            <th id="l3c1" headers="l1c1">chat</th>
                            <td headers="l1c2 l3c1">Non</td> 
                            <td headers="l1c3 l3c1">Oui</td>
                            <td headers="l1c4 l3c1">Oui</td>
                        </tr>
                        <tr>
                            <th id="l4c1" headers="l1c1">commentaire</th>
                            <td headers="l1c2 l4c1">Oui</td> 
                            <td headers="l1c3 l4c1">Oui</td>
                            <td headers="l1c4 l4c1">Oui</td>
                        </tr>
                    </tbody>
                </table>
            </article>
            <article id="aftertab">
                
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
