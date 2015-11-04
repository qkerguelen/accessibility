<!DOCTYPE html>
<html>
    <head>
        <html lang="fr">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width"/>
        <title>Title</title>
        <link rel="icon" type="image/png" href="">
        <link rel="stylesheet" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <?php include("header.php"); ?>
        </div>
       
        <div class="wrapper">
            <section>
            <article>
                <a href="liste-tab.html" target="_blank">liste</a>
                <table summary="Budget pour mon voyage hihi! ">
                    <caption>Budget voyage</caption>
                    <thead>
                        <tr>
                            <th id="l1c1">Destination</th>
                            <th id="l1c2">Dates du déplacement</th>
                            <th id="l1c3">Repas</th>
                            <th id="l1c4">Hôtel</th>
                            <th id="l1c5">Transport</th>
                            <th id="l1c6">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th id="l2c1" headers="l1c1" rowspan="3">Nice</th>
                            <th id="l2c2" headers="l1c2 l2c1">25 août</th> 
                            <td headers="l1c3 l2c1 l2c2">37</td>
                            <td headers="l1c4 l2c1 l2c2">112</td>
                            <td headers="l1c5 l2c1 l2c2">45</td>
                            <td headers="l1c6 l2c1 l2c2"> </td>
                        </tr>
                        <tr>
                            <th id="l3c2" headers="l1c2 l2c1">26 août</th>
                            <td headers="l1c3 l2c1 l3c2">27</td>
                            <td headers="l1c4 l2c1 l3c2">112</td>
                            <td headers="l1c5 l2c1 l3c2">45</td>
                            <td headers="l1c6 l2c1 l3c2"> </td>
                        </tr>
                    </tbody>
                </table>
            </article>
            </section>
            <aside>
                <h3>Sidebar</h3>
                <p>Voilà voilà</p>
            </aside>
            <section></section>
        </div>

        <div class="wrapper">
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
