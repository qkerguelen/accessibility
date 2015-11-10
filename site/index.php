<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil | Accessibility</title>
        <link rel="stylesheet" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>

        <div class="wrapper">
            <?php include("header.php"); ?>
        </div>

        <div id="mainContent" class="wrapper">
            <h1>Accessibility, l'agence web de l'accessibilité</h1>
            <section>
                <article>
                    <h2>Créativité, originalité et services innovants,sont nos mots d’ordre.</h2>
                    <p>C’est en 2011 que deux jeunes passionnés du web <a class="blank" title="quentin kerguelen" target="_blank" href="http://qkerguelen.fr/">Quentin Kerguelen</a> et <a title="franck zussy" target="_blank" href="http://www.franck-zussy.fr/">Franck Zussy </a>ont entrepris d’associer leurs savoir-faire en design et en développement pour fonder Accessibility, une innovante agence de création digitale.</p>

                    <p>Forte de la complémentarité des compétences de ses dirigeants, Accessibility a très rapidement pris en charge des projets d’envergure, et n’a cessé d’élargir sa gamme de services.
                        Agence à taille humaine, Accessibility place le client au centre de toutes ces prestations. Composé d’une équipe d’une moyenne d’age de 30 ans, sa jeunesse lui donne la capacité de proposer un regard nouveau tout en respectant les codes du métier.</p>
                </article>
                <article id="tab">
                    <a href="liste-tab.html" title="accéder au tableau sous forme de liste" target="_blank">accéder au tableau sous forme de liste</a>
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
                    <h2>Créativité, originalité et services innovants,sont nos mots d’ordre.</h2>

                    <p>Après plus de 3 ans d’existence, diverses expériences allant du print au web en passant par l’application mobile, la 3D, la vidéo; du client institutionnel au plus atypique, Accessibility a su développer une forte expertise dans les métiers du web et se positionne aujourd’hui parmi les meilleures agences de création parisiennes.</p>
                </article>

            </section>
            <aside>
                <h2>Nos locaux</h2>
                <img width="100%" src="img/aside.png" alt="locaux de l'agence">
            </aside>
        </div>

        <div id="mainFooter" class="wrapper">
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
